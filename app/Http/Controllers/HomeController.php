<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page = Page::orderby('id','desc')->where('page_type', 'public')->paginate('10');
        //$page = Page::table('pages')->where('user_id',$user->id);
        return view('home',['page' => $page]);
       
    }
}
