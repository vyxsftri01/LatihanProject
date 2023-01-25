<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = Role::create([
            'name' => 'admin',
            // 'display_name' => 'User Administrator', // optional
        ]);

        $adminUser = new User();
        $adminUser->name = 'Admin Project';
        $adminUser->email = 'admin@gmail.com'; // optional
        $adminUser->password = bcrypt('rahasia');
        $adminUser->save();
        $adminUser->attachRole($adminRole);

        $memberRole = Role::create([
            'name' => 'member',
            // 'display_name' => 'User Administrator', // optional
        ]);

        $memberUser = new User();
        $memberUser->name = 'Member Sewa Villa';
        $memberUser->email = 'member@gmail.com'; // optional
        $memberUser->password = bcrypt('rahasia');
        $memberUser->save();
        $memberUser->attachRole($memberRole);
    }
}
