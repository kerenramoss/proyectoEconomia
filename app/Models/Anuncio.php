<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $fillable = ['imag','name','departament','tipeofplace', 'price', 'description', 'iduser'  ];
}
