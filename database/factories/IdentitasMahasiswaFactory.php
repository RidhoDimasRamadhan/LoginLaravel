<?php

namespace Database\Factories;

use faker\Factory as facker; 
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IdentitasMahasiswa>
 */
class IdentitasMahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = facker::create();
        return [

            // untuk cara melihat faker ini segala macem bisa dilihat di facker php
            "nama" => $faker->name(),
            "NPM" => mt_rand(0000001,999999),
            "class_id" => Arr::random([1,2,3,4]),
        ];
    }
}
