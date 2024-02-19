
<x-layout>
    @foreach($posts as $post)

            <article>

                <a href="/posts/{{$post-> id}}">
                    <h1>  {{$post->title}}</h1>

                </a>
                <p>
                    <a href="#">Category:{{$post->category->name}}</a>
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
