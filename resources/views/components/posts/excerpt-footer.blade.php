@props(['post'])
<div class="flex items-center justify-between mt-4">
    <a href="/posts/{{ $post->slug }}"
       class="font-bold text-blue-700 hover:text-gray-600 hover:underline">
        Read more<span class="sr-only"> about {{ $post->title }}</span> ({{ $post->comments_count }} comment{{$post->comments_count>1 ? 's' : ''}})
    </a>
    <div>
        <a href="/authors/{{ $post->user->slug }}"
           class="flex items-center">
            <img src="{{ $post->user->avatar }}"
                 alt="{{ $post->user->name }}"
                 class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
            <span class="font-bold text-blue-700 hover:text-gray-600 hover:underline">{{ ucwords($post->user->name) }}</span>
        </a>
    </div>
</div>
