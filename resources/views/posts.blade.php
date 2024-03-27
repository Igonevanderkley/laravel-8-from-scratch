<x-layout>
    @foreach ($posts as $post)
        <article>
            <p>
                By <a href="author/{{ $post->author->username}}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
