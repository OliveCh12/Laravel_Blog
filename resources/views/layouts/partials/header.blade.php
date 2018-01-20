<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
            <a class="navbar-item" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            @guest
                <a href="{{ route('login') }}" class="navbar-item">Login</a>
                <a href="{{ route('register') }}" class="navbar-item">Register</a>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest

        <button class="button navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>
<section class="hero is-primary is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                <h3 class="title is-3">Blog <strong class="has-text-black">@yield('title')</strong> Method</h3>
            </h1>
            <h2 class="subtitle">
                Made by Olivier Chemla
            </h2>
        </div>
    </div>
</section>