<?php

namespace Database\Seeders;
use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder {

    public function run() {
School::factory(10)->create();

    }

}