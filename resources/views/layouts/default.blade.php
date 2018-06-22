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
<?php
$starttime = microtime(true);
?>
<div class="container">
    @include('inc.nav')
    @yield('content')
</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/form.js')}}"></script>
<pre>
<?php
$ms = microtime(true) - LARAVEL_START;
echo "Time: ".round($ms, 3)." s<br>";

function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

echo "PHP: ".convert(memory_get_usage(true))."<br>";

$sizes = \Illuminate\Support\Facades\DB::select('SELECT table_schema "DB", ROUND(SUM(data_length + index_length) / 1024 / 1024, 1) "size" FROM information_schema.tables WHERE table_schema = "forum" GROUP BY table_schema');
echo "MySQL: ".$sizes[0]->size." mb";
?>
</pre>
</body>
</html>