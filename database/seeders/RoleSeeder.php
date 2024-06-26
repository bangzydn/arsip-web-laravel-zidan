<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $roles = [
        ["kaur", "Kepala Urusan"],
        ["kasi", "Kepala Seksi"],
        ["staff", "Staff"],
        ["camat", "Camat"],
        ["kepdes", "Kepala Desa"],
        ["kasubag", "Kepala Sub Bagian"],
        ["sekdes", "Sekretaris Desa"],
        ["sekmat", "Sekretaris Kecamatan"],
    ];  
    public function run()
    {       
        foreach ($this->roles as $role) {
            \App\Models\Role::create([
                // "guid" => $role[0],
                "role_name" => $role[1],
            ]);
        }
    }
}
