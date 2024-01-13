<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Auth;

class Cvs extends Model
{
    use HasFactory;
    protected $table = 'cvs';    
    protected $fillable = ['gender','birthplace','birthdate','address','telephone','photo','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function educations()
    {
      return $this->hasMany(Educations::class, 'cvs_id');
    }

    public function experiences()
    {
      return $this->hasMany(Experiences::class, 'cvs_id');
    }
}
