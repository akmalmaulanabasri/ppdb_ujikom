<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CalonSiswa;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::where('is_confirmed', null)->get();
        $payment_approved = Payment::where('is_confirmed', 'approve')->get();
        $payment_decline = Payment::where('is_confirmed', 'decline')->get();
        $students = CalonSiswa::all();
        return view('admin.index', compact('payments', 'students', 'payment_approved', 'payment_decline'));
    }

    public function calon_siswa(){
        $calon_siswas = CalonSiswa::all();
        $payments = Payment::all();
        return view('admin.calon_siswa', compact('calon_siswas', 'payments'));
    }

    public function approvePayment($payment_id){
        Payment::where('payment_id', $payment_id )->update([
            'is_confirmed' => "approve"
        ]);
        return redirect(route('admin.calon_siswa'));
    }

    public function declinePayment($payment_id){
        Payment::where('payment_id', $payment_id )->update([
            'is_confirmed' => "decline"
        ]);
        return redirect(route('admin.calon_siswa'));
    }


}

