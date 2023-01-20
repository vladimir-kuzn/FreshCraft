@extends('layouts._default')

@section('content-head')
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=0.4">

        <title>FreshCraft | Лаунчер</title>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/launcher.css') }}">
        <!-- for header and footer -->
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        </style>
    </head>
@endsection
