<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ItemPhoto;
use App\Category;

class Item extends Model
{
    protected $fillable= [
    	'category_id',
    	'item_name',
    	'description',
    	'price',
    	'delivery_charge',
    	'stock',
    	'photo_file'


    ];

    public function ItemPhoto(){

    return $this->belongsTo('App\ItemPhoto');


}

   public function Category(){
    return $this->belongsTo('App\Category');
   }


   
    
}
