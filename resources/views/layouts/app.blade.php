<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku</title>
    {{-- Memuat Tailwind CSS dari CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

    <div class="container mx-auto mt-10 max-w-4xl">
        <div class="bg-white p-8 rounded-xl shadow-lg">
            {{-- Tempat untuk konten dinamis dari halaman lain --}}
            @yield('content')
        </div>
        <footer class="text-center text-slate-500 mt-4">
            Dibuat dengan Laravel & Tailwind CSS
        </footer>
    </div>

</body>
</html>