<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produtos extends Model
{
    use SoftDeletes;

    protected $table = 'produto';
    protected $fillable = ['nome', 'tipo', 'preco'];
}
