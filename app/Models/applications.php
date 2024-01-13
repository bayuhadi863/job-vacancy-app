<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory;
    protected $table = 'applications';

    protected $fillable = ['user_id', 'job_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jobs()
    {
        return $this->belongsTo(Jobs::class, 'job_id');
    }
}
