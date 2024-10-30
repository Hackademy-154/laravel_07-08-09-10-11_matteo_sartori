<?php

namespace App\Models;

use App\Models\Film;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function films()
    {
        return $this->belongsToMany(Film::class);
    }

}
