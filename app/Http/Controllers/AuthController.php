<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\AuthMail;

class AuthController extends Controller
{
    function index()
    {
        return view('auth_page.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'E-mail harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->email_verified_at != null){
                if(Auth::user()->role === 'admin'){
                    return redirect()->route('admin')->with('success', 'Halo Admin! Anda berhasil login');
                }elseif(Auth::user()->role === 'user'){
                    return redirect()->route('user')->with('success', 'Anda berhasil login');
                }
            }else{
                Auth::logout();
                return redirect()->route('auth')->with('Harap verifikasi akun anda terlebih dahulu!');
            }
        }else{
            return redirect()->route('auth')->withErrors('E-mail atau password salah');
        }
    }

    function create()
    {
        return view('auth_page.register');
    }

    function register(Request $request)
    {
        $str = Str::random(100);

        $request->validate([
            'full_name' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5',
            'picture' => 'required|image|file',
        ], [
            'full_name.required' => 'Nama lengkap harus diisi',
            'full_name.min' => 'Nama lengkap harus minimal 5 karakter',
            'email.required' => 'E-mail harus diisi',
            'email.unique' => 'E-mail telah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter',
            'picture.required' => 'Gambar harus diupload',
            'picture.image' => 'Gambar yang diupload harus berupa image',
            'picture.file' => 'Gambar yang diupload harus berupa file',
        ]);

        $picture_file = $request->file('picture');
        $picture_ekstensi = $picture_file->extension();
        $nama_picture = date('ymdhis') . "." . $picture_ekstensi;
        $picture_file->move(public_path('picture/accounts'), $nama_picture);

        $inforegister = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => $request->password,
            'picture' => $nama_picture,
            'verify_key' => $str
        ];

        User::create($inforegister);

        $details = [
            'nama' => $inforegister['full_name'],
            'role' => 'user',
            'date_time' => date('Y-m-d H:i:s'),
            'website' => 'Techno Indie',
            'url' => 'http://'. request()->getHttpHost() . "/" ."verify/". $inforegister['verify_key'],
        ];

        Mail::to($inforegister['email'])->send(new AuthMail($details));
        return redirect()->route('auth')->with('success', 'Link verifikasi telah dikirim ke e-mail anda. Cek e-mail untuk melakukan verifikasi');
    }

    function verify($verify_key){
        $keyCheck = User::Select('verify_key')
        ->where('verify_key', $verify_key)
        ->exists();

        if($keyCheck){
            $user = User::where('verify_key', $verify_key)->update(['email_verified_at' => date('Y-m-d H:i:s')]);

            return redirect()->route('auth')->with('success', 'Verifikasi berhasil! Akun anda telah aktif');
        }else{
            return redirect()->route('auth')->withErrors('Keys tidak valid!')->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth')->with('success', 'Anda berhasil logout');
    }
}
