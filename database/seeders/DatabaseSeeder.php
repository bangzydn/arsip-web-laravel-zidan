<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Branch;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Zidan Muhammad Herman',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'department_id' => 1,
            'branch_id' => 1 
        ]);
        Department::create([
            'name' => 'Kecamatan 1'
        ]);
        Branch::create([
            'branch_name' => 'Keluharan 1'
        ]);
        
    }
}
