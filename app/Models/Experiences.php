<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    protected $fillable = ['perusahaan','posisi','tgl_masuk','tgl_keluar','jobdesc','cvs_id'];

    public function cvs()
    {
        this->belongTo(Cvs::class, 'cvs_id');
    }
}
