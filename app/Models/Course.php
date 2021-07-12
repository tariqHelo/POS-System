<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

        protected $fillable = [
        'title',
        'status',
        ];

    public function photo() {
       return $this->morphOne(Photo::class, 'photoable');
    }

    public function users() {
    	return $this->belongsToMany(User::class);
    }

    public function quiz() {
        return $this->hasMany(Quiz::class);
    }

    public function track() {
        return $this->belongsTo(Track::class);
    }
    
    public function videos() {
        return $this->hasMany(Video::class);
    }
}
