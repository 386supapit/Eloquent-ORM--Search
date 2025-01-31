<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(), // สร้าง Customer ใหม่อัตโนมัติ
            'order_date' => $this->faker->date(), // สร้างวันที่แบบสุ่ม
            'order_status' => $this->faker->randomElement(['pending', 'completed', 'canceled']), // สุ่มสถานะ
            'total_amount' => $this->faker->randomFloat(2, 100, 1000), // ค่ารวมระหว่าง 100 - 1000 บาท
        ];
    }
}
