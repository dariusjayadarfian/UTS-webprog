@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div style="display: flex;margin: 0px 0 10px 0">
            <i style="font-size: 40px;margin: 0 5px 0 0; color: orangered" class="fas fa-book"></i>
            <h1>Book List</h1>
        </div>

        <div class="item-container">
            @foreach($items as $item)
                <a class="anchor-no-decor item" href="/detail/{{$item->id}}">
                    <div class="image" style="background-image: url({{$item->image}})"></div>
                    <div class="description">
                        <div><b>Title: {{$item->title}}</b></div>
                        <div><b>Author: {{$item->author}}</b></div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection