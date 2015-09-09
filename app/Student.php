<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

 /**
  * @property array $fillable ['imie', 'nazwisko', 'adres', 'kod_pocztowy', 'miejscowosc', 'telefon']
  */
class Student extends Model
{
    protected $table='students';
    
    protected $fillable = [
        'imie',
        'nazwisko',
        'adres',
        'kod_pocztowy',
        'miejscowosc',
        'telefon'
    ];
    protected $hidden = [];
}
