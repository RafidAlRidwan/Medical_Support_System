<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\User;
use App\Item;
use App\Category;
use App\RequestManage;
use App\Http\Requests\UserCreateRequest;
class UserController extends Controller
{
    public function __construct(){

        $this->middleware('auth:admin');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $user = User::count();
        $item = Item::count();
        $cate = Category::count();
        $reqq = RequestManage::count();
        return view('admin/user.index' , compact('user','item','cate','reqq' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        User::create($input);

        return redirect('/admin/show')->with('success','New User created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $u = User::paginate(5);
        return view('admin/user.show', compact('u'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $u = User::find($id);
        return view('admin/user.edit', compact('u'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserCreateRequest $request, $id)
    {
        
        $u = User::find($id);
        $u ['password'] = bcrypt($request->password);
        $u->update($request->all());
       return redirect('/admin/show')->with('warning','User has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = User::whereId($id)->delete();
        return redirect('/admin/show')->with('error','User has been Deleted!');
    }
}
