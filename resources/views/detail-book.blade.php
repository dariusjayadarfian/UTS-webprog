<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
@include('layout.partials.nav')
    <div class="content">
        <div class="detail">
            <div class="image" style="background-image: url('{{$item->image}}');"></div>
            <div class="info">
                <div style="font-size: 25px"><b>{{$item->title}}</b></div>
                <div>Written by: {{$item->author}}</div>
                <div>Publisher: {{$item->publisher->name}}</div>
                <div>Release: {{$item->year}}</div>
                <div>Category:</div>
                <div class="category-container">
                    @foreach($item->categories as $category)
                        <a class="category-bubble" href="/category/{{$category->id}}">{{$category->name}}</a>
                    @endforeach
                </div>

                <div>Synopsis:</div>
                <h6>{{$item->synopsis}}</h6>
            </div>

        </div>

    </div>
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>
