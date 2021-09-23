<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prelim Project</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>


        <div>
            <nav  class="d-flex align-items-center justify-content-center" style="height:200px">
                <ul class="d-flex list-unstyled m-5">
                    <li><a class="nav-link mt-5 text-secondary" href="{{url('/')}}">Page 1</a></li>
                    <li><a class="nav-link mt-5 h5 text-success" href="{{url('/view2')}}">Page 2</a></li>
                    <li><a class="nav-link mt-5 text-secondary" href="{{url('/view3')}}">Page 3</a></li>
                </ul>
            </nav>
        </div>

        <div class="container d-flex justify-content-center align-items-center">
            <h4>Miralyn Mensede</h4>
        </div>

        <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    </body>
</html>
