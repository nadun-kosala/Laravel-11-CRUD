<x-layout>
    <p class="text-4xl font-extrabold text-gray-900 dark:text-white"></p>
    <h1
        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        <mark class="px-2 mr-2 text-white bg-red-600 rounded dark:bg-blue-500">Hello
        </mark>{{ auth()->user()->name }}
    </h1>

    <div>

        <div
            class="block max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h2 class="font-bold mb-4">Create a new post</h2>
            @if(session('success'))
            <div>
                <p>{{ session('success') }}</p>
            </div>
            @endif
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                        Title</label>
                    <input type="title" name="title" id="title" value="{{ old('title') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Make a title">
                </div>
                @error('title')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <div class="mt-4">
                    <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                        Content</label>
                    <textarea name="body" rows="10"
                        class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  {{ old('body') }}
                </textarea>
                </div>
                @error('body')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
                <button type="submit"
                    class="w-full mt-5 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create
                    Post</button>
            </form>
        </div>

    </div>
</x-layout>
