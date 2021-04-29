<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Idiomas;

class IdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Idiomas::factory()->count(200)->create();
        //
    }
}
