<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Province>
 */
class ProvinceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'province_name' => 'JAMBI',
            'video_link' => 'nanan',
            'deskripsi' => 'Kektulah',
            'sejarah' => 'cemtu',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
