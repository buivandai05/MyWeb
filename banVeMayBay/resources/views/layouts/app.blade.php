<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Ban Ve May Bay')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-4">
    <header class="mb-4">
        <h1 class="text-center">Ban Ve May Bay</h1>
        <nav class="text-center mb-3">
            <a href="{{ route('khach-hang.index') }}" class="btn btn-primary">Khách Hàng</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="text-center mt-4">
        <hr>
        <p>© 2025 Ban Ve May Bay</p>
    </footer>
</body>

</html>