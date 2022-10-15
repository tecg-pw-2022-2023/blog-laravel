@props(['title'])

<x-aside.list-container>
    <x-slot:title>{{ $title }}</x-slot:title>
        <x-posts.header-categories-list :categories="$post->categories"/>
        <div class="mt-4">
            <a href="/posts/{{ $post->slug }}"
               class="hover:underline">{{ $post->title }}</a>
        </div>
        <div class="mt-4">
            <div class="flex items-center gap-2"><img
                    src="{{ $post->user->avatar }}"
                    alt="avatar"
                    class="object-cover w-8 h-8 rounded-full">
                <a href="/authors/{{ $post->user->slug }}"
                   class="font-bold text-blue-700 hover:text-gray-600 hover:underline">{{ ucwords($post->user->name) }}</a>
            </div>
            <div class="text-right"><em>{{ $post->published_at->shortRelativeDiffForHumans() }}</em></div>
        </div>
</x-aside.list-container>
