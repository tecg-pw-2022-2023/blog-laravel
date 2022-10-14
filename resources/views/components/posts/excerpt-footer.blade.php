@props(['post'])
<div class="flex items-center justify-between mt-4">
    <a href="/posts/{{ $post->slug }}"
       class="text-blue-500 hover:underline">
        Read more<span class="sr-only"> about {{ $post->title }}</span>
    </a>
    <div>
        <a href="/authors/{{ $post->user->slug }}"
           class="flex items-center">
            <img src="{{ $post->user->avatar }}"
                 alt="{{ $post->user->name }}"
                 class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
            <span class="font-bold text-gray-700 hover:underline">{{ ucwords($post->user->name) }}</span>
        </a>
    </div>
</div>
