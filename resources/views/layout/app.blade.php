<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>ToDo | @yield('title', '')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50">
    @auth('users')
    <!-- Navbar dengan sapaan dan tombol logout -->
    <div class="bg-blue-600 text-white p-4 flex justify-between items-center">
        <div>
            <span class="text-lg">Halo, {{ Auth::guard('users')->user()->name }}!</span> <!-- Menampilkan nama pengguna -->
        </div>
        <div>
            <form action="{{ route('users.logout') }}" method="get" style="display:inline;">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Keluar</button>
            </form>
        </div>
    </div>
    @endauth
    <!-- Konten utama -->
    @yield('content')

    @vite('resources/js/app.js')
    @yield('script')
</body>
</html>
