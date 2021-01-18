<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="mx-auto" style="width: 1150px;">

        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm ">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'PSP Pharmacy') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                                        <div class="flex-center position-ref full-height">

                            <div class="top-right links text-white bg-dark">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            @if (Route::has('register'))
                                <div class="top-right links text-white bg-dark">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                                <a class=" text-white" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>მოგესალმებით
                                    {{ Auth::user()->name  }} &nbsp;<span class="caret"></span>
                                </a>

    
                                    <a class=" text-white" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 
                                        | &nbsp;{{ __('გასვლა') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                     </div>
                        @endguest


                </div>
            </div>

        </nav>
        <br>




@guest

 @else
                <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm "> 
                            <div class="mx-auto" >
                    <a href="{{ route('home') }}" type="button" class="btn btn-primary ">პროდუქცია</a>
                    <a href="{{ route('categories') }}" type="button" class="btn btn-primary">კატეგორია</a>
          

 @endguest
</div>
                </nav>

                                      
           


        <main style="padding-top: 10px">
            @yield('content')
        </main>
        
    </div>



    </div>
</body>
</html>
