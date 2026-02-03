<?php

namespace Database\Seeders;

use App\Models\Portofolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portofolio::create([
            'title' => 'Personal Website',
            'description' => 'A personal website to showcase my portfolio and blog posts.',
            'category_id' => 1,
            'image' => 'personal_website.png',
        ]);
    }
}
