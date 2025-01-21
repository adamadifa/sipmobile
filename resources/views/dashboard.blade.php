@extends('layouts.app')
@section('content')
    <style>
        :root {
            --bg-body: #dff9fb;
            --bg-nav: #ffffff;
            --color-nav: #32745e;
            --color-nav-active: #58907D;
            --bg-indicator: #32745e;
            --color-nav-hover: #3ab58c;
        }


        #header-section {
            height: 180px;
            padding: 20px;
            position: relative;
        }

        #section-logout {
            position: absolute;
            right: 15px;
            top: 15px;
        }

        .logout-btn {
            color: var(--bg-indicator);
            font-size: 30px;
            text-decoration: none;
        }

        .logout-btn:hover {
            color: var(--color-nav-hover);

        }



        #section-user {
            margin-top: 50px;
            display: flex;
            justify-content: space-between
        }

        #user-info {
            margin-left: 30px !important;
            line-height: 2px;
        }

        #user-info h3 {
            color: var(--bg-indicator);
        }

        #user-info span {
            color: var(--color-nav);
        }

        #section-presensi {
            margin-top: 15px;
        }

        #presensi-today {
            display: flex;
            justify-content: space-between
        }

        #presensi-today h4 {
            color: #32745e;
            font-weight: bold;
            margin: 0
        }

        #presensi-today #presensi-text {
            color: #12855f;
        }

        #presensi-data {
            display: flex;
            justify-content: space-around
        }

        #presensi-icon {
            font-size: 30px;
            margin-right: 10px;
        }


        #rekap-section {

            margin-top: 50px;
            padding: 20px;
            position: relative;
        }

        #rekap-section #title {
            color: var(--bg-indicator);
        }

        #histori-section {
            padding: 0px 20px;
            position: relative;
        }

        #app-section {

            margin-top: 50px;
            padding: 20px;
            position: relative;
        }

        #app-section #title {
            color: var(--bg-indicator);
        }

        .iconpresence {
            color: #32745e
        }
    </style>
    <div id="header-section">
        <div id="section-logout">
            <a href="/proseslogout" class="logout-btn">
                <ion-icon name="exit-outline"></ion-icon>
            </a>
        </div>
        <div id="section-user">
            <div id="user-info">
                <h3 id="user-name">{{ auth()->user()->nama_lengkap }} 👋</h3>
                <span id="user-role">{{ $karyawan->nama_jabatan }}</span>
                <span id="user-role">({{ $karyawan->nama_unit }})</span>
            </div>
            <div class="avatar">
                <img src="{{ asset('assets/template/img/sample/avatar/avatar1.jpg') }}" alt="avatar"
                    class="imaged w64 rounded">
            </div>
        </div>
        <div id="section-presensi">
            <div class="card">
                <div class="card-body" id="presensi-today">
                    <div id="presensi-data">
                        <div id="presensi-icon">
                            <ion-icon name="camera"></ion-icon>
                        </div>
                        <div id="presensi-detail">
                            <h4>Jam Masuk</h4>
                            <span class="presensi-text">08:00</span>
                        </div>

                    </div>
                    <div class="outer">
                        <div class="inner"></div>
                    </div>
                    <div id="presensi-data">
                        <div id="presensi-icon">
                            <ion-icon name="camera"></ion-icon>
                        </div>
                        <div id="presensi-detail">
                            <h4>Jam Pulang</h4>
                            <span class="presensi-text">08:00</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="app-section">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body text-center" style="padding: 5px 5px !important; line-height:0.8rem">
                        <img src="{{ asset('assets/template/img/3d/prayingman64.png') }}" alt="" style="width: 50px"
                            class="mb-1">
                        <br>
                        <span style="font-size: 0.8rem; font-weight:500">
                            Ibadah
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body text-center" style="padding: 5px 5px !important; line-height:0.8rem">
                        <img src="{{ asset('assets/template/img/3d/simpanan.png') }}" alt="" style="width: 50px"
                            class="mb-1">
                        <br>
                        <span style="font-size: 0.8rem; font-weight:500">Simpanan</span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body text-center" style="padding: 5px 5px !important; line-height:0.8rem">
                        <img src="{{ asset('assets/template/img/3d/pinjaman.png') }}" alt="" style="width: 50px"
                            class="mb-1">
                        <br>
                        <span style="font-size: 0.8rem; font-weight:500">Pinjaman</span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body text-center" style="padding: 5px 5px !important; line-height:0.8rem">
                        <img src="{{ asset('assets/template/img/3d/slipgaji.png') }}" alt="" style="width: 50px"
                            class="mb-1">
                        <br>
                        <span style="font-size: 0.8rem; font-weight:500">Slip</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="histori-section">
        <div class="tab-pane fade show active" id="pilled" role="tabpanel">
            <ul class="nav nav-tabs style1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#historipresensi" role="tab">
                        7 Hari terakhir
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                        Pembiayaan
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content mt-2" style="margin-bottom:100px;">
            <div class="tab-pane fade show active" id="historipresensi" role="tabpanel">
                <div class="row mb-1">
                    <div class="col">
                        {{-- {{ $d->jam_out != null ? 'historibordergreen' : 'historiborderred' }} --}}
                        <div class="card historicard historibordergreen">
                            <div class="historicontent">
                                <div class="historidetail1">
                                    <div class="iconpresence">
                                        <ion-icon name="finger-print-outline" style="font-size: 48px"></ion-icon>
                                    </div>
                                    <div class="datepresence">
                                        <h4>16 Maret 2025</h4>
                                        <span class="timepresence">
                                            06:41 <span class="danger"> - Belum Scan</span>
                                        </span>
                                        <br>
                                        <span style="color:green">Tepat Waktu</span>
                                    </div>
                                </div>
                                <div class="historidetail2">
                                    <h4>REGULER</h4>
                                    <span class="timepresence">

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
