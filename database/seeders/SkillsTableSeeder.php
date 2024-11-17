<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'Laravel'],
            ['name' => 'JavaScript'],
            ['name' => 'PHP'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'React.js'],
            ['name' => 'Vue.js'],
            ['name' => 'Node.js'],
            ['name' => 'Python'],
            ['name' => 'Ruby on Rails'],
            ['name' => 'ASP.NET'],
            ['name' => 'Django'],
            ['name' => 'SQL'],
            ['name' => 'MongoDB'],
            ['name' => 'GraphQL'],
            ['name' => 'RESTful APIs'],
            ['name' => 'Angular'],
            ['name' => 'Bootstrap'],
            ['name' => 'Tailwind CSS'],
            ['name' => 'jQuery'],
            ['name' => 'TypeScript'],
            ['name' => 'Docker'],
            ['name' => 'Kubernetes'],
            ['name' => 'Git'],
            ['name' => 'WordPress'],
            ['name' => 'Shopify Development'],
            ['name' => 'Flutter'],
            ['name' => 'Kotlin'],
            ['name' => 'Swift'],
            ['name' => 'Figma'],
            ['name' => 'Adobe XD'],
            ['name' => 'SEO'],
        ];
        
        
        $skills = array_map(function ($skill) {
            $skill['slug'] = Str::slug($skill['name']);
            return $skill;
        }, $skills);
        
        DB::table('skills')->insert($skills);
    }
}
