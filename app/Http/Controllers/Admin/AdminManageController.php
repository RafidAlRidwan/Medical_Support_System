<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RequestManage;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminManageController extends Controller
{
    public function __construct(){

        $this->middleware('auth:admin');
    }

    public function index()
    {
        
        $req = RequestManage::paginate(4);
        $req -> transform(function($re, $key){
            $re->request_list = unserialize($re->request_list);
            return $re;
        });

        return view('admin/requestmanage.index' , compact('req' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requ = RequestManage::find($id);
        return view('admin/requestmanage.edit' , compact('requ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req= RequestManage::find($id);
        $req->update($request->all());
        return redirect('adminrequest')->with('warning','Request has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $req = RequestManage::whereId($id)->delete();
        return redirect('adminrequest')->with('error','Request has been Deleted!');  
    }
}
