<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'posts.*']);
        Permission::create(['name' => 'posts.create']);
        Permission::create(['name' => 'posts.edit']);
        Permission::create(['name' => 'posts.update']);
        Permission::create(['name' => 'posts.delete']);

        // create the role
        $role = Role::create(['name' => 'in_server']);

        // assign the permission
        $role->givePermissionTo(['posts.*']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $permissions = Permission::where('name', 'LIKE', '%posts.%')->get();
        foreach ($permissions as $permission) {
            Permission::destroy($permission->id);
        }

        $role = Role::where('name', 'in_server')->first();
        Role::destroy($role->id);
    }
};
