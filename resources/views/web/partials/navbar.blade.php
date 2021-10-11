<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0a4275;">
    <a class="navbar-brand" href="/">Larablog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">


            <li class="nav-item dropdown">
                <router-link :to="{name:'home'}" >Home</router-link>

            </li>

        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign up</a>
            </li>
        </ul>
    </div>
</nav>
