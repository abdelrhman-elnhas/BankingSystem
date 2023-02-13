<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
    <!--  Font Awesome -->
    <link rel="stylesheet" href="{{asset('css')}}/all.min.css">
    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{asset('css')}}/index.css">

    {{-- Floating Style --}}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/floating.css">

    @stack('style')
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

</head>
<body>

@include('Includes.header')

@yield('body')
</div>
</div>
</div>

@include('Includes.floating')

@include('Includes.footer')
