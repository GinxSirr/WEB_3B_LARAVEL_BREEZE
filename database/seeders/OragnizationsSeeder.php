<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organization;

class OragnizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizations = [
            [
                'pres_name' => 'Maria Santos',
                'college' => 'College of Engineering',
                'org_name' => 'Engineering Society',
            ],
            [
                'pres_name' => 'John Dela Cruz',
                'college' => 'College of Computer Studies',
                'org_name' => 'Computer Science Guild',
            ],
            [
                'pres_name' => 'Anna Reyes',
                'college' => 'College of Business Administration',
                'org_name' => 'Business Club',
            ],
            [
                'pres_name' => 'Carlos Garcia',
                'college' => 'College of Arts and Sciences',
                'org_name' => 'Science Society',
            ],
            [
                'pres_name' => 'Sofia Rodriguez',
                'college' => 'College of Education',
                'org_name' => 'Future Educators Association',
            ],
            [
                'pres_name' => 'Miguel Torres',
                'college' => 'College of Engineering',
                'org_name' => 'Robotics Club',
            ],
            [
                'pres_name' => 'Isabel Fernandez',
                'college' => 'College of Computer Studies',
                'org_name' => 'Web Developers Alliance',
            ],
            [
                'pres_name' => 'Diego Mendoza',
                'college' => 'College of Arts and Sciences',
                'org_name' => 'Mathematics Society',
            ],
            [
                'pres_name' => 'Gabriela Cruz',
                'college' => 'College of Business Administration',
                'org_name' => 'Entrepreneurship Circle',
            ],
            [
                'pres_name' => 'Rafael Aquino',
                'college' => 'College of Engineering',
                'org_name' => 'Civil Engineering Society',
            ],
        ];

        foreach ($organizations as $org) {
            Organization::create($org);
        }
    }
}
