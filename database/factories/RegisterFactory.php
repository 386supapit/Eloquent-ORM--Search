<?php

namespace Database\Factories;


use App\Models\Register;
use App\Models\Student;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Register>
 */
class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),  // สร้าง Student ใหม่อัตโนมัติ
            'course_id' => Course::factory(),   // สร้าง Course ใหม่อัตโนมัติ
            'registered_at' => Carbon::now(), // ใช้วันที่ปัจจุบันเป็นวันลงทะเบียน
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']), // สุ่มสถานะ
            'fee_paid' => $this->faker->boolean(80), // 80% โอกาสเป็น true (จ่ายเงินแล้ว)
        ];
    }
}
