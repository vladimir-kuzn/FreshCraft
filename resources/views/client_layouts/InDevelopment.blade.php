@extends('client_layouts._default')

@section('content-head')
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=0.4">

        <title>FreshCraft | В разработке...</title>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- for header and footer -->
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
        <script src="{{ asset('assets/js/slider_main.js')}}"></script>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            .sect__welcome {
                height: 600px;
                overflow: hidden;
                background-position: center;
                background-repeat: no-repeat;
                background-color: #111111;
                color: white;
                display: flex;
                position: relative;
                margin-top: 83px;
            }

            .sect__welcome h1 {
                text-transform: uppercase;
            }

            .sect__welcome .slide_image {
                z-index: -1;
                position: absolute;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
            }

            .sect__welcome .image > img {
                z-index: -1;
                position: absolute;
                width: 100%;
            }

            .filter_on_poster {
                background-color: #000;
                z-index: 0;
                position: absolute;
                width: 100%;
                height: 100%;
                opacity: 50%;
            }

            .welcome_container {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .weclome_wrapper {
                width: 530px;
                margin-bottom: 50px;
                text-shadow: 1px 1px black;
            }

            .weclome_wrapper h1 {
                font-size: 56px;
            }
        </style>
    </head>
@endsection
