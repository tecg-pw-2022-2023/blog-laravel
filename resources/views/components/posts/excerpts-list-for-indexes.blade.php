@props(['posts','title'])
<main class="px-6 py-8">
    <div class="container flex justify-between mx-auto">
        <div class="w-full lg:w-8/12">
            <div class="flex items-center justify-between">
                <h1 class="mb-6 text-xl font-bold text-gray-700 md:text-2xl">{{ $title }}</h1>
                <?php // sélecteur d’ordre ?>
            </div>
            <div class="flex flex-col gap-12 mb-6">
                @foreach ($posts as $post)
                    <x-posts.excerpt :post="$post"></x-posts.excerpt>
                @endforeach
            </div>
            {{ $posts->links('pagination::tailwind') }}
        </div>
        <x-aside></x-aside>
    </div>
</main>
