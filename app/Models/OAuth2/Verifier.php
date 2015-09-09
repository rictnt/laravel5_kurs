<?php

namespace App\Models\OAuth2;

use Illuminate\Support\Facades\Auth;

class Verifier
{
  public function verify($username, $password)
  {
      
      $credentials = [
        'email'    => $username,
        'password' => $password,
      ];

      if (Auth::once($credentials)) {
          return Auth::user()->id;
      }

      return false;
  }
}
