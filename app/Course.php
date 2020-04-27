<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

       protected $fillable = [
        'courseTitle',
        'courseDescription',
        'courseRequirements',
        'courseLiveDate',
        'courseLivetime' ,
        'courseImg',

    ];



       public function getImageUrlAttribute($value)
    {
        $imageUrl = "";
        if (!is_null($this->image)) {
            $imagePath = base_path()  . '/public/images/' . $this->image;
            if (file_exists($imagePath))  $imageUrl = asset("images/" . $this->image);
        }
        return   $imageUrl;
    }

     public function getNameAttribute($value)
    {
        return ucwords($value);
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
