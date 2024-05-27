<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
        	'Technology',
			'Healthcare',
			'Education',
			'Finance',
			'Hospitality',
			'Retail',
			'Marketing',
			'Sales',
			'Customer Service',
			'Human Resources',
			'Engineering',
			'Design',
			'Manufacturing',
			'Construction',
			'Transportation',
			'Logistics',
			'Administration',
			'Legal',
			'Media',
			'Arts and Entertainment',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

    }
}


