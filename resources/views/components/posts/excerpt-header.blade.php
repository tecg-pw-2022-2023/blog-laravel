@props(['post'])

<div class="flex items-center justify-between">
    <span class="font-light text-gray-600">
        {{ $post->published_at }}
    </span>
    @foreach ($post->categories as $category)
        <a href="/categories/{{ $category->slug }}"
           class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">
            {{ ucwords($category->name) }}
        </a>
    @endforeach
</div>

