<?php

namespace Database\Seeders;

use App\Models\CategoryPortofolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryPortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryPortofolio::created([
            'name_category' => 'Personal',   
        ]);
    }
}
