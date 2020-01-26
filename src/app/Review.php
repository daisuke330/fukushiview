<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['id', 'office_id', 'member_id'];
    //reviewはmemberに従属
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    //reviewはofficeに従属
    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}
