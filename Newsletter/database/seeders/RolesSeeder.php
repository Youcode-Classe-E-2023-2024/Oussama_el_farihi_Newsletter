<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        // Création des rôles
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleMember = Role::create(['name' => 'member']);

        // Création des permissions
        $permissions = [
            'view newsletter',
            'create newsletter',
            'edit newsletter',
            'delete newsletter',
            'upload media',
            'delete media',
            // Ajoutez d'autres permissions selon vos besoins
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Attribuer toutes les permissions au rôle Admin
        $roleAdmin->givePermissionTo(Permission::all());

        // Attribuer des permissions sélectionnées aux autres rôles
        $roleEditor->givePermissionTo(['view newsletter', 'create newsletter', 'edit newsletter', 'upload media']);
        $roleMember->givePermissionTo(['view newsletter']);
        
    }
}