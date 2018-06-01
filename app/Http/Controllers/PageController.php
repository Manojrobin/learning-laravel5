<?php

namespace App\Http\Controllers;

use App\page;
use Illuminate\Http\Request;
use Auth;
use App\CategoryPage;
use App\Category;
use Illuminate\Support\Facades\DB;

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
        $page = Page::orderby('id', 'desc')->where('user_id', $user->id)->paginate('10');
        $categories = Category::all();
        //$page = Page::table('pages')->where('user_id',$user->id);
        return view('page.index', ['page' => $page,'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::all();
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*validate filels */
        //$request->get('category'));

        if ($request->hasFile('image')) {
            $postimage = $request->file('image');
            $imagename = $request->image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $postimage->move($destinationPath, $imagename);
        } else {
            $imagename = 'dummyiamge.jpg';
        }

        $this->validate($request, [
            'name' => 'required|min:4',
            'content' => 'required|min:10',
        ]);


        /**  store value in the table */
        Page::create([

            'user_id' => $request->input('user_id'),
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'image' => $imagename,
            //null post type initial 
            'page_type' => ''

        ]);


        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\page $page
     * @return \Illuminate\Http\Response
     */
    public function show(page $page)
    {
        //dd($page);
        return view('page.show', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(page $page)
    {
        return view('page.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\page $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, page $page)
    {

        if (!empty($page->page_type)) {
            $post_type = $page->page_type;
        } else {
            $post_type = '';
        }

        if ($request->hasFile('image')) {
            $postimage = $request->file('image');
            $imagename = $request->image->getClientOriginalName();
            $destinationPath = public_path('/images');
            $postimage->move($destinationPath, $imagename);
        }
        if (empty($imagename)) {
            $imagename = $request->input('current_image');
        }
        $page->name = $request->input('name');
        $page->content = $request->input('content');
        $page->page_type = $post_type;

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
     * @param  \App\page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(page $page)
    {
        $page->delete();
        return redirect(route('page.index'));
    }

    public function update_page_type(page $page)
    {
        $page_id = $_GET['page_id'];
        $pagetype = $_GET['pagetype'];


        $page = Page::find($page_id);
        if ($page) {
            $page->page_type = $pagetype;
            $page->update();
            return $page_id;
        } else {
            return 0;
        }

    }

    public function update_category(category $category){
        $page_id =     $_GET['pageid'];
        $category_id = $_GET['categoryid'];

        CategoryPage::create([
            'category_id' => $category_id,
            'page_id' => $page_id
        ]);
        return 1;

    }


}
