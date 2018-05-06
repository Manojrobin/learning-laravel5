<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;


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
        $this->validate($request,[
         'postname'=>'required|min:8',
         'postcontent'=>'required|min:15',
         'postauthor'=>'required',
         'authoremail'=> 'required'
        ]);

         /**  store value in the table */
         Page::create([
         'postname'=>$request->postname,
         'postcontent'=>$request->postcontent,
         'postauthor'=>$request->postauthor,
         'authoremail'=> $request->authoremail
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
        //
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
        $page->postname = $request->postname;
        $page->postcontent =  $request->postcontent;
        $page->authoremail = $request->authoremail;
        $page->postauthor = $request->postauthor;
        session()->flash('message','Your post is update');
        $page->save();
        return redirect()->back();    }

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
