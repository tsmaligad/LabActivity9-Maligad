
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 text-gray-800">
    <nav class="bg-emerald-700 px-6 py-4 text-white shadow">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4">
            <a href="/" class="text-xl font-bold">Bakuna Tracker</a>

            <div class="flex flex-wrap items-center gap-5 text-sm">
                @auth
                    <a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a>
                    <a href="{{ route('schedule') }}" class="hover:underline">Schedule</a>
                    <span>Hi, {{ auth()->user()->name }}</span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="rounded-lg bg-white px-3 py-2 font-medium text-emerald-700 hover:bg-gray-100">
                            Logout
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="hover:underline">Sign In</a>
                @endguest
            </div>
        </div>
    </nav>

    <main class="mx-auto min-h-[75vh] max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-200 bg-white py-5 text-center text-sm text-gray-500">
        Barangay Matina Crossing Health Center | Bakuna Tracker 2026
    </footer>
</body>
</html>
