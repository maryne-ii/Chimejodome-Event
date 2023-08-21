<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Stringable;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->realTextBetween(5,30,5),//เดี๋ยวแก้ *ใช้ได้แต่ไม่สวย
            'header' => fake()->name(),
            'detail' => fake()->realTextBetween(5,200,5),//เดี๋ยวแก้ *ใช้ได้แต่ไม่สวย
            // 'bank_account_number' =>rand(100000000,9999999999),
            'bank_account_number'=>fake()->bankAccountNumber(),
            'participant_total' =>fake()->numberBetween(10,100),
            'organizer_total'=>fake()->numberBetween(1,30),
            'location'=>fake()->city(),//เดี๋ยวแก้ *ใช้ได้แต่ไม่สวย
            'status'=>1,
            'start_date'=>fake()->dateTimeBetween('0 week', '+4 week')
            
        ];
            
            // $table->datetime('start_date')->nullable();
            // $table->datetime('end_date')->nullable();
    }
}
