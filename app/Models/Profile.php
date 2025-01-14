<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/AfvYh5YUQ3R5CbvU0F43BoWUBbRiHUj3C4zEbfzY.png';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
