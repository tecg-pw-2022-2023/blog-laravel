@props(['post'])
<header>
    <div class="flex justify-between items-center">
        <a href="/authors/{{ $post->user->slug }}"
           class="flex items-center justify-end"><img
                src="{{ $post->user->avatar }}"
                alt="avatar"
                class="hidden object-cover w-10 h-10 mr-4 rounded-full sm:block">
            <span class="font-bold text-blue-700 hover:text-gray-600 hover:underline">{{ ucwords($post->user->name) }}</span>
        </a>
        @if($post->categories->count())
            <x-posts.header-categories-list :categories="$post->categories"/>
        @else
            <p class="font-bold">This post in uncategorized</p>
        @endif
    </div>
    <div class="my-4">
        <div class="uppercase font-light text-gray-600 text-right">
            {{ $post->published_at->toFormattedDateString() }}
        </div>
    </div>
</header>
