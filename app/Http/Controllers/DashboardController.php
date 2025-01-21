<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $npp = auth()->user()->npp;
        $karyawan = Karyawan::join('jabatan', 'karyawan.kode_jabatan', '=', 'jabatan.kode_jabatan')
            ->join('unit', 'karyawan.kode_unit', '=', 'unit.kode_unit')
            ->where('npp', $npp)->first();
        return view('dashboard', compact('karyawan'));
    }
}
