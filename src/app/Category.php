<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id', 'category_name'];
    //Officesテーブルの親
    public function offices()
    {
        return $this->hasMany(Office::class);
    }
}
