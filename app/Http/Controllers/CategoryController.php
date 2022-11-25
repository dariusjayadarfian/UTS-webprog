<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    function show($id){
        $items = Book::with('categories')->whereHas('categories', function($q) use ($id){
            $q->where('categories.id', $id);
        })->get();

        if($items == null){
            return redirect('/');
        }

        $categories = Category::all();
        $currCategory = $categories->where('id', $id)->first();

        return view('category',[
            'items' => $items,
            'categories' => $categories,
            'currCategory' => $currCategory,
        ]);
    }
}
