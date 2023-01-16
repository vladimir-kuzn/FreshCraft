@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категория</h1>
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
                <div class="">
                    <div class="col-7 mb-3">
                        <a href="{{ route('admin.categories.') }}" class="col-2 btn btn-block btn-primary"><- Назад</a>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Данные категории</h3>
                            <a class="ml-2 text-success" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fas fa-pencil-alt"></i></a>
                            <form class="ml-2" action="{{ route('admin.categories.destroy', $category->id) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash text-danger" role="button"></i>
                                </button>
                            </form>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $category->id }}</td>
                                </tr>
                                <tr>
                                    <td>Название</td>
                                    <td>{{ $category->title }}</td>
                                </tr>
                                <tr>
                                    <td>Дата создания</td>
                                    <td>{{ $category->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>Дата изменения</td>
                                    <td>{{ $category->updated_at }}</td>
                                </tr>
                                </tbody>
                            </table>
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
