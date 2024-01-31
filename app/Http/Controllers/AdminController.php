<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Lowongan;
use App\Models\pilihlowongan;
use App\Models\jadwalseleksi;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class AdminController extends Controller
{
    public function tambahlowongan(){
        $data = DB::table('kategorilowongan')->get();
        return view('admin/tambahlowongan', ['data'=> $data]);
    }
    public function uploadlowongan(Request $request){
         // Validasi data yang diterima dari formulir
         $request->validate([
            'judul_lowongan' => 'required|string',
            'deskripsi_lowongan' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date',
            'penempatan' => 'required|string',
            'kategori_lowongan' => 'required',
            'posisi_jabatan' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'pendidikan' => 'required|string',
            'jurusan' => 'required|string',
            'syarat_dokumen' => 'required|string',
            'keterangan' => 'required|string',
            'file' => 'required',
        ]);
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->storeAs('public/img', $fileName);
        // Simpan data ke dalam database
        $lowongan = new Lowongan([
            'judul_lowongan' => $request->input('judul_lowongan'),
            'deskripsi_lowongan' => $request->input('deskripsi_lowongan'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_akhir' => $request->input('tanggal_akhir'),
            'penempatan' => $request->input('penempatan'),
            // 'kategori_lowongan' => $request->input('kategori_lowongan'),
            'posisi_jabatan' => $request->input('posisi_jabatan'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'pendidikan' => $request->input('pendidikan'),
            'jurusan' => $request->input('jurusan'),
            'syarat_dokumen' => $request->input('syarat_dokumen'),
            'keterangan' => $request->input('keterangan'),
            'file' => $fileName,
            'kategori_lowongan' => $request->input('kategori_lowongan'),
        ]);
        $lowongan->save();
        return redirect('admin/lowongan')->with('success', 'Lowongan berhasil ditambahkan');
       // return response()->json(['message'=>'data berhasil disimpan','data' => $lowongan], 200);
    }
    public function lihatlowongan(Request $request) {
        $data = DB::table('lowongan')
        ->leftJoin('kategorilowongan', 'lowongan.kategori_lowongan', '=', 'kategorilowongan.id')
        ->select('lowongan.id','lowongan.deskripsi_lowongan','lowongan.judul_lowongan','lowongan.tanggal_mulai','lowongan.tanggal_akhir','lowongan.penempatan','kategorilowongan.nama_kategori')
        ->get();
       return view('admin/datalowongan', ['data' => $data]);
        //return response()->json(['message'=>'Lihat data Lowongan','data' => $data], 200);
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
        $post = Lowongan::find($id);
        if ($post) {
            $post->delete();
            return redirect()->route('admin/datalowongan')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->route('admin/datalowongan')->with('error', 'Data tidak ditemukan.');
        }
    }
    public function lihatuserlowongan(Request $request){
        $data = DB::table('pilihlowongan')
        ->leftJoin('datauser', 'pilihlowongan.datauser_id', '=', 'datauser.id')
        ->leftJoin('lowongan', 'pilihlowongan.lowongan_id', '=', 'lowongan.id')
        ->select('datauser.nama_lengkap','lowongan.judul_lowongan','pilihlowongan.status','pilihlowongan.created_at','pilihlowongan.id')
        ->get();
        return view('admin/datapelamar', ['data' => $data]);
       // return response()->json(['message'=>'Lihat data user Lowongan','data' => $data], 200);        
    }
    public function detailuserlowongan(Request $request, $id){
        $data = DB::table('pilihlowongan')
        ->leftJoin('datauser', 'pilihlowongan.datauser_id', '=', 'datauser.id')
        // ->leftJoin('lowongan', 'pilihlowongan.id', '=', 'lowongan.id')
        ->select('datauser.nama_lengkap','datauser.no_ktp','datauser.tempat_lahir','datauser.tanggal_lahir','datauser.jenis_kelamin','datauser.status_pernikahan','datauser.alamat','datauser.telpon','datauser.pendidikan_terakhir')
        ->where('pilihlowongan.id', '=', $id)
        ->get();
        return view('admin/datacvpelamar', ['data' => $data]);
        // return response()->json(['message'=>'berhasil menampilkan data','data' => $data], 200);
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
         return redirect('/admin');
            // return response()->json(['message'=>'Berhasil Login'], 200);
        }

        // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
        return redirect('/login');
        // return response()->json(['message'=>'Gagal Login'], 400);
    }
    public function logout(){
        Auth::logout();
    return redirect('/login');
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
    auth()->login($user);

    // Redirect ke halaman setelah registrasi berhasil
    return redirect('/login');
    return response()->json(['message'=>'Berhasil Registrasi','data' => $user], 200);
}
public function tambahpengumuman(){
    $data = DB::table('pilihlowongan')
        ->leftJoin('datauser', 'pilihlowongan.datauser_id', '=', 'datauser.id')
        ->leftJoin('lowongan', 'pilihlowongan.lowongan_id', '=', 'lowongan.id')
        ->select('datauser.nama_lengkap','datauser.no_ktp','datauser.tempat_lahir','datauser.tanggal_lahir','datauser.jenis_kelamin','datauser.status_pernikahan','datauser.alamat','datauser.telpon','datauser.pendidikan_terakhir')
        // ->where('pilihlowongan.id', '=', $id)
        ->get();
    return view('admin/tambahpengumuman', ['data'=> $data]);
}
public function uploadpengumuman(Request $request){
    // Validasi data yang diterima dari formulir
    $request->validate([
       'judul_lowongan' => 'required|string',
       'deskripsi_lowongan' => 'required|string',
       'tanggal_mulai' => 'required|date',
       'tanggal_akhir' => 'required|date',
       'penempatan' => 'required|string',
       'kategori_lowongan' => 'required',
       'posisi_jabatan' => 'required|string',
       'jenis_kelamin' => 'required|string',
       'pendidikan' => 'required|string',
       'jurusan' => 'required|string',
       'syarat_dokumen' => 'required|string',
       'keterangan' => 'required|string',
       'file' => 'required|string',
       'kategori_lowongan' => 'required',
   ]);
   $file = $request->file('file');
   $fileName = $file->getClientOriginalName();
   $file->storeAs('public/img', $fileName);
   // Simpan data ke dalam database
   $lowongan = new Lowongan([
       'judul_lowongan' => $request->input('judul_lowongan'),
       'deskripsi_lowongan' => $request->input('deskripsi_lowongan'),
       'tanggal_mulai' => $request->input('tanggal_mulai'),
       'tanggal_akhir' => $request->input('tanggal_akhir'),
       'penempatan' => $request->input('penempatan'),
       'kategori_lowongan' => $request->input('kategori_lowongan'),
       'posisi_jabatan' => $request->input('posisi_jabatan'),
       'jenis_kelamin' => $request->input('jenis_kelamin'),
       'pendidikan' => $request->input('pendidikan'),
       'jurusan' => $request->input('jurusan'),
       'syarat_dokumen' => $request->input('syarat_dokumen'),
       'keterangan' => $request->input('keterangan'),
       'file' => $fileName,
       'kategori_lowongan' => $request->input('kategori_lowongan'),
   ]);
   $lowongan->save();
   return redirect('admin/datalowongan')->with('success', 'Lowongan berhasil ditambahkan');
  // return response()->json(['message'=>'data berhasil disimpan','data' => $lowongan], 200);
}
public function lihatpengumuman() {
    $data = DB::table('pilihlowongan')
    ->leftJoin('jadwalseleksi', 'pilihlowongan.id', '=', 'jadwalseleksi.pilihlowongan_id')
    ->leftJoin('lowongan', 'pilihlowongan.id', '=', 'lowongan.id')
   // ->leftJoin('pilihlowongan', 'pilihlowongan.lowongan_id', '=', 'lowongan.id')
    ->select('jadwalseleksi.id','jadwalseleksi.nama_pengumuman','jadwalseleksi.deskripsi','jadwalseleksi.tanggal_seleksi','jadwalseleksi.lokasi_seleksi','lowongan.judul_lowongan','jadwalseleksi.file')
    ->where('pilihlowongan.status', '=', 'Seleksi')
    ->get();  
    return view('admin/pengumuman', ['data' => $data]);
}
public function deletepengumuman(Request $request, $id){
    $post = jadwalseleksi::find($id);
    if ($post) {
        $post->delete();
        return redirect()->route('admin/pengumuman')->with('success', 'Data berhasil dihapus.');
    } else {
        return redirect()->route('admin/pengumuman')->with('error', 'Data tidak ditemukan.');
    }
}
}
