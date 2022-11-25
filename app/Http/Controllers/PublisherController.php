<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    function index(){
        $items = Publisher::paginate(15);
        $categories = Category::all();

        return view('publisher',[
            'items' => $items,
            'categories' => $categories,
        ]);
    }

    public function show($id){
        $item = Publisher::with('books')->where('id',$id)->get()->first();
        if($item == null){
            return redirect('/');
        }

        $categories = Category::all();

        return view('detail-publisher',[
            'item' => $item,
            'categories' => $categories,
        ]);
    }

}
