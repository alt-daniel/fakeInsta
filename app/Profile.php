<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/iQtpsHmu0xZu8NoELOJR0oV6bggEnNK3ss0zl5NE.jpeg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
       return $this->belongsToMany(User::class);
    }
}
