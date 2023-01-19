@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
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
                        <a href="{{ route('admin.posts.create') }}" class="col-2 btn btn-block btn-primary">Создать
                            новый</a>
                    </div>
                    <div class="row flex-wrap ">
                        @foreach($posts as $post)
                        <div class="card m-1 m-md-2 col-12 overflow-hidden" style="max-height: 450px; max-width: 810px;">
                            <div class="card-header p-1 m-1">
                                <h3 class="card-title overflow-hidden" style="white-space: nowrap">
                                    ID:{{ $post->id }} |
                                </h3>
                                <h3 class="card-title col-6 row">
                                    <a href="{{ route('admin.posts.show', $post->id) }}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a class="text-success ml-3"
                                       href="{{ route('admin.posts.edit', $post->id) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a class="text-success ml-3" onclick="event.preventDefault(); document.getElementById('destroy-form').submit();"
                                       href="{{ route('admin.posts.destroy', $post->id) }}">
                                        <i class="fas fa-trash text-danger" role="button"></i>
                                    </a>
                                    <form id="destroy-form" style="display:none" action="{{ route('admin.posts.destroy', $post->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </h3>
                                <h3 class="card-title float-sm-right col-3 text-right" title = "Изменение: {{ $post->updated_at }}">
                                    {{ $post->created_at }}
                                </h3>
                            </div>

                            <div class="card-body">
                                {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("## ".$post->title) !!}
                                @if($post->category_id != Null)
                                    {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("---") !!}
                                    {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("#### ".$categories->find($post->category_id)->getAttribute('title')) !!}
                                @endif
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
