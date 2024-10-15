<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimeReview extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
