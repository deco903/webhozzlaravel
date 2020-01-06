<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\category;

class CategoryController extends Controller
{
    public function index(){
        $title = 'category page';
        $rows = Category::all();
        return view ('category.index',[
            'title' => $title,
            'categories' => $rows
        ]);
    }

    public function create()
    {
        $title = 'create new category';
        return view('category.create',[
            'titile' => $title
        ]);
    }

    public function store()
    {
        Category::create([
            'name' => request('nama'),
            'description' => request('description')

        ]);
        //dd(request()->nama); //to know data content that insert into database
        return redirect('/category');
    }

    public function edit($id)
    {
        $category = category::where('id', $id)->first();
         return view('category/edit',[
             'category' => $category
         ]);
    }

    public function update($id)
    {
        $category = category::where('id', $id)->first();
        $category->update([
            'name' => request('nama'),
            'description' => request('description')
        ]);

        return redirect('/category');
    }

    public function destroy($id)
    {
        $category = category::where('id', $id)->first();
        $category->delete();

        return redirect('/category');
    }

}
