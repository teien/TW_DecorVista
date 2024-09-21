<?php

namespace Database\Seeders;

use App\Models\DesignerProfile;
use App\Models\InteriorDesigner;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0123456789',
            'password' => bcrypt('admin'),
            'role' => 'Admin',
        ]);

        $this->call(ProductsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        for ($i = 0; $i < 10; $i++) {

            $role = rand(0, 1) ? 'InteriorDesigner' : 'Homeowner';
            $user = User::create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => '11111111',
                'role' => $role, // Gán role là Designer hoặc Homeowner
            ]);

            // Nếu role là InteriorDesigner, tạo thêm profile cho InteriorDesigne
            if ($role === 'InteriorDesigner') {
                InteriorDesigner::create([
                    'user_id' => $user->id,
                    'years_of_experience' => rand(1, 10) ,
                    'specialization' => 'Specialization ' . $i,
                ]);
               DesignerProfile::create([
                        'designer_id' => InteriorDesigner::where('user_id', $user->id)->first()->designer_id,
                        'first_name' => 'First Name ' . $i,
                        'last_name' => 'Last Name ' . $i,
                        'bio' => 'Bio ' . $i,
                        'company_name' => 'Company Name ' . $i,
                        'website_url' => 'http://example.com',
                        'fb_url' => 'http://facebook.com',
                        'twitter_url' => 'http://twitter.com',
                        'instagram' => 'http://instagram.com',
                        'linkedin' => 'http://linkedin.com',
                        'skype' => 'skype',
                        'profile_image_url' => 'http://example.com/image.jpg',
                        'contact_number' => '0123456789',
                        'contact_email' => 'user' . $i . '@example.com',
                ]);
            }
        }
        $this->call(ConsultationTableSeeder::class);
    }
}



