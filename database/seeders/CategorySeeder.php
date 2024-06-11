<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Groups;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Smartphones' => 'Mobile Devices',
            'Tablets' => 'Mobile Devices',
            'Laptop' => 'Computers',
            'Desktop Computer' => 'Computers',
            'TVs' => 'Entertainment',
            'Consoles' => 'Entertainment',
            'Headphones' => 'Audio',
            'Speakers' => 'Audio',
        ];

        foreach ($categories as $category => $group) {
            $group = Groups::where('name', $group)->first();
                Category::create([
                'name' => $category,
                'group_id' => $group->id,
            ]);
        }
    }
}
