<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\User;
use App\Item;
use App\Category;
use App\RequestManage;
use Session;


class CategoriesController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $cate = Category::all();
        return view('admin/categories.create' , compact('cate' ));

    }

    public function store(CreateCategoryRequest $request)
    {
        Category::create($request->all());

        return redirect('/admincategory/create')->with('success','Category created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $req = RequestManage::all();
        $req -> transform(function($re, $key){
            $re->request_list = unserialize($re->request_list);
            return $re;
        });

        return view('admin/categories.show' , compact('req' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Category::find($id);
        return view('admin/categories.edit' , compact('cate')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCategoryRequest $request, $id)
    {
        $cate= Category::find($id);
        $cate->update($request->all());
        return redirect('/admincategory/create')->with('warning','Category has been Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Category::whereId($id)->delete();
        return redirect('/admincategory/create')->with('error','Category has been Deleted!');
    }


}
