@props(['post'])

<div class="flex justify-between mb-4">
    <span class="uppercase text-gray-600">
        {{ $post->published_at->toFormattedDateString() }}
    </span>
    @if(count($post->categories))
    <ul class="flex">
        @foreach ($post->categories as $category)
            <li class="ml-1">
                <a href="/categories/{{ $category->slug }}"
                   class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">
                    {{ ucwords($category->name) }}
                </a>
            </li>
        @endforeach
    </ul>
    @endif
</div>

