<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestManage extends Model
{
    protected $fillable =['user_name', 'user_id',  'request_list', 'delivery_address', 'total_bill', 'status', 'payment_type', 'comment'];


    public function user(){

    	return $this->belongsTo('App\User');
    }
}
