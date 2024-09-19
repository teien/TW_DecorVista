<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DesignerProfile;

class DesignerProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng DesignerProfiles
        DesignerProfile::create([
            'designer_id' => 1, // Giả sử ID của nhà thiết kế đã tồn tại trong bảng InteriorDesigners
            'first_name' => 'John',
            'last_name' => 'Doe',
            'bio' => 'Experienced interior designer specializing in modern minimalist designs.',
            'company_name' => 'Doe Interiors',
            'website_url' => 'https://doeinteriors.com',
            'fb_url' => 'https://facebook.com/johndoe',
            'twitter_url' => 'https://twitter.com/johndoe',
            'instagram' => 'https://instagram.com/johndoe',
            'linkedin' => 'https://linkedin.com/in/johndoe',
            'skype' => 'johndoe_skype',
            'profile_image_url' => 'https://example.com/profile/johndoe.jpg',
            'contact_number' => '1234567890',
            'contact_email' => 'contact@doeinteriors.com'
        ]);

    }
}
