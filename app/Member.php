<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     protected $fillable = [
        'name', 'user_id',
    ];
    public $timestamps = true;
    protected $table = 'members';

     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
