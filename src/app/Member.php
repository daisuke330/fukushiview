<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['id', 'member_id'];

    //memberはreviewsの親
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
