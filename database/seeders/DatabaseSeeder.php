<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Attributes\Group;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            /* GroupsSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ClientSeeder::class, */
            CategoriesClientsSeeder::class,
        ]);
    }
}
