<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\IdentitasMahasiswa;
use Carbon\Carbon;

class identitasMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // identitasMahasiswa::insert([
        //     "nama" =>"Dimas Ramadhan lohh",
        //     "NPM" =>"10120999",
        //     "class_id" =>"2",
        //     "created_at" => Carbon::now(),
        //     "updated_at" => Carbon::now()
        // ]);

        identitasMahasiswa::factory()->count(10)->create();
    }
}
