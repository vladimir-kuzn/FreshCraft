@extends('layouts.post')

@section('content-main')
<section class="main">
    <div class="main-container">
        @if($post->image != Null)
            <div class="image">
                {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("![image](/storage/images/ForPosts/".$post->image.")") !!}
                {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("#### ".$categories->find($post->category_id)->getAttribute('title')) !!}
            </div>
            <div class="title">
                {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("# ".$post->title) !!}
            </div>
        @else
            <div class="title">
                {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("#### ".$categories->find($post->category_id)->getAttribute('title')) !!}
                {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml("# ".$post->title) !!}
            </div>
        @endif
            {!! app(Spatie\LaravelMarkdown\MarkdownRenderer::class)->toHtml($post->content) !!}
    </div>
</section>
@endsection
