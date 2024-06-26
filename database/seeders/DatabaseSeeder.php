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
            'name' => 'Huna',
            'email' => 'huna@gmail.com',
            'password' => bcrypt('huna1234'),
            'role_id'=> 2,
            'department_id' => 1,
            'branch_id' => 1 
        ]);
        // Department::create([
        //     'name' => 'Kecamatan 1'
        // ]);
        // Branch::create([
        //     'branch_name' => 'Keluharan 1'
        // // ]);
        // $this->call(RoleSeeder::class);
    }
}
