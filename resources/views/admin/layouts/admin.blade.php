<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Thêm CSS, JS tùy theo yêu cầu -->
</head>
<body>
    <nav>
        <!-- Thanh điều hướng cho admin -->
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <!-- Thêm các liên kết khác -->
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Thêm các script cần thiết -->
</body>
</html>
