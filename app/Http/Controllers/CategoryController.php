<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
