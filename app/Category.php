<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Category extends Model
{
    protected $fillable= ['category_name', 'description'];

  
}
