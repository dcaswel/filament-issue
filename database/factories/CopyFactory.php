<?php

namespace Database\Factories;

use App\Models\Copy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CopyFactory extends Factory
{
    protected $model = Copy::class;

    public function definition(): array
    {
        return [
            'name'       => $this->faker->name(),
            'status'     => $this->faker->randomElement(['purchased', 'available', 'posted']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
