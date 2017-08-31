<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!-- Bootstrap core CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> --}}

    {{--<link rel="stylesheet" href="/css/style.css">--}}
    {{--<link rel="stylesheet" href=/bower_components/bootstrap/dist/css/bootstrap.min.css>--}}
    {{--<script src="/bower_components/jquery/dist/jquery.min.js"></script>--}}
    {{--<script src="/bower_components/tablesorter/jquery.tablesorter.min.js"></script>--}}


</head>
<body>

@yield('content')



<!-- Scripts -->
{{--<script src="/js/app.js"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>--}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    @yield('scripts')
</script>

</body>
</html>
