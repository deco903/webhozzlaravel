<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\category;

class CategoryController extends Controller
{
    public function index(){
        $title = 'category page';
        return view ('category.index',[
            'title' => $title
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
}
