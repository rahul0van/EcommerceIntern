<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $fillable = ['productname','productcategory','quantity','price','description','brand', 'image'];
}
