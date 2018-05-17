<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;
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
        $page = Page::orderby('id','desc')->paginate('10');
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
         'author'=>'required',
         'email'=> 'required'
        ]);

         /**  store value in the table */
        Page::create([
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
            'email' => $request->input('email'),
            'image' => $imagename
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
         
           
     
        if($request->hasFile('image')) {
            $postimage = $request->file('image');
            $imagename = $request->image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $postimage->move($destinationPath,$imagename);
        }


        $page->name = $request->input('name');
        $page->content =  $request->input('content');
        $page->email = $request->input('email');
        $page->author = $request->input('author');
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
}
