<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Label;

class Student extends Model
{
    protected $tabel = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['username','name','last_name','email','phone_number','address'];
    
    use HasFactory;
}
