<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $superAdminRole = new Role;
        $superAdminRole->name = 'superadmin';
        $superAdminRole->save();

        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $moderatorRole = new Role;
        $moderatorRole->name = 'moderator';
        $moderatorRole->save();

        $userRole = new Role;
        $userRole->name = 'user';
        $userRole->save();

        $user = User::where('username','=','superadmin')->first();
        $user->attachRole( $superAdminRole );

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $adminRole );

        $user = User::where('username','=','moderator')->first();
        $user->attachRole( $moderatorRole );

        $user = User::where('username','=','user')->first();
        $user->attachRole( $userRole );
    }

}
