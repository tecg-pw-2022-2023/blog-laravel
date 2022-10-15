<x-front-main-layout>
    <div class="overflow-x-hidden bg-gray-100">
        <x-commons.navigation></x-commons.navigation>
        <main class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
                <div class="flex flex-col gap-12 w-full lg:w-8/12">
                    <article>
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl font-bold text-gray-700 md:text-2xl">{{ $post->title }}</h2>
                        </div>
                        <div class="mt-6">
                            <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md flex flex-col gap-2">
                                <x-posts.full-header :post="$post"/>
                                <div class="text-gray-600 [&>p]:mb-4 [&>p]:indent-4">
                                    {!! $post->body !!}
                                </div>
                            </div>
                        </div>
                    </article>
                    @if($post->comments_count)
                        <x-posts.comments-list :post="$post"/>
                    @endif
                </div>
                <x-aside></x-aside>
            </div>
        </main>
        <x-commons.footer/>
    </div>
</x-front-main-layout>
