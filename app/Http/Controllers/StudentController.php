<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswa;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    public function index()
    {
        return view('calon_siswa.index');
    }

    public function payment()
    {
        $has_payment = Payment::where('user_id', Auth::user()->user_id)->get();
        return view('calon_siswa.payment', compact('has_payment'));
    }

    public function payment_upload(Request $request)
    {
        $payments = $request->validate([
            'bank' => 'required',
            'nama_rekening' => 'required',
            'bukti_pembayaran' => 'required',
        ]);

        $payments['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('post-images');

        $payments['user_id'] = Auth::user()->user_id;
        $payments['payment_id'] = rand(10000000, 99999999);
        Payment::create($payments);
        CalonSiswa::where('user_id', $payments['user_id'])->update([
            'status_pembayaran' => 1,
            'payment_id' => $payments['payment_id'],
        ]);

        return redirect(route('calon_siswa.payment'));
    }
}
