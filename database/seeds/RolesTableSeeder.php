<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        Role::create([
            'id' => 1,
            'name' => 'Admin',
            'description' => 'An Admin'
        ]);
        Role::create([
            'id' => 2,
            'name' => 'Store-manager',
            'description' => 'A Store Manager'
        ]);
        Role::create([
            'id' => 3,
            'name' => 'Seller',
            'description' => 'A normal Seller'
        ]);
    }
}
