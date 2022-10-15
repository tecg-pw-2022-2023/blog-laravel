@props(['post'])

<article>
    <div class="max-w-4xl px-6 py-6 mx-auto bg-white rounded-lg shadow-md">
        <x-posts.excerpt-header :post="$post"/>
        <h2 class="mt-2">
            <a href="/posts/{{ $post->slug }}"
               class="text-2xl font-bold text-blue-700 hover:text-gray-600 hover:underline">
                {{ $post->title }}
            </a>
            <p class="mt-2 text-gray-600">{{ $post->excerpt }}</p>
        </h2>
        <x-posts.excerpt-footer :post="$post"/>
    </div>
</article>
