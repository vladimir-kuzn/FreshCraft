<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Dropzone -->
    <link rel="stylesheet" href="{{ asset('plugins/dropzone/dropzone.css') }}">
    <!-- hystModal -->
    <link rel="stylesheet" href="{{ asset('plugins/hystModal/hystmodal.min.css') }}">
    <script src="{{ asset('plugins/hystModal/hystmodal.min.js') }}"></script>
    <!-- Clipboard.js -->
    <script src="{{ asset('plugins/clipboard.min.js') }}"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/b53d0c6151.js" crossorigin="anonymous"></script>

    <style>
        .card-body > p > img {
            width: 100%;
        }
        .imageInStorage > td {
            height: 100px;
        }
        .imageInStorage > td > img {
            max-height: 100%;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header" style=""></li>
                @include('admin.menus.home')
                <li class="nav-header" style="">ОСНОВНЫЕ</li>
                @include('admin.menus.categories')

            </ul>

        </div>
        <!-- /.sidebar -->
    </aside>

    @yield('content')

    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div><!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/dropzone/dropzone-amd-module.js') }}"></script>
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<script>
    const myModal = new HystModal({
        linkAttributeName: "data-hystmodal",
        //settings (optional). see Configuration
    });
</script>
<script>
    function getImages() {
        $('.gui_btn').remove();
        $.ajax({
            url: 'images',
            dataType: 'json',
            method: 'get',
            success: function (data) {
                $('.hystmodal__window').append('<a class="gui_btn" href="#" onClick="getImages(); return false;">Обновить</a>')
                    for (let i = 0; i < data.length; i++) {
                    data[i] = data[i].slice(22);
                    data[i] = "{{ Request::getSchemeAndHttpHost() }}/storage/images/ForPosts" + data[i];
                }
                $('.imageInStorage').remove();
                let index;
                for (index = 0; index < data.length; ++index) {
                    $('.list_images').append($(
                        '<tr class="element_' + index + ' imageInStorage">' +
                            '<td>' +
                                '<img src="' + data[index] + '">' +
                            '</td>' +
                            '<td>' +
                                '<a href="#" class="link_" data-clipboard-text="![Альтернативный текст](' + data[index] + ')">' +
                                    data[index] +
                                '</a>' +
                            '</td>' +
                            '<td>' +
                                '<a href="#" onClick="del_image(' + index + '); return false;" >' +
                                    'Удалить' +
                                '</a>' +
                            '</td>' +
                        '</tr>'
                    ))
                }
            },
        });
    }

    new ClipboardJS('.link_');

    function del_image(image) {
        $.ajax({
            url: 'images/del',
            dataType: 'html',
            method: 'get',
            data: {image: image},
            success: function (message) {
                getImages()
            }
        })
    }
</script>
<script>
    $(document).ready(function(){
        $("input[name='create']").click(function(){
            var form =  $(this).closest('form');
            form.attr('target', '_blank');
            form.submit();
            form.attr('target', '');
        });
        return false;
    });
    $(document).ready(function(){
        $("input[name='edit']").click(function(){
            var form =  $(this).closest('form');
            form.attr('target', '_blank');
            form.submit();
            form.attr('target', '');
        });
        return false;
    });
</script>
</body>
</html>
