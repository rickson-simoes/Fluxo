<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Armazenador extends Model
{
    protected $fillable = ['nome','parcelas','preco'];

    public $timestamps = false;
}
