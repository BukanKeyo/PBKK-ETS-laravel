<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Get the anime reviews for the title.
     */
    public function animeReviews()
    {
        return $this->hasMany(AnimeReview::class);
    }

    /**
     * Get the genre that the title belongs to.
     */
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
