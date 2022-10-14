<x-front-main-layout>
    <div class="overflow-x-hidden bg-gray-100">
        <x-commons.navigation></x-commons.navigation>
        <main class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
                <article class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-gray-700 md:text-2xl">{{ $post->title }}</h2>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between">
                                <a href="/authors/{{ $post->user->slug }}"
                                   class="flex items-center justify-end"><img
                                        src="{{ $post->user->avatar }}"
                                        alt="avatar"
                                        class="hidden object-cover w-10 h-10 mr-4 rounded-full sm:block">
                                    <span class="font-bold text-gray-700 hover:underline">{{ ucwords($post->user->name) }}</span>
                                </a>
                                @foreach ($post->categories as $category)
                                    <a href="/categories/{{ strtolower($category->slug) }}"
                                       class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">{{ ucwords($category->name) }}</a>
                                @endforeach
                            </div>
                            <div class="my-4">
                                    <span class="font-light text-gray-600">
                                        {{ $post->published_at }}
                                    </span>
                            </div>
                            <div class="mt-2 text-gray-600">
                                {!! $post->body !!}
                            </div>
                        </div>
                    </div>
                </article>
                <x-aside></x-aside>
            </div>
        </main>
        <x-commons.footer />
    </div>
</x-front-main-layout>
