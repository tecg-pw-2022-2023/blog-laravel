@props(['categories'])

<ul class="flex gap-1 justify-end items-center">
    @foreach ($categories as $category)
        <li>
            <a href="/categories/{{ $category->slug }}"
               class="px-2 py-1 text-gray-100 bg-gray-600 rounded hover:bg-gray-500">
                {{ ucwords($category->name) }}
            </a>
        </li>
    @endforeach
</ul>
