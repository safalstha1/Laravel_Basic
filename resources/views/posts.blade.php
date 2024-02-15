<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>

@foreach($posts as $post)
    @dd($loop)
<article>
       <a href="/posts/{{$post-> slug}}">
           <h1> <?= $post->title; ?></h1>
           {{$post->title}}
       </a>
    <div>

{{--            <?= $post->excerpt; ?>--}}
        {{ $post->excerpt}}

    </div>

    <div><br>
        <a href="/posts/<?= $post-> slug; ?>"> Read More.....</a>
    </div>

</article>

@endforeach



</body>

