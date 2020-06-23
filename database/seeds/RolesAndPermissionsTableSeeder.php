<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        //Create Permissions
        Permission::create(['name' => 'privilege-management','guard_name' => 'admin']);
        Permission::create(['name' => 'add-roles','guard_name' => 'admin']);
        Permission::create(['name' => 'delete-roles','guard_name' => 'admin']);
        Permission::create(['name' => 'sync-permissions','guard_name' => 'admin']);
        Permission::create(['name' => 'users-management','guard_name' => 'admin']);
        Permission::create(['name' => 'view-users','guard_name' => 'admin']);
        Permission::create(['name' => 'add-users','guard_name' => 'admin']);
        Permission::create(['name' => 'edit-users','guard_name' => 'admin']);
        Permission::create(['name' => 'delete-users','guard_name' => 'admin']);
        Permission::create(['name' => 'administrators-management','guard_name' => 'admin']);
        Permission::create(['name' => 'view-administrators','guard_name' => 'admin']);
        Permission::create(['name' => 'add-administrators','guard_name' => 'admin']);
        Permission::create(['name' => 'edit-administrators','guard_name' => 'admin']);
        Permission::create(['name' => 'delete-administrators','guard_name' => 'admin']);
        Permission::create(['name' => 'posts-management','guard_name' => 'admin']);
        Permission::create(['name' => 'view-posts', 'guard_name' => 'admin']);
        Permission::create(['name' => 'add-posts', 'guard_name' => 'admin']);
        Permission::create(['name' => 'edit-posts', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-posts', 'guard_name' => 'admin']);
        Permission::create(['name' => 'cms-management','guard_name' => 'admin']);
        Permission::create(['name' => 'pages-management','guard_name' => 'admin']);
        Permission::create(['name' => 'view-pages', 'guard_name' => 'admin']);
        Permission::create(['name' => 'add-pages', 'guard_name' => 'admin']);
        Permission::create(['name' => 'edit-pages', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-pages', 'guard_name' => 'admin']);
        Permission::create(['name' => 'faqs-management','guard_name' => 'admin']);
        Permission::create(['name' => 'view-faqs', 'guard_name' => 'admin']);
        Permission::create(['name' => 'add-faqs', 'guard_name' => 'admin']);
        Permission::create(['name' => 'edit-faqs', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-faqs', 'guard_name' => 'admin']);
        Permission::create(['name' => 'testimonies-management','guard_name' => 'admin']);
        Permission::create(['name' => 'view-testimonies', 'guard_name' => 'admin']);
        Permission::create(['name' => 'add-testimonies', 'guard_name' => 'admin']);
        Permission::create(['name' => 'edit-testimonies', 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete-testimonies', 'guard_name' => 'admin']);
        Permission::create(['name' => 'laravel-inline-editor', 'guard_name' => 'admin']);

        //Admin Role
        $developer = Role::create(['name' => 'Developer','guard_name' => 'admin']);
        $super = Role::create(['name' => 'Super User','guard_name' => 'admin']);
        $ordinary = Role::create(['name' => 'Ordinary User','guard_name' => 'admin']);

        //Give developer all permissions (Very Important)
        $developer->syncPermissions(Permission::all());

        $super->givePermissionTo('users-management');
        $super->givePermissionTo('view-users');
        $super->givePermissionTo('add-users');
        $super->givePermissionTo('edit-users');
        $super->givePermissionTo('delete-users');
        $super->givePermissionTo('administrators-management');
        $super->givePermissionTo('view-administrators');
        $super->givePermissionTo('add-administrators');
        $super->givePermissionTo('edit-administrators');
        $super->givePermissionTo('delete-administrators');
        $super->givePermissionTo('posts-management');
        $super->givePermissionTo('view-posts');
        $super->givePermissionTo('add-posts');
        $super->givePermissionTo('edit-posts');
        $super->givePermissionTo('delete-posts');
        $super->givePermissionTo('cms-management');
        $super->givePermissionTo('pages-management');
        $super->givePermissionTo('view-pages');
        $super->givePermissionTo('add-pages');
        $super->givePermissionTo('edit-pages');
        $super->givePermissionTo('delete-pages');
        $super->givePermissionTo('faqs-management');
        $super->givePermissionTo('view-faqs');
        $super->givePermissionTo('add-faqs');
        $super->givePermissionTo('edit-faqs');
        $super->givePermissionTo('delete-faqs');
        $super->givePermissionTo('testimonies-management');
        $super->givePermissionTo('view-testimonies');
        $super->givePermissionTo('add-testimonies');
        $super->givePermissionTo('edit-testimonies');
        $super->givePermissionTo('delete-testimonies');

        $ordinary->givePermissionTo('users-management');
        $ordinary->givePermissionTo('view-users');
        $ordinary->givePermissionTo('posts-management');
        $ordinary->givePermissionTo('view-posts');
        $ordinary->givePermissionTo('add-posts');
        $ordinary->givePermissionTo('edit-posts');
        $ordinary->givePermissionTo('delete-posts');
        $ordinary->givePermissionTo('cms-management');
        $ordinary->givePermissionTo('pages-management');
        $ordinary->givePermissionTo('view-pages');
        $ordinary->givePermissionTo('add-pages');
        $ordinary->givePermissionTo('edit-pages');
        $ordinary->givePermissionTo('delete-pages');
        $ordinary->givePermissionTo('faqs-management');
        $ordinary->givePermissionTo('view-faqs');
        $ordinary->givePermissionTo('add-faqs');
        $ordinary->givePermissionTo('edit-faqs');
        $ordinary->givePermissionTo('delete-faqs');
        $ordinary->givePermissionTo('testimonies-management');
        $ordinary->givePermissionTo('view-testimonies');
        $ordinary->givePermissionTo('add-testimonies');
        $ordinary->givePermissionTo('edit-testimonies');
        $ordinary->givePermissionTo('delete-testimonies');

    }
}
