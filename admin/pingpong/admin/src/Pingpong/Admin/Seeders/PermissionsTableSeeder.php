<?php namespace Pingpong\Admin\Seeders;

use Pingpong\Trusty\Entities\Permission;
use Pingpong\Trusty\Entities\Role;

class PermissionsTableSeeder extends \Seeder {

    public function run()
    {
        $permissions = array(
            'Manage Users',
            'Manage Articles',
            'Manage Pages',
            'Manage Categories',
            'Manage Settings',
            'Manage Roles',
            'Manage Permissions',
        );

        foreach ($permissions as $permission)
        {
            Permission::create([
                'name' => $permission,
                'slug' => $permission,
                'description' => $permission,
            ]);
        }

        $permissions = Permission::lists('id');

        Role::find(1)->permissions()->attach($permissions);

    }

}