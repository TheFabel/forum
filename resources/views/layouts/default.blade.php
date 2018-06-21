<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title><?=$title?></title>
</head>
<body>
<script>var t = performance.now();</script>
    <div class="container">
        @include('inc.nav')
        @yield('content')
    </div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/form.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){console.log(performance.now() - t)})
</script>
</body>
</html>