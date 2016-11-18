<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'name', 'user_id',
    ];
    public $timestamps = true;
    protected $table = 'products';

     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
