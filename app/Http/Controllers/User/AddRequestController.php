<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Item;
use App\Cart;
use App\RequestManage;
use Session;
use Auth;
class AddRequestController extends Controller
{
	public function __construct(){

       $this->middleware('auth:web')->except(['']);

    }


    public function getAdd(Request $request, $id){

    	$it = Item::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($it , $it->id);

    	$request->session()->put('cart', $cart);
    	
    	return redirect()->back();

    }


    public function getCart(){

    	if (!Session::has('cart')){
    		return view ('user/addrequest.index');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view ('user/addrequest.index' , ['it' => $cart->items, 'totalPrice' => $cart ->totalPrice ]);

    	
    }

    public function getRemove($id){

    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart -> remove($id);

    	if (count($cart->items) > 0){
        Session::put('cart' , $cart);}
        else {
          Session::forget('cart');
        }
    	return redirect()->route('request.list');
    }

    public function getCheckout(Request $request){

       if(!Session::has('cart')){
    	 return redirect()->route('medical.index');
    }

       $input = $request->all();
       $oldcart = Session::get('cart');
       $cart = new Cart($oldcart);

       $req = new RequestManage();
       $req -> request_list = serialize($cart);
       $req -> user_name = Auth::user()-> name;
       $req -> delivery_address = Auth::user()-> address;
       $req -> total_bill = $cart ->totalPrice;
  

       Auth::user()->RequestManage() ->save($req);

       Session::forget('cart');
       return redirect()-> route('medical.index')-> with('success', 'Successfully placed your Request! Please check Request History for any Update!');
    }


    public function gethistory(){

    	$req = Auth::user()->RequestManage;
    	$req -> transform(function($re, $key){
    		$re->request_list = unserialize($re->request_list);
    		return $re;
    	});
    	return view('user/addrequest.show' , compact('req'));

    }
}
