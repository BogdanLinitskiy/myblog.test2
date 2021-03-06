<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/posts/create">Add Blog Post</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="/products">Index page</a>
                    <a class="dropdown-item" href="/products/create">Create</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/cart">Cart</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/order">Order</a>
            </li>

            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="#">{{Auth::user()->name}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            @else

                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>