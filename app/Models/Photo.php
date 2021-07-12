<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
        protected $table = 'photoable';

        protected $fillable = [
        'filename',
        ];

        public function photoable() {
            return $this->morphTo(Photo::class);
            }
}
