<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //List Permissions
        $permissions = [
            'manage statistics',
            'manage products',
            'manage principles',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts',
            'manage appointments',
            'manage hero sections',
        ];
        
        // Simpan permission
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                [
                    'name' => $permission
                ]
            );
        }
 /*
        // Membuat Role Lainnya
        $otherRole = Role::firstOrCreate(
            [
            'name' => 'other_role_name'
            ]
        );

        // Set Permission dari Role lain
        $otherrolePermission = [
            'manage statistics',
            'manage products',
            'manage principles',
            //tambahkan berdasarkan list permission
        ];

        //Sinkonisasi Permission pada role lain
        $otherRole->syncPermissions($otherrolePermission);

*/

        $superadminRole = Role::firstOrCreate(
            [
            'name' => 'super_admin'
            ]
        );

        $user = User::create([
            'name' => 'shaynacomp',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        // Assign 'super_admin' role to the user
        $user->assignRole($superadminRole);

    }
}
