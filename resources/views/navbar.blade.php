<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{asset('style.css')}}>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="collapse navbar-collapse font" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href={{url("home")}}>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{url("cashview")}}>คำนวณเงินทอน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{url("phoneview")}}>จัดการสมุดโทรศัพท์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{url("compareview")}}>เปรียบเทียบร้านค้า</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>


</html>