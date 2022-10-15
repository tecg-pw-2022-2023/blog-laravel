<x-front-main-layout>
    <div class="overflow-x-hidden bg-gray-100">
        <x-commons.navigation></x-commons.navigation>
        <x-posts.excerpts-list-for-indexes :posts="$posts" :title="'Posts from '.ucwords($category->name)"/>
        <x-commons.footer/>
    </div>
</x-front-main-layout>
