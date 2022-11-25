@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div style="display: flex;margin: 0px 0 10px 0">
            <i style="font-size: 40px;margin: 0 5px 0 0; color: orangered" class="fas fa-users"></i>
            <h1>Publisher Info</h1>
        </div>

        <div class="item-container">
            @foreach($items as $item)
                <a class="anchor-no-decor item" href="/publisher/{{$item->id}}">
                    <div class="image" style="background-image: url({{$item->image}})"></div>
                    <div class="description">
                        <div><b>Name: {{$item->name}}</b></div>
                        <div><b>Address: {{$item->address}}</b></div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection