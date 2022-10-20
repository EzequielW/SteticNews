<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function externalLinks(){
        return $this->hasMany(ExternalLink::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);   
    }
}
