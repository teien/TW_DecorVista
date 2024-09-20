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
        // Lấy ngẫu nhiên một user và một designer
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
