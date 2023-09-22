<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Lowongan;
use App\Models\pilihlowongan;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class AdminController extends Controller
{
    public function uploadlowongan(Request $request){
         // Validasi data yang diterima dari formulir
         $request->validate([
            'judul_lowongan' => 'required|string',
            'deskripsi_lowongan' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'penempatan' => 'required|string',
            'kategori_lowongan' => 'required',
        ]);

        // Simpan data ke dalam database
        $lowongan = new Lowongan([
            'judul_lowongan' => $request->input('judul_lowongan'),
            'deskripsi_lowongan' => $request->input('deskripsi_lowongan'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_akhir' => $request->input('tanggal_akhir'),
            'penempatan' => $request->input('penempatan'),
            'kategori_lowongan' => $request->input('kategori_lowongan'),
        ]);
        $lowongan->save();
        //return redirect('/lowongan')->with('success', 'Lowongan berhasil ditambahkan');
        return response()->json(['message'=>'data berhasil disimpan','data' => $lowongan], 200);
    }
    public function lihatlowongan(Request $request) {
        $data = Lowongan::all();
       // return view('lowongan', compact('data'));
        return response()->json(['message'=>'Lihat data Lowongan','data' => $data], 200);
    }

    public function editlowongan($id){
        $data = Lowongan::find($id);
        //return view('data.edit', compact('data'));
        return response()->json(['message'=>'berhasil menampilkan data','data' => $data], 200);
    }
    public function proseseditlowongan(Request $request, $id){
        $request->validate([
            'judul_lowongan' => 'string',
            'deskripsi_lowongan' => 'string',
            'tanggal_mulai' => 'date',
            'tanggal_akhir' => 'date',
            'penempatan' => 'string',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Cari data yang akan diperbarui berdasarkan ID
        $data = Lowongan::find($id);

        // Update data berdasarkan input formulir
        $data->judul_lowongan = $request->input('judul_lowongan');
        $data->deskripsi_lowongan = $request->input('deskripsi_lowongan');
        $data->tanggal_mulai = $request->input('tanggal_mulai');
        $data->tanggal_akhir = $request->input('tanggal_akhir');
        $data->penempatan = $request->input('penempatan');
        $data->kategori_lowongan = $request->input('kategori_lowongan');
        // tambahkan pembaruan lainnya sesuai kebutuhan

        // Simpan data yang diperbarui
        $data->save();
        //return redirect('/')->with('success', 'Data berhasil diperbarui');
        return response()->json(['message'=>'Update data Lowongan','data' => $data], 200); 
    }
    public function deletelowongan(Request $request, $id){

    }
    public function lihatuserlowongan(Request $request){
        $data = DB::table('pilihlowongan')
        ->leftJoin('datauser', 'pilihlowongan.id', '=', 'datauser.id')
        ->leftJoin('lowongan', 'pilihlowongan.id', '=', 'lowongan.id')
        ->select('datauser.nama_lengkap','lowongan.judul_lowongan','pilihlowongan.status')
        ->get();
        //return view('detaillowongan', compact('data'));
        return response()->json(['message'=>'Lihat data user Lowongan','data' => $data], 200);        
    }
    public function detailuserlowongan(Request $request, $id){
        $data = DB::table('pilihlowongan')
        ->leftJoin('datauser', 'pilihlowongan.id', '=', 'datauser.id')
        // ->leftJoin('lowongan', 'pilihlowongan.id', '=', 'lowongan.id')
        ->select('datauser.nama_lengkap','datauser.no_ktp','datauser.tempat_lahir','datauser.tanggal_lahir','datauser.jenis_kelamin','datauser.status_pernikahan','datauser.alamat','datauser.telpon','datauser.pendidikan_terakhir')
        ->where('pilihlowongan.id', '=', $id)
        ->get();
        return response()->json(['message'=>'berhasil menampilkan data','data' => $data], 200);
    }
    public function editstatus($id){
        $data = pilihlowongan::find($id);
        //return view('data.edit', compact('data'));
        return response()->json(['message'=>'berhasil menampilkan data','data' => $data], 200);
    }
    public function prosesstatus(Request $request, $id){
        $request->validate([
            'status' => 'string',
        ]);

        // Cari data yang akan diperbarui berdasarkan ID
        $data = pilihlowongan::find($id);

        // Update data berdasarkan input formulir
        $data->status = $request->input('status');
        // tambahkan pembaruan lainnya sesuai kebutuhan

        // Simpan data yang diperbarui
        $data->save();
        //return redirect('/')->with('success', 'Data berhasil diperbarui');
        return response()->json(['message'=>'Update data status Lowongan','data' => $data], 200);
    }
    public function lihatlogin()
{
    return view('login');
}
    public function login(Request $request){
          // Validasi data login
          $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan login
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, arahkan ke halaman yang sesuai
            // return redirect('/dashboard');
            return response()->json(['message'=>'Berhasil Login'], 200);
        }

        // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
        // return redirect()->route('login')
        //     ->with('error', 'Email atau password salah. Silakan coba lagi.');
        return response()->json(['message'=>'Gagal Login'], 400);
    }
    public function lihatregister()
{
    return view('register');
}
    public function register(Request $request)
{
    // Validasi data registrasi
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
    ]);

    // Buat pengguna baru
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Otentikasi pengguna setelah registrasi
    // auth()->login($user);

    // Redirect ke halaman setelah registrasi berhasil
    // return redirect(RouteServiceProvider::HOME);
    return response()->json(['message'=>'Berhasil Registrasi','data' => $user], 200);
}
}
