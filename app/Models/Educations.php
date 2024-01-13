<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    use HasFactory;
    protected $table = 'education';
    protected $fillable = ['tingkat','institusi','jurusan','th_masuk','th_lulus','cvs_id'];

    public function cvs()
    {
        this->belongTo(Cvs::class, 'cvs_id');
    }
}
