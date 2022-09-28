<section class="px-8">
    <h3 class="mb-4 text-xl font-bold text-gray-700">Authors</h3>
    <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
        <ul class="-mx-4">
            @foreach ($authors as $author)
            <li class="flex items-center mb-3"><img
                        src="<?= $author->avatar ?>"
                        alt="avatar"
                        class="object-cover w-10 h-10 mx-4 rounded-full">
                <p><a href="/authors/{{ $author->slug }}"
                      class="mx-1 font-bold text-gray-700 hover:underline">{{ ucwords($author->name) }}</a>
                    <span class="text-sm font-light text-gray-700">Created {{ $author->posts_count }} posts</span> and
                    <span class="text-sm font-light text-gray-700">as posted {{ $author->comments_count }} comments</span>
                </p>
            </li>
            @endforeach
        </ul>
        @if($authors_count > $authors->count())
            <div class="text-right"><a href="?aside-expanded=authors">See all {{ $authors_count }} authors</a></div>
        @endif
    </div>
</section>
