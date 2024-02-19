<x-layout>
        <article>
            <p>
                By <a href="#">{{$post->user->name}} </a>   in <a href="/categories/{{$post-> category -> slug}}">{{$post->category->name}}</a>
            </p>
            <h1> {{$post->title}}  </h1>
            <div> {!!$post->body!!}</div>

            <br>
            <a href="/">Go Back</a>
        </article>


</x-layout>
