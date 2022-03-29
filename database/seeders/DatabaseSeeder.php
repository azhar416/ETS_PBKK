<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Record;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Record::factory(3)->create();

        Patient::create([
            'name' => 'Daffa',
        ]);

        Patient::create([
            'name' => 'Azhar',
        ]);

        Doctor::create([
            'name' => 'Tatang',
        ]);

        Doctor::create([
            'name' => 'Toto',
        ]);
    }
}
