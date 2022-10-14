@props(['post'])

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
