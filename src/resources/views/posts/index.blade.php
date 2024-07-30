<x-layout>
    <h1
        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        Latest Posts</h1>
    <div class="grid grid-cols-2 gap-6">
        @foreach ($posts as $post)
            <div
                class="block max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $post->title }}
                </h5>
                <div class="mb-2 text-xl tracking-tight text-gray-900 dark:text-white">
                    <span>Posted {{ $post->created_at->diffForHumans() }} by</span>
                    <a href="" class="text-blue-500">USERNAME</a>
                </div>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    {{ Str::words($post->body, 20) }}
                </p>
            </div>
        @endforeach
    </div>
    <div class="mt-5">
        {{ $posts->links() }}
    </div>
</x-layout>
