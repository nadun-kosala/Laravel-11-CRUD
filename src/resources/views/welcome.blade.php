<x-layout>

    <div>
        <h1
            class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Learn <mark class="px-2 text-white bg-red-600 rounded dark:bg-blue-500">Laravel</mark> over your days</h1>
        <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
            Laravel is a powerful and flexible PHP framework designed for web application development. It offers elegant
            syntax and robust features, making it a preferred choice for developers. Learning Laravel allows you to
            leverage its built-in tools and libraries, such as Eloquent ORM, Blade templating engine, and Artisan CLI,
            to create scalable and maintainable web applications efficiently. With its comprehensive documentation and
            active community support, Laravel provides an excellent environment for both beginners and experienced
            developers to enhance their skills and build modern web applications.
        </p>
    </div>

    <div class="mt-10">
        <a href="#"
            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">


            @auth
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Welcome </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Welcome to our community! We're thrilled to have
                        you
                        here. Explore, connect, and enjoy the many features we offer. If you have any questions, don't
                        hesitate
                        to reach out. Welcome aboard!</p>
                </div>
            @endauth

            @guest
                <div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Login to Continue</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">You are currently not logged in. Please log in to
                        access your personalized content, manage your account, and enjoy all the features of our platform.
                        If
                        you don't have an account, sign up today!</p>
                </div>
            @endguest
        </a>
    </div>
</x-layout>
