@props(['post'])

<aside class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
    <h3 class="mb-6 text-2xl font-bold">Comments</h3>
    <ol reversed
        class="flex flex-col gap-6">
        @foreach($post->comments as $comment)
            <li id="{{ $comment->id }}">
                <cite>On {{$comment->updated_at->toFormattedDateString()}}
                    <span class="not-italic">{{ ucwords($comment->author->name) }}</span> said :</cite>
                <blockquote>
                    <p>
                        {{ $comment->body }}
                    </p>
                </blockquote>
            </li>
        @endforeach
    </ol>
</aside>
