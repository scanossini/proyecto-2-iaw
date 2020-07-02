<!DOCTYPE html>
<html>
<head>
    <!-- Créditos https://getbootstrap.com/docs/4.5/components/navbar/ -->
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

                    <div class="collapse navbar-collapse" style="vertical-align:middle;" id="navbarSupportedContent">
				    	<form class="form-inline ml-auto" method="GET" action="/search">
				      		<div class="md-form my-0">
			        		<input class="form-control mr-md-2" type="text" style="text-align: center;" name="user" placeholder="Buscar">
				    	  	</div>
				    	</form>
				 	 </div>
                      <br>
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
                            		<a class="dropdown-item" href=" {{ route('admin.users.index') }}">
                                    	Mi Perfil
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
    
    <footer class="footer mt-auto py-3">
    <div class="container-fluid text-center text-md-left" style="background-color:gray;">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-uppercase pb-3">Ingeniería de Aplicaciones Web</h5>
            <p>Universidad Nacional del Sur</p>
            <p>Primer cuatrimestre de 2020</p>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3">
          <div class="col-md-3 mb-md-0 mb-3">
            <ul class="list-unstyled">
              <li class="pb-4">
                Stefano Canossini - LU 114.594
              </li>
              <li>
                <a id="linkGithub" href="https://github.com/scanossini/" target="_blank">Perfil de GitHub</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>