<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
public function Carts()
{
return $this->belongsToMany(
    Cart::class,
    'line_items',
    )->withPivot(['id','quantity']);
}
}