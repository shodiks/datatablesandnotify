<?php
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role admin
        $adminrole = new Role ;
        $adminrole->name = "admin";
        $adminrole->display_name = "Admin";
        $adminrole->save();

        //role member
        $memberRole = new Role ;
        $memberRole->name = "member";
        $memberRole->display_name = "member";
        $memberRole->save();

        //sample admin
        $adminuser = new User ;
        $adminuser->name ="admin larapus";
        $adminuser->email = "shodik1@gmail.com";
        $adminuser->password = bcrypt("123456");
        $adminuser->save();
        $adminuser->attachRole($adminrole) ;

        //sample user
        $member = new User ;
        $member->name = "Sample user";
        $member->email = "sanjaya@gmail.com";
        $member->password = bcrypt("apa");
        $member->save();
        $member->attachRole($memberRole);
        
    }
}
