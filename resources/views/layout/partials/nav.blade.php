<nav class="nav">

    <a class="nav-item {{ Request::is('/') ? '  active' : null  }}" href="/">Home</a>

    <div class="nav-item dropdown">
        <div class="nav-item {{ Request::is('category*') ? '  active' : null  }}">Category</div>
        <div class="dropdown-content">
            @foreach($categories as $category)
                <a href="/category/{{$category->id}}">{{$category->name}}</a>
            @endforeach
        </div>
    </div>

    <a class="nav-item {{ Request::is('publisher*') ? '  active' : null  }}" href="/publisher">Publisher</a>

    <a class="nav-item {{ Request::is('contact*') ? '  active' : null  }}" href="/contact">Contact</a>

</nav>