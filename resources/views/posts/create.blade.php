<x-front-main-layout>
    <div class="overflow-x-hidden bg-gray-100">
        <x-commons.navigation></x-commons.navigation>
        <main class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Create Post</h1>
                    </div>
                    <div class="mt-6">
                        <form>
                              action="/posts"
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
        <x-commons.footer />
    </div>
</x-front-main-layout>
