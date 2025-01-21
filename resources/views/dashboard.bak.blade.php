<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="device">
        <div class="logout">
            <a href="/proseslogout" class="logout-btn">
                <i class="bx bx-log-out"></i>
            </a>
        </div>
        <div class="header">
            <div class="left-side">
                <h1>Hello, Mark 👋</h1>
                <span>What you want to cook today?</span>
            </div>
            <div class="avatar"></div>
        </div>
        <div class="saldo">
            <div class="card">
                <div class="card-body">
                    <div class="sisatagihan">
                        <h4>Sisa Tagihan</h4>
                        <span class="saldotext">Rp. 200.000</span>
                    </div>
                    <div class="vl"></div>
                    <div class="saldosimpanan">
                        <h4>Simpanan</h4>
                        <span class="saldotext">Rp. 3000.000</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="listapp">
            <a href="#" class="app">
                <i class="bx bx-book"></i>
                <span class='label-app'>Pembiayaan</span>
            </a>
            <a href="#" class="app">
                <i class="bx bx-wallet"></i>
                <span class='label-app'>Simpanan</span>
            </a>
            <a href="#" class="app">
                <i class="bx bx-receipt"></i>
                <span class='label-app'>Slip Gaji</span>
            </a>
        </div>
        <h4 class="title-section">Rekap Presensi Januari 2024</h4>
        <div class="listapp">
            <a href="#" class="app">
                <i class="bx bx-book-open"></i>
                <span class='label-app'>Hadir</span>
            </a>
            <a href="#" class="app">
                <i class="bx bx-receipt"></i>
                <span class='label-app'>Izin</span>
            </a>
            <a href="#" class="app">
                <i class="bx bx-receipt"></i>
                <span class='label-app'>Slip Gaji</span>
            </a>
        </div>
        <div class="tabbar">
            <ul class="nav">

                <li>
                    <a href="#">
                        <i class="bx bx-home"></i>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-receipt"></i>
                        <span class="title">Receipt</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-item-active">
                        <div class="action-button large">
                            <i class="bx bx-camera"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-bell"></i>
                        <span class="title">Noti</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bx bx-user"></i>
                        <span class="title">Account</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</body>

</html>
