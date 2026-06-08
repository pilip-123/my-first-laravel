<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // row query
        // $categories = DB::select('SELECT * FROM categories');
        
        // query builder
        // $categories = DB::table('categories')->get();
        
        //Eloquent ORM
        $categories = Category::orderBy('id', 'desc')->get();
        return view('categories.list',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
         Category::create(
            [
                'name' => request()->name,
                'desc' => request()->desc,
                'price' => request()->price ?: 0
            ]
        );
        // return view('categories.list'); don't like this
        return redirect('/categories');
    }

    public function create()
    {
        return view('categories.create');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

     public function update($id)
    {
        // dd($id);
        // dd(request()->all());
        $category = Category::find($id);
        $category->update(
            [
                'name' => request()->name,
                'desc' => request()->desc,
                'price' => request()->price ?: 0,
            ]
        );
        return redirect('/categories');
    }
    public function destroy($id)
    {
        // dd($id);
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories');
    }
};