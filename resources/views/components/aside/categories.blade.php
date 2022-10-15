@props(['title'])

<x-aside.list-container>
    <x-slot:title>{{ $title }}</x-slot:title>
    @if($categories->count())
        <ul>
            @foreach ($categories as $category)
                <li class="mb-4">
                    <a href="/categories/{{ $category->slug }}"
                       class="font-bold text-blue-700 hover:text-gray-600 hover:underline">
                        {{ ucwords($category->name) }}</a> contains <em>{{ $category->posts_count }}</em> posts
                </li>
            @endforeach
            @if($uncategorized)
                <li class="text-right">{{ $uncategorized }} posts are <a href="/categories/uncategorized"
                                                                         class="font-bold text-blue-700 hover:text-gray-600 hover:underline">
                        uncategorized</a></li>
            @endif
        </ul>
    @else
        <p>No category yet!</p>
    @endif
</x-aside.list-container>
