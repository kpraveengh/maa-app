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

     public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
}
