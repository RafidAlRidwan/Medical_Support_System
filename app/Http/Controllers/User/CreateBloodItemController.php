<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use App\Item;
use App\ItemPhoto;
class CreateBloodItemController extends Controller
{
    public function __construct(){

       $this->middleware('auth:web')->except(['index' ,'show']);
}

       public function index()
    {
        $it = Item::all();
        $cate = Category::all();
        $user = Auth::user();

        return view('user/item/blood.index' , compact('it' , 'cate', 'user'));

    }
    public function show($id)
    {
       $it = Item::find($id);
       $user = Auth::user();

        return view('user/item/blood.show' , compact('it', 'user'));
    }
}
