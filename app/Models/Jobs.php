<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
  use HasFactory;
  protected $table = 'jobs';

  protected $fillable = ['title', 'description', 'requirements', 'location', 'close_date', 'categories_id'];

  public function categories()
  {
    return $this->belongsTo(Categories::class, 'categories_id');
  }

  public function applications()
  {
    return $this->hasMany(Applications::class, 'job_id');
  }
}
