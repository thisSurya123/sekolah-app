<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nisn' => $this->faker->randomNumber(5, true),
            'nama' => $this->faker->firstName() .' '. $this->faker->lastName(),
            'password' => Hash::make('password'),
            'email' => $this->faker->email(),
            'kelas' => mt_rand(10, 12),
            'jurusan_id' => mt_rand(1, 5),
            'tgl_lahir' => $this->faker->date(),
            'alamat' => $this->faker->address()
        ];
    }
}
