<?php

namespace Database\Factories;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KaryawanFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nip' => fake()->unique()->numerify('##########'),
            'nama' => fake()->name(),
            'jabatan' => fake()->randomElement(['Staff', 'Supervisor', 'Manager', 'Analisis', 'Admin']),
            'divisi' => fake()->randomElement(['HRD', 'Keuangan', 'IT', 'Pemasaran', 'Operasional']),
            'gaji' => fake()->randomFloat(2, 3000000, 25000000),
            'tanggal_masuk' => fake()->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
            'keterangan' => fake()->optional()->sentence(),
        ];
    }
}
