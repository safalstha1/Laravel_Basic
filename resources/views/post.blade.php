{{--<!doctype html>--}}

{{--<title> My Blogg</title>--}}
{{--<link rel="stylesheet" href="/app.css">--}}
{{--<body>--}}
{{--<article>--}}
{{--    <h1> <?= $post->title; ?> </h1>--}}
{{--    <h1> {{$post->title}}  </h1>--}}
{{--    <div> <?= $post->body; ?></div>--}}
{{--    <div> {!!$post->body!!}</div>--}}


{{--</article>--}}

{{--</body>--}}
{{--//using basic blade --}}
@extends('layout')
@section('content')
    <article>
        <h1> {{$post->title}}  </h1>
        <div> {!!$post->body!!}</div>
    </article>
    <a href="/">Go Back</a>
@endsection

