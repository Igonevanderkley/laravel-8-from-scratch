<x-layout>
    <article>

        <p>
            By <a href="author/{{ $post->author->username}}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <h2>{{ $post->title }}</h2>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go back</a>
</x-layout>
