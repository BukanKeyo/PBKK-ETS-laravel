<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    /**
     * Get the anime reviews for the genre.
     */
    public function animeReviews()
    {
        return $this->hasMany(AnimeReview::class);
    }
}
