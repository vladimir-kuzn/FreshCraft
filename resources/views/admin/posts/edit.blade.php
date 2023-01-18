@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-4">
                        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Пост с ID: {{ $post->id }}</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Название</label>
                                        <input type="text" class="@error('title') form-control is-invalid @enderror form-control" name="title" id="title" placeholder="Название категории"
                                        value="{{ $post->title }}">
                                        @error('title')
                                            <div class="text-danger">Неверное название поста</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Контент</label>
                                        <textarea class="@error('content') form-control is-invalid @enderror form-control" rows="6" name="content" id="content" placeholder="Название категории">{{ $post->content }}</textarea>
                                        @error('content')
                                        <div class="text-danger">Что-то не так</div>
                                        @enderror
                                    </div>
                                    {{--
                                    <div class="form-group">
                                        <label>Изображения</label>
                                        <input type="file" class="custom-file-input"  name="file" id="file">
                                        @error('file')
                                        <div class="text-danger">Что-то не так c загрузкой</div>
                                        @enderror
                                    </div>
                                    --}}
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
