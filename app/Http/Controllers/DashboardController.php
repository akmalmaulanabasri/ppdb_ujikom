<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
