<header class="px-6 py-4 bg-white shadow">
    <div class="container flex flex-col mx-auto md:flex-row md:items-center md:justify-between">
        <h1 class="flex items-center justify-between">
            <a href="/posts"
               class="text-xl font-bold text-gray-800 md:text-2xl">{{ config('app.name') }}</a>
        </h1>
        <nav class="flex-col hidden md:flex md:flex-row md:-mx-4">
            <h2 class="sr-only">Main Navigation</h2>
            <a href="/posts"
               class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Home</a>
            @guest
                <a href="/login"
                   class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Login</a>
            @endguest
            @auth
                <a href="/authors/{{auth()->user()->slug}}"
                   class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">{{auth()->user()->name}}</a>
                @can('create',\App\Models\Post::class)
                    <a href="/posts/create"
                       class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Create post</a>
                @endcan
                <form action="/logout"
                      method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth
        </nav>
    </div>
</header>
