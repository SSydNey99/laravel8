<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'birthdate', 'salary', 'photo', 'phone'];
}
