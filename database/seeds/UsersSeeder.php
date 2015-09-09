<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Entrust\Permission;
use App\Models\Entrust\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        //kasowanie wszystkich wierszów z użytkownikami w bazie danych
        DB::table('users')->delete();
        
        //usuwanie wszelkich danych z bazy danych związanych z kontrolą dostępu
        DB::table('roles')->delete();
        DB::table('role_user')->delete();
        DB::table('permissions')->delete();
        DB::table('permission_role')->delete();
        
        //nadanie nowej roli dla użytkownika
        $opiekun = Role::create([
            'name' => 'opiekun', 
            'display_name' => 'Opiekun', 
            'description' => 'Opiekun wybranych sekcji aplikacji.'
        ]);
        
        //nadanie konkretnego przyzwolenia
        $odczytDanychStudentow = Permission::create([
            'name' => 'odczytDanychStudentow',
            'display_name' => 'Odczyt danych studentów.', 
            'description' => 'Rola ta zezwala na podgląd danych studentów.'
        ]);
        
        //przypisanie przyzwolenia do roli
        $opiekun->attachPermission($odczytDanychStudentow);
        
        User::create([
            'name' => 'Kowalski',
            'email' => 'kowalski@email.com',
            'password' => Hash::make('kowal')
        ]); 
        
        $user2 = User::create([
            'name' => 'Nowak',
            'email' => 'nowak@email.com',
            'password' => Hash::make('nowak')
        ]); 
        
        //przypisanie roli opiekuna dla Nowaka
        $user2->attachRole($opiekun);
    }
}
