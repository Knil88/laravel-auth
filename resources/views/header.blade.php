<header class="py-2 p-fixed w-100">
    <nav class="navbar navbar-expand-md  w-75 m-auto shadow-sm " >
       
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
              
                {{-- config('app.name', 'Laravel') --}}
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon text-white"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/') }}">{{ __('Home') }}</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a class="text-decoration-none text-white ms-1"  href="#" >
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none text-white ms-1" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a>
                        
                    </li>
                    <li>
                        <a class="text-decoration-none text-white ms-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                        <div class="" aria-labelledby="navbarDropdown">
                           

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
       
    </nav>

    <main class="">
        @yield('content')
    </main>
</header>