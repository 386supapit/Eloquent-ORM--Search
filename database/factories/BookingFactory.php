<?php

namespace Database\Factories;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $checkIn = $this->faker->date();
        $checkOut = $this->faker->date('Y-m-d', $checkIn . ' + ' . rand(1, 7) . ' days');
        $room = Room::inRandomOrder()->first(); // ดึง Room แบบสุ่ม

        return [
            'customer_id' => Customer::factory(),
            'room_id' => $room->id, // ใช้ ID ของ Room ที่ดึงมา
            'check_in' => Carbon::today(),
            'check_out' => Carbon::today()->addDays(rand(1, 7)),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
            'total_price' => $this->faker->randomFloat(2, 1000, 10000),
        ];
    }
}
