<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
    /*
     * @param /admin
     */
    public function index()
    {
        return view('admin.index');
    }

    /*
     * Show from of category to create
     */
    public function CreateCategory()
    {
        return view('admin.create_category');
    }

    /*
     * save data in category table
     */
    public function StoreCategory(Request $request)
    {

        Category::create([
             'name' => $request->input('category_name'),
             'description' => $request->input('category_content'),
        ]);

        alert()->success('Add category was Updated');

        return redirect()->back();

    }

    public function PostCategory(page $page){

    }
}
