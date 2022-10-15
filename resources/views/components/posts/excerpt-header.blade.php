@props(['post'])

<div class="flex justify-between mb-4">
    <span class="uppercase text-gray-600">
        {{ $post->published_at->toFormattedDateString() }}
    </span>
    @if($post->categories->count())
        <x-posts.header-categories-list :categories="$post->categories"/>
    @endif
</div>

