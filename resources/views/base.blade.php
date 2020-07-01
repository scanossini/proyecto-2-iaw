<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

</head>
<body>
    <title>Proyecto 2</title>
	<nav class="navbar navbar-expand-md sticky-top" style="background-color: #ffb6c1;  height: 80px;">
		<div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-header">
                <a class="navbar-brand headerFont" href="#">Banco de Sangre</a>
            </div>

            	@yield('leftside')
                <ul class="navbar-nav ml-auto">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    	<form class="form-inline ml-auto" method="GET" action="/search">
				      		<div class="md-form my-0">
			        		<input class="form-control mr-xl-2" type="text" style="text-align: center;" name="user" placeholder="Buscar">
				    	  	</div>
				    	</form>
				 	 </div>

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>                      
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                            		<a class="dropdown-item" href="/profile">
                                    	Mi Perfil
                                	</a>
                                	<a class="dropdown-item" href="/edit_profile">
                                        Editar Perfil
                                    </a>
                                    <a class="dropdown-item" href="/readme">
                                        Readme
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @endguest
                </ul>
            </div>
        </div>
	</nav>

	<div>
		@yield('content')
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>