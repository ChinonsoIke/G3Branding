<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{

    public function __construct(){
       // $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Post::where('post_type','post category')->get();
        return view('backend.categories.index',['categories'=>$categories,'title'=>"Categories"]);
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
        $this->validate($request,[
            'title' => 'required',
            'caption' => 'required',
            'description'=>'required',
        ]);

        $category = new Post();
        $providerRequest = $request->except('_token');
        foreach($providerRequest as $key=>$value){
            $category->setAttribute($key,$value);
        }

        $category->setAttribute('created_at',date("Y-m-d H:i:s"));
        $category->setAttribute('updated_at',date("Y-m-d H:i:s"));
        $category->setAttribute('p_content',$request->description);
        $category->setAttribute('end_time',"00:00:00");
        $category->setAttribute('start_time',"00:00:00");
        $category->setAttribute('type',"");
        $category->setAttribute('post_type',"post category");

        if($category->save()){
            Session::flash('Category','Category Successfully Created');
            return response()->json(['data' =>$category , 'msg' => "Category Successfully Created", 'status' => 'success', 'success' => true, 'code' => 201]);
        }else{
            Session::flash('error','Category could not be created');
            return response()->json(['data' => $category, 'msg' => "Category Could not be created ", 'status' => "failed", 'success' => false, 'code' => 401]);
        }

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
        //
        $category = Post::find($id);
        return response()->json(['success'=>true,'data'=>$category,'code'=>201,
                'message' => 'Record was updated loaded ','status'=>200
            ]);
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
        //
        $this->validate($request,[
            'title' => 'required',
            'caption' => 'required',
            'description'=>'required',
        ]);

        $category = Post::find($id);
        $providerRequest = $request->except('_token');
        foreach($providerRequest as $key=>$value){
            $category->setAttribute($key,$value);
        }

        $category->setAttribute('created_at',date("Y-m-d H:i:s"));
        $category->setAttribute('updated_at',date("Y-m-d H:i:s"));
        $category->setAttribute('p_content',$request->description);
        $category->setAttribute('end_time',"00:00:00");
        $category->setAttribute('start_time',"00:00:00");
        $category->setAttribute('type',"");
        $category->setAttribute('post_type',"post category");

        if($category->save()){
            Session::flash('Category','Category Successfully Created');
            return response()->json(['data' =>$category , 'msg' => "Category Successfully Created", 'status' => 'success', 'success' => true, 'code' => 201]);
        }else{
            Session::flash('error','Category could not be created');
            return response()->json(['data' => $category, 'msg' => "Category Could not be created ", 'status' => "failed", 'success' => false, 'code' => 401]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
