<?php

class SentryTableSeeder extends Seeder {

	public function run()
	{
	   // Uncomment the below to wipe the table clean before populating
            DB::table('users')->truncate();
            DB::table('groups')->truncate();
            DB::table('users_groups')->truncate();

	    Sentry::getUserProvider()->create(array(
                'email'       => 'admin@satz.com',
                'password'    => "admin",
                'first_name'  => 'SathishKumar',
                'last_name'   => 'Selvamani',
                'activated'   => 1,
                'wallet'      => 100
            ));
 
            Sentry::getGroupProvider()->create(array(
                'name'        => 'Satz',
                'permissions' => array('admin' => 1),
            ));

            // Assign user permissions
            $adminUser  = Sentry::getUserProvider()->findByLogin('admin@satz.com');
            $adminGroup = Sentry::getGroupProvider()->findByName('Satz');
            $adminUser->addGroup($adminGroup);
	}

}
