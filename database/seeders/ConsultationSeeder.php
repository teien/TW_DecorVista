<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consultation; // Sử dụng model Consultation
use App\Models\User;
use App\Models\InteriorDesigner;
use Carbon\Carbon;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::where('role', 'Homeowner')->inRandomOrder()->first();
        $designer = InteriorDesigner::inRandomOrder()->first();


        Consultation::create([
            'user_id' => $user->id,
            'designer_id' => $designer->designer_id,
             'start_time' => Carbon::now()->addDays(3),
            'end_time' => Carbon::now()->addDays(3)->addHours(1),
            'status' => 'pending',
            'notes' => 'This is a sample consultation note',  // Ghi chú
        ]);
    }
}
