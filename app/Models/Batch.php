<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $tabel = 'batches';
    protected $primaryKey = 'id';
    protected $fillable = ['name','course_id','start_date'];
    use HasFactory;
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
