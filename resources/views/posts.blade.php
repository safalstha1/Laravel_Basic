{{--@extends('components.layout')--}}

{{--@section('banner')--}}
{{--    <h1> My Blogs</h1>--}}
{{--@endsection--}}
{{--@section('content')--}}
{{--    @foreach($posts as $post)--}}

{{--        <article>--}}
{{--            <a href="/posts/{{$post-> slug}}">--}}
{{--                <h1>  {{$post->title}}</h1>--}}

{{--            </a>--}}
{{--            <div>--}}
{{--                --}}{{--            <?= $post->excerpt; ?>--}}
{{--                {{ $post->excerpt}}--}}
{{--            </div>--}}
{{--            <div><br>--}}
{{--                <a href="/posts/<?= $post-> slug; ?>"> Read More.....</a>--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
{{--@endsection--}}

<x-layout>
    @foreach($posts as $post)--}}

            <article>
                <a href="/posts/{{$post-> slug}}">
                    <h1>  {{$post->title}}</h1>

                </a>
                <div>
                                <?= $post->excerpt; ?>
                    {{ $post->excerpt}}
                </div>
                <div><br>
                    <a href="/posts/<?= $post-> slug; ?>"> Read More.....</a>
                </div>
            </article>
        @endforeach

</x-layout>
