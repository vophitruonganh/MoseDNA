<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
        </script>
    </head>
    <body>

        <div id="app">
            <example></example>
            <header></header>
            {{--<main></main>--}}
            {{--<footer></footer>--}}
        </div>
    </body>
    <script type="text/javascript" src="{{ mix('js/app.js')}}"></script>

    {{--<script src="http://cdn.jsdelivr.net/vue/2.1.10/vue.js"></script>--}}

</html>
@include('javascript.footer')