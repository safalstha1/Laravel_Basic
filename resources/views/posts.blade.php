<x-layout>
    @foreach($posts as $post)

        <article>

            <a href="/posts/{{$post-> slug}}">
                <h1>  {{$post->title}}</h1>

            </a>
            <p>
                By <a href="/authors/{{$post->author->id}}">{{$post->author->name}} </a> in</a>

                <a href="/categories/{{$post-> category -> slug}}">Category:{{$post->category->name}}</a>
            </p>
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
