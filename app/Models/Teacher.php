<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $tabel = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['username','name','last_name','role','email','phone_number','address','bio'];
    
    use HasFactory;
}
