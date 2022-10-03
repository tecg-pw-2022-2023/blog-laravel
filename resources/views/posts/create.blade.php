<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon"
          sizes="180x180"
          href="/apple-touch-icon.png">
    <link rel="icon"
          type="image/png"
          sizes="32x32"
          href="/favicon-32x32.png">
    <link rel="icon"
          type="image/png"
          sizes="16x16"
          href="/favicon-16x16.png">
    <link rel="manifest"
          href="/site.webmanifest">
    <link rel="mask-icon"
          href="/safari-pinned-tab.svg"
          color="#0ed3cf">
    <meta name="msapplication-TileColor"
          content="#0ed3cf">
    <meta name="theme-color"
          content="#0ed3cf">

    <title>Create A New Post - My Awesome Blog</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-200">
<div class="overflow-x-hidden bg-gray-100">
    <x-commons.navigation></x-commons.navigation>
    <main class="px-6 py-8">
        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Create Post</h1>
                </div>
                <div class="mt-6">
                    <form action="/posts"
                          method="post">
                        @csrf
                        <label for="title"
                               class="block @error('title') text-red-600 @enderror mb-2">Title</label>
                        @error('title') <p class="italic text-red-600">{{$message}}</p> @enderror
                        <input id="title"
                               type="text"
                               name="title"
                               value="{{old('title')}}"
                               class="p-4 w-full rounded-md border-gray-300 @error('title') border-red-600  accent-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                        <label for="excerpt"
                               class="block @error('excerpt') text-red-600 @enderror mt-8 mb-2">Excerpt</label>
                        @error('excerpt') <p class="italic text-red-600">{{$message}}</p> @enderror
                        <textarea name="excerpt"
                                  id="excerpt"
                                  rows="5"
                                  class="p-4  w-full rounded-md border-gray-300 @error('excerpt') border-red-600  accent-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{old('excerpt')}}</textarea>

                        <label for="body"
                               class="block @error('body') text-red-600 @enderror mt-8 mb-2">Body</label>
                        @error('body') <p class="italic text-red-600">{{$message}}</p> @enderror
                        <textarea name="body"
                                  id="body"
                                  rows="10"
                                  class="p-4 w-full rounded-md border-gray-300 @error('body') border-red-600  accent-red-600 @enderror shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{old('body')}}</textarea>

                        <x-form-controls.categories-select></x-form-controls.categories-select>

                        <button type="submit"
                                class="p-4 float-right mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                            Create new post
                        </button>
                    </form>
                </div>
            </div>
            <x-aside></x-aside>
        </div>
    </main>
    <footer class="px-6 py-2 text-gray-100 bg-gray-800">
        <div class="container flex flex-col items-center justify-between mx-auto md:flex-row"><a href="#"
                                                                                                 class="text-2xl font-bold">Brand</a>
            <p class="mt-2 md:mt-0">All rights reserved 2020.</p>
            <div class="flex mt-4 mb-2 -mx-2 md:mt-0 md:mb-0"><a href="#"
                                                                 class="mx-2 text-gray-100 hover:text-gray-400">
                    <svg viewBox="0 0 512 512"
                         class="w-4 h-4 fill-current">
                        <path
                            d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z">
                        </path>
                    </svg>
                </a><a href="#"
                       class="mx-2 text-gray-100 hover:text-gray-400">
                    <svg viewBox="0 0 512 512"
                         class="w-4 h-4 fill-current">
                        <path
                            d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z">
                        </path>
                    </svg>
                </a><a href="#"
                       class="mx-2 text-gray-100 hover:text-gray-400">
                    <svg viewBox="0 0 512 512"
                         class="w-4 h-4 fill-current">
                        <path
                            d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
