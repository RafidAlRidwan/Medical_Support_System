<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\RequestManage;

class pdfgenerateController extends Controller
{

	public function __construct(){

        $this->middleware('auth:admin');
    }

    public function pdf()
    {

    	$req = RequestManage::all();
        $req -> transform(function($re, $key){
            $re->request_list = unserialize($re->request_list);
            return $re;
        });


      $pdf = PDF::loadView('invoice' , compact('req' ));
      return $pdf->download('report.pdf');    


  }
}