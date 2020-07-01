<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SlidersController extends Controller
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
        return view('backend.sliders.index',['title'=>"Sliders",'sliders'=>Post::where('post_type','slider')->get()]);
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
        //
        $this->validate($request,[
            'title' => 'required',
            'permalink' => 'required',
            'caption' => 'required',
            'description'=>'required',
        ]);

        $blog = new Post();
        $providerRequest = $request->except(['_token','published']);
        foreach($providerRequest as $key=>$value){
            $blog->setAttribute($key,$value);
        }
        if($request->published ==1){
            $blog->setAttribute('status',"published");
        }elseif($request->published ==0){
            $blog->setAttribute('status',"drafted");
        }
        $blog->setAttribute('created_at',date("Y-m-d H:i:s"));
        $blog->setAttribute('updated_at',date("Y-m-d H:i:s"));
        $blog->setAttribute('p_content',$request->description);
        $blog->setAttribute('end_time',"00:00:00");
        $blog->setAttribute('start_time',"00:00:00");
        $blog->setAttribute('type',"home_slider");
        //$blog->post_meta = json_encode($request->categories);
        $blog->setAttribute('post_type',"slider");

        if($blog->save()){
            Session::flash('success','Slider Successfully Updated');
            return response()->json(['data' =>$blog , 'msg' => "Slider Successfully Updated", 'status' => 'failed', 'success' => true, 'code' => 201]);
           
        }else{
            Session::flash('error','Slider could not be Updated');
            return response()->json(['data' => $blog, 'msg' => "Slider could not be updated ", 'status' => "failed", 'success' => false, 'code' => 401]);
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
        $slider = Post::find($id);
        return response()->json(['success'=>true,'data'=>$slider,'code'=>201,
                'message' => 'Record was updated successfully ','status'=>200
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
            'permalink' => 'required',
            'caption' => 'required',
            'description'=>'required',
        ]);

        $blog = Post::find($id);
        $providerRequest = $request->except(['_token','published']);
        foreach($providerRequest as $key=>$value){
            $blog->setAttribute($key,$value);
        }
        if($request->published ==1){
            $blog->setAttribute('status',"published");
        }elseif($request->published ==0){
            $blog->setAttribute('status',"drafted");
        }
        $blog->setAttribute('created_at',date("Y-m-d H:i:s"));
        $blog->setAttribute('updated_at',date("Y-m-d H:i:s"));
        $blog->setAttribute('p_content',$request->description);
        $blog->setAttribute('end_time',"00:00:00");
        $blog->setAttribute('start_time',"00:00:00");
        $blog->setAttribute('type',"home_slider");
        $blog->post_meta = json_encode($request->categories);
        $blog->setAttribute('post_type',"slider");

        if($blog->update()){
            Session::flash('success','Slider Successfully Updated');
            return response()->json(['data' =>$blog , 'msg' => "Slider Successfully Updated", 'status' => 'failed', 'success' => true, 'code' => 201]);
           
        }else{
            Session::flash('error','Slider could not be Updated');
            return response()->json(['data' => $blog, 'msg' => "Slider could not be updated ", 'status' => "failed", 'success' => false, 'code' => 401]);
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
