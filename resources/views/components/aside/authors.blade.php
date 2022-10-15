@props(['title'])

<x-aside.list-container>
    <x-slot:title>{{ $title }}</x-slot:title>
    @if($authors->count())
        <ul>
            @foreach ($authors as $author)
                <li class="flex items-center mb-4"><img
                        src="<?= $author->avatar ?>"
                        alt="avatar"
                        class="object-cover w-10 h-10 mr-2 rounded-full">
                    <div><a href="/authors/{{ $author->slug }}"
                            class="font-bold text-blue-700 hover:text-gray-600 hover:underline">{{ ucwords($author->name) }}</a>
                        <p>Has created <em>{{ $author->posts_count }}</em> posts and posted
                            <em>{{ $author->comments_count }}</em> comments</p>
                    </div>
                </li>
            @endforeach
        </ul>
        @if($authors_count > $authors->count())
            <div class="text-right"><a href="?aside-expanded=authors" class="text-blue-700 hover:underline">See all {{ $authors_count }} authors</a></div>
        @endif
    @else
        <p>No post yet!</p>
    @endif

</x-aside.list-container>
