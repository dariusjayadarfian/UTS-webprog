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
                <div style="font-size: 25px"><b>{{$item->name}}</b></div>
                <div>Address: {{$item->address}}</div>
                <div>Phone: {{$item->phone}}</div>
                <div>Email: {{$item->email}}</div>
            </div>
        </div>

        <h2 style="margin: 20px 0 5px 0">Releases:</h2>

        <div class="item-container">
            @foreach($item->books as $book)
                <a class="anchor-no-decor item" href="/publisher/{{$book->id}}">
                    <div class="image" style="background-image: url({{$book->image}})"></div>
                    <div class="description">
                        <div><b>Title: {{$book->title}}</b></div>
                        <div><b>Author: {{$book->author}}</b></div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
</body>
</html>
