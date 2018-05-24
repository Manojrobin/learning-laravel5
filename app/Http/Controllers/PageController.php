<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;
use Auth;
//use Vinkla\Alert\Facades\Alert;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $page = Page::orderby('id','desc')->where('user_id',$user->id)->paginate('10');
        //$page = Page::table('pages')->where('user_id',$user->id);
        return view('page.index',['page' => $page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*validate filels */
        
        if($request->hasFile('image')) {
            $postimage = $request->file('image');
            $imagename = $request->image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $postimage->move($destinationPath,$imagename);
        }

        $this->validate($request,[
         'name'=>'required|min:4',
         'content'=>'required|min:10',
        ]);

         /**  store value in the table */
        Page::create([

            'user_id'=> $request->input('user_id'),
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'image' => $imagename,
            //null post type initial 
            'post_type'=>''

        ]);
         
        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(page $page)
    {
        //dd($page);
        return view('page.show',['page'=>$page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(page $page)
    {
        return view('page.edit',['page'=>$page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, page $page)
    {
         
        if(!empty($page->post_type)){
         $post_type = $page->post_type;
        }
        else{
         $post_type = '';
        }

        if($request->hasFile('image')) {
            $postimage = $request->file('image');
            $imagename = $request->image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $postimage->move($destinationPath,$imagename);
        }
        if(empty($imagename)){
          $imagename = $request->input('current_image');
        }
        $page->name = $request->input('name');
        $page->content =  $request->input('content');
        $page->post_type = $post_type;
       
        $page->image = $imagename;

        //session()->flash('message','Your post is update');
        //Alert::success('Your Post was Updated');
        alert()->success('Your Post was Updated');
        $page->save();
        return redirect()->back();    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(page $page)
    {
        $page->delete();
        return redirect(route('page.index'));
    }

    public function update_post_type(page $page)
    {


      
       $post_id = $_GET['post_id'];
       $posttype     = $_GET['posttype'];
      
       $page = Page::find($post_id);
        if($page) {
            $page->post_type = $posttype;
            $page->update();
            return 1;
        }else{
            return 0;
        } 
   
    }
}
