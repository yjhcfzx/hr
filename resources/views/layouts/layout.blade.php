<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
         <script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <!-- Styles -->
        <style>
       

            .full-height {
                height: 100vh;
            }


            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

         
            .navbar-default .navbar-nav > li > a{
                font-size:14px;
                color:#555;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title">
                    秒表 <img src="{{ URL::asset('img/mb.jpg') }}"/>
                </div>
            
                <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand" href="#">Project name</a>-->
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav">
              <li class="active"> <a href="{{ url('/') }}">Home</a></li>
              <li> <a href="{{ url('/clients') }}">Clients</a></li>
              <li><a href="{{ url('/candidates') }}">Candidates</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resume <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li> <a href="{{ url('/resume') }}">list</a></li>
                  <li> <a href="{{ url('/resume/upload') }}">upload</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                  @if (Auth::check())
                   <li> <a href="{{ url('/home') }}">Logout</a></li>
                       
                    @else
                        <li> <a href="{{ url('/home') }}">Login</a></li>
                    @endif
<!--              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>-->

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
          
                 <div class="container">
                        @yield('content')
                 </div>
            </div>
        </div>
    </body>
</html>
