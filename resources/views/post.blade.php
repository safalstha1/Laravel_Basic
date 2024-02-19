<x-layout>
        <article>
            <p>
                <a href="#">Category:{{$post->category->name}}</a>
            </p>
            <h1> {{$post->title}}  </h1>
            <div> {!!$post->body!!}</div>

            <br>
            <a href="/">Go Back</a>
        </article>


</x-layout>
