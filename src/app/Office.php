<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{

    protected $fillable = ['id', 'office_name'];
    // officeはcategoryに従属
    public function categories()
    {
        return $this->belongsTo(Category::class, ['id', 'category_id']);
    }
    // officeはreviewsの親
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
