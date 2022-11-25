<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function homepage(){
        $item = Book::paginate(15);
        $categories = Category::all();

        return view('home',[
            'items' => $item,
            'categories' => $categories,
        ]);
    }

    public function detail($id){
        $item = Book::with('categories','publisher')->where('id',$id)->get()->first();
        if($item == null){
            return redirect('/');
        }

        $categories = Category::all();

        return view('detail-book',[
            'item' => $item,
            'categories' => $categories,
        ]);
    }

}
