<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateItemRequest;
use App\Item;
use App\Category;
use App\ItemPhoto;
use Session;

class ItemsController extends Controller
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
        return redirect ('/adminitem/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $it = Item::all();
        $cate = Category::all();
        return view('admin/items.create' , compact('it' , 'cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateItemRequest $request)
    {
        $input = $request->all();

       if($file = $request->file('photo_file')){
        $name = time() . $file->getClientOriginalName();
        $file->move('images/itemimages' , $name);

        $input['photo_file'] = $name;
       
        }

       Item::create($input);

       return redirect ('/adminitem/show')->with('success','New Item created successfully!'); 
      
    }
       
    
    public function show($id)
    {
        $it = Item::paginate(3);
        $cate = Category::all();
        
        return view('admin/items.show' , compact('it', 'cate'));
    }

    
    public function edit($id)
    {
        $it = Item::find($id);
        $cate = Category::all();
        return view('admin/items.edit', compact('it', 'cate'));



            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateItemRequest $request, $id)
    {
        $item = Item::find($id);
        $input = $request->all();

       if($file = $request->file('photo_file')){
        $name = time() . $file->getClientOriginalName();
        $file->move('images/itemimages' , $name);
        

        $input['photo_file'] = $name;
       
        }

       $item ->update($input);

       return redirect ('/adminitem/show')->with('warning','Item has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item = Item::find($id);
         

         $item->delete();


          return redirect('/adminitem/show')->with('error','Item has been Deleted!');  
    }
}
