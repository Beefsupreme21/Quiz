<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'Pokemon',
        ]);

        Category::factory()->create([
            'name' => 'Movies',
        ]);

        Category::factory()->create([
            'name' => 'Harry Potter',
        ]);

        Category::factory()->create([
            'name' => 'Methods()',
        ]);
    }
}
