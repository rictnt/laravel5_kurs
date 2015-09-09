<?php
use App\User;

class UsersTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testUsers()
    {
        // generowanie przykładowego obiektu użytkownika
        $user = factory(App\User::class)->make();
        // dodawanie użytkownika do bazy danych
        User::create($user->toArray());
        // sprawdzenie instancji użytkownika w bazie danych 
        $this->seeInDatabase('users', ['email' => $user->email]);
        //usunięcie użytkownika z bazy danych
        $user->delete();
    }
}