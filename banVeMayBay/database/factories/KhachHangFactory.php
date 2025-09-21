<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KhachHang;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KhachHang>
 */
class KhachHangFactory extends Factory
{
   /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

   protected $model = KhachHang::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'contact'=> $this->faker->numerify('0#########'),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}