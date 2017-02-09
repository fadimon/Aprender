<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div>
            <a class="navbar-brand" href="#">
                <img alt="LOGO" src="{{asset('imagenes/git.jpg')}}"/>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(Auth::user())  {{--si hay un usuario autentificado entonces mostrar las opciones--}}
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="{{route('users.index')}}">
                        Usuarios
                    </a>
                </li>
                <li>
                    <a href="{{route('categories.index')}}">
                        Categorias
                    </a>
                </li>
                <li>
                    <a href="#">
                        Articulos
                    </a>
                </li>
                <li>
                    <a href="#">
                        Imagenes
                    </a>
                </li>
                <li>
                    <a href="#">
                        Tags
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        Pagina Principal
                    </a>
                </li>
                <li class="dropdown">
                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                        {{Auth::user()->name}}
                        <span class="caret">
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('/logout') }}">
                                Salir
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            @endif
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>