<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CalonSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Session\Session;

class AuthController extends Controller
{
    public function login()
    {
        setcookie('my_cookie', 'download complete', time() + 86400, "/");
        return view('dashboard.login');
    }

    public function loginAuth(Request $request)
    {
        // dd($request->all());
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }
            else{
                return redirect()->route('calon_siswa.dashboard');
            }
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function register()
    {
        $schools = file_get_contents('asset/json/daftar_smp.json');
        $schools = json_decode($schools, true);
        $schools = collect($schools);
        return view('dashboard.register', compact('schools'));
    }

    public function store(Request $request)
    {
        $valid_data = $request->validate([
            'nisn' => 'required',
            'jenis_kelamin' => 'required',
            'nama_lengkap' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'no_hp_ayah' => 'required',
            'no_hp_ibu' => 'required',
            'referensi' => 'required',
        ]);

        $valid_data['password'] = bcrypt($request->nisn);
        $valid_data['role'] = 'calon_siswa';
        $valid_data['user_id'] = substr($request->nisn, $request->nisn, $request->nisn);
        $valid_data['user_id'] = substr(strtolower($request->nama_lengkap), 0, 4) . substr($request->nisn, 4, 7);
        $valid_data['status_pembayaran'] = 0;
        $valid_data['name'] = $valid_data['nama_lengkap'];
        CalonSiswa::create($valid_data);
        User::create($valid_data);

        return redirect(route('dashboard.pdf.print', $valid_data['nisn']));
    }
}
