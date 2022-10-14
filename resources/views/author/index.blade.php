<x-front-main-layout>
    <div class="overflow-x-hidden bg-gray-100">
        <x-commons.navigation></x-commons.navigation>
        <main class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Posts from {{ $author->name }}</h1>
                        <?php // sélecteur d’ordre ?>
                    </div>

                    @foreach ($posts as $post)
                        <article class="mt-6">
                            <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                                <x-posts.excerpt-header :post="$post"/>
                                <h2 class="mt-2">
                                    <a href="/posts/{{ $post->slug }}"
                                       class="text-2xl font-bold text-gray-700 hover:underline">
                                        {{ $post->title }}
                                    </a>
                                    <p class="mt-2 text-gray-600">{{ $post->excerpt }}</p>
                                </h2>
                                <x-posts.excerpt-footer :post="$post"/>
                            </div>
                        </article>
                    @endforeach
                    {{ $posts->links() }}
                </div>
                <x-aside></x-aside>
            </div>
        </main>
        <x-commons.footer/>
    </div>
</x-front-main-layout>
