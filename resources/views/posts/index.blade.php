<x-front-main-layout>
    <div class="overflow-x-hidden bg-gray-100">
        <x-commons.navigation></x-commons.navigation>
        <main class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Posts</h1>
                        <?php // sélecteur d’ordre ?>
                    </div>

                    @foreach ($posts as $post)
                        <x-posts.excerpt :post="$post"></x-posts.excerpt>
                    @endforeach
                    {{ $posts->links() }}
                </div>
                <x-aside></x-aside>
            </div>
        </main>
        <x-commons.footer></x-commons.footer>
    </div>
</x-front-main-layout>
