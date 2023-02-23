@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание нового поста</h1>
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
                <div class="row justify-content-center">
                    <div class="w-100">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Новый пост</h3>
                                </div>
                                <form action="{{ route('admin.posts.store') }}" method="POST" target="_blank">
                                    @csrf
                                    {{--
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Название</label>
                                            <input type="text"
                                                   class="@error('title') form-control is-invalid @enderror form-control"
                                                   name="title" id="title" placeholder="Название поста"
                                                   value="{{ old('title') }}">
                                            @error('title')
                                            <div class="text-danger">Неверное название поста</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Категория</label>
                                            <select
                                                class="form-control @error('category_id') form-control is-invalid @enderror "
                                                name="category_id" id="category_id">
                                                <option value="">*Обязательно_выбрать!*</option>
                                                @foreach($categories as $category)
                                                <option @if(old('category_id') == $category->id) selected @endif
                                                    value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Контент</label>
                                            <textarea
                                                class="@error('content') form-control is-invalid @enderror form-control"
                                                rows="6" name="content" id="content"
                                                placeholder="Контент в MarkDown">{{ old('content') }}</textarea>
                                            @error('content')
                                            <div class="text-danger">А где?</div>
                                            @enderror
                                        </div>
                                    </div>
                                    --}}



                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Название</label>
                                            <input type="text"
                                                   class="@error('title') form-control is-invalid @enderror form-control"
                                                   name="title" id="title" placeholder="Название поста"
                                                   value="{{ old('title') }}">
                                            @error('title')
                                            <div class="text-danger">Неверное название поста</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Обложка</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="image" id="image" placeholder="Изображение"
                                                   value="{{ old('image') }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Категория</label>
                                            <select
                                                class="form-control @error('category_id') form-control is-invalid @enderror "
                                                name="category_id" id="category_id">
                                                <option value="">*Обязательно_выбрать!*</option>
                                                @foreach($categories as $category)
                                                    <option @if(old('category_id') == $category->id) selected @endif
                                                    value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Контент</label>
                                            <textarea
                                                class="@error('content') form-control is-invalid @enderror form-control"
                                                rows="50" name="content" id="content" placeholder="Контент в MarkDown">{{ old('content') }}</textarea>
                                            @error('content')
                                            <div class="text-danger">А где?</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input class="btn btn-primary" type="submit" name="create" value="Создать">
                                        <input class="btn btn-primary" type="submit" name="preview" value="Превью">
                                    </div>
                                </form>
                            </div>

                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
