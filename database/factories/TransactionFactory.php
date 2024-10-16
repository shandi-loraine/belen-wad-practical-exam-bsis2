<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

use function Illuminate\Support\enum_value;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_title' => fake()->lastName(),
            'description' =>fake()->sentence(),
            'status' => fake()->randomElement(['declined', 'successful']),
            'total_amount'=> fake() -> numberBetween(10,1000), 
            'transaction_number'=> fake() -> numberBetween(1000, 9999), 
        ];
    }
}
