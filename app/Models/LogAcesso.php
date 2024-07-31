<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogAcesso extends Model
{
    use HasFactory;

    protected $fillable = ['log'];
}


// php artisan make:model LogAcesso -m para criar o molde de acesso
