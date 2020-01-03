<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knjiga extends Model
{
    protected $table='knjige';

    protected $fillable=['naslov', 'autor', 'opis'];
}
