@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="">
                    <div class="col-4 mb-3 row">
                        <a href="{{ route('admin.posts.create') }}" class="col-4 btn btn-block btn-primary mr-1">Создать новый</a>
                    </div>
                    <div class="row flex-wrap ">
                        @foreach($posts as $post)
                        <div class="card m-1 m-md-2 col-12 overflow-hidden" style=" max-width: 810px;">
                            <div class="card-header p-1 m-1">
                                <h3 class="card-title overflow-hidden" style="white-space: nowrap">
                                    ID:{{ $post->id }} |
                                </h3>
                                <h3 class="card-title col-6 row">
                                    <a href="{{ route('post', $post->id) }}" target="_blank">
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
                                @if($post->image != Null)
                                    {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("![image](/storage/images/ForPosts/".$post->image.")") !!}
                                    {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("---") !!}
                                @endif
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
            </div>
        </section>
    </div>
@endsection
