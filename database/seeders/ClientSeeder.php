<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Client;
use App\Models\Groups;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Client::factory(10)->create();
    }
}
