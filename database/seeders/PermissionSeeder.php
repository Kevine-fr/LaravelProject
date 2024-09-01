<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = ['Gérer Utilisateurs','Gérer Salles','Gérer Classes',
        'Gérer Années Scolaires','Gérer Etudiants','Gérer Cours','Gérer Professeurs','Demande Modification Planning'];
        foreach ($permissions as $permission){
            Permission::create(['name' => $permission]);
        }
    }
}
