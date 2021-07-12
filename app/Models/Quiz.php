<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
        protected $fillable = [
        'name',
        ];

        public function questions() {
        return $this->hasMany(Question::class);
        }

        public function course() {
        return $this->belongsTo(Course::class);
        }

        public function users() {
        return $this->belongsToMany(User::class);
        }
 
    
}
