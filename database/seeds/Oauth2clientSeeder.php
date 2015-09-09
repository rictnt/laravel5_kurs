<?php

use Illuminate\Database\Seeder;

class Oauth2clientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->delete();
        
        DB::table('oauth_clients')->insert([
            'id' => 'f3d259ddd3ed8ff3843839b',
            'secret' => '4c7f6f8fa93d59c45502c0ae8c4a95b',
            'name' => 'Portal Muzyczny'
        ]);
    }
}
