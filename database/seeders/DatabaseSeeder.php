<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Paniers;
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

        
        $this->call([
            AdminUserSeeder::class,
            ProduitsSeeder::class,
        ]);
    }
}
