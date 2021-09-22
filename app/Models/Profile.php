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
        $imagePath = $this->image ? $this->image : 'profile/3M3xoCMCo2LPdSE0WwvIFPaki9YAGTF9VeIWxzYm.png';
        return "/cms/public/storage/" . $imagePath;
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
