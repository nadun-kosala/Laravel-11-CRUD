<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .dropdown-menu {
            display: none;
        }

        .dropdown-menu.active {
            display: block;
        }
    </style>
</head>

<body class="bg-slate-100 text-slate-900">
    <header class="bg-slate-800 shadow-lg">
        <nav class="flex justify-between py-8 px-2">
            <div>
                <a href="{{ route('posts.index') }}" class="text-white text-2xl">Home</a>
            </div>
            @guest
                <div>
                    <a href="{{ route('login') }}" class="text-white text-2xl mx-5">Login</a>
                    <a href="{{ route('register') }}" class="text-white text-2xl mx-5">Register</a>
                </div>
            @endguest

            @auth
                <div class="relative">
                    <img src="https://cdn-icons-png.flaticon.com/256/149/149071.png" alt="Avatar"
                        class="w-10 h-10 rounded-full cursor-pointer" id="avatar">
                    <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                        <p class="block px-4 py-2 text-lg text-gray-900">{{ auth()->user()->username }}</p>
                        <a href="{{ route('dashboard') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                        <form action="{{ route('logout') }}" method="post"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            @csrf
                            <button>Logout</button>
                        </form>
                    </div>
                </div>

                <script>
                    document.getElementById('avatar').addEventListener('click', function() {
                        document.querySelector('.dropdown-menu').classList.toggle('active');
                    });

                    window.addEventListener('click', function(e) {
                        if (!document.getElementById('avatar').contains(e.target)) {
                            document.querySelector('.dropdown-menu').classList.remove('active');
                        }
                    });
                </script>
            @endauth

        </nav>

    </header>
    <main class="px-4 py-8 mx-auto max-w-screen-lg">
        {{ $slot }}
    </main>
</body>

</html>
