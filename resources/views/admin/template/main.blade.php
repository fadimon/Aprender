<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <title>
                @yield('title','Default')│Panel de Administración
            </title>
            <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}} " rel="stylesheet">
                <link href="{{asset('css/general.css')}} " rel="stylesheet">
                </link>
            </link>
        </meta>
    </head>
    <body>
        <div class="contenedor">
            @include('admin.template.partials.nav')
            <section>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            @yield('title')
                        </h3>
                    </div>
                    <div class="panel-body">
                        @include('flash::message')
                        @include('admin.template.partials.errors'){{-- muestra los errores con estilo--}}
                        @yield('contenido')
                    </div>
                </div>
            </section>
            @include('admin.template.partials.footer')
        </div>
        <script src="{{asset('Plugins/Jquery/js/jquery.js')}}">
        </script>
        <!-- Instalacion de jquery -->
        <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}">
        </script>
        <!-- Instalacion de bootstrap -->
    </body>
</html>
