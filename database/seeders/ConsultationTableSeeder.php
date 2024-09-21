<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\InteriorDesigner;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $user = User::where('role', 'Homeowner')->inRandomOrder()->first();
            $designer = InteriorDesigner::inRandomOrder()->first();

            // Tạo cuộc hẹn mẫu
            Consultation::create([
                'user_id' => $user->id,  // ID của Homeowner
                'designer_id' => $designer->designer_id,  // ID của Designer
                'start_time' => Carbon::now()->addDays(3),  // Thời gian bắt đầu
                'end_time' => Carbon::now()->addDays(3)->addHours(1),  // Thời gian kết thúc
                'status' => 'pending',  // Trạng thái cuộc hẹn
                'notes' => 'This is a sample consultation note',  // Ghi chú
            ]);
        }
    }
}
