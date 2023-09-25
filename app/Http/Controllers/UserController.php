<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Datauser;
use App\Models\Pilihlowongan;
use App\Models\Filedokumen;
use App\Models\Jadwalseleksi;
use App\Models\Hasilseleksi;
use App\Models\Lowongan;
use App\Models\kategorilowongan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function uploaddatauser(Request $request, $id)
    {
        // $data_id = $request->input('id');
        // Validasi request jika diperlukan
        $request->validate([
          //  'file' => 'required|file|mimes:jpeg,png,pdf', // Sesuaikan dengan jenis file yang diperbolehkan
            'nama_lengkap' => 'required|string',
            'no_ktp' => 'required|integer',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'status_pernikahan' => 'required|string',
            'alamat' => 'required|string',
            'telpon' => 'required|string|max:13',
            'pendidikan_terakhir' => 'required|string',
            'agama' => 'required|string',
            'jurusan' => 'required|string',
            'sekolah' => 'required|string',
            'email' => 'required|string',
            'cv' => 'required|file|mimes:jpeg,png,pdf',
            'kk' => 'required|file|mimes:jpeg,png',
            'npwp' => 'required|file|mimes:jpeg,png',
            'bpjs' => 'required|file|mimes:jpeg,png',
            'skck' => 'required|file|mimes:jpeg,png',
            'surat_sehat' => 'required|file|mimes:jpeg,png',
            'foto' => 'required|file|mimes:jpeg,png',
            'ijazah' => 'required|file|mimes:jpeg,png',
            'sertifikat' => 'required|file|mimes:jpeg,png',
        ]);

        // Simpan file di direktori penyimpanan
        // $file = $request->file('file');
        // $fileName = $file->getClientOriginalName();
        // $file->storeAs('public', $fileName);

        // Simpan data ke dalam database atau lakukan operasi lainnya sesuai kebutuhan
        $nama = $request->input('nama_lengkap');
        $noktp = $request->input('no_ktp');
        $tempatlahir = $request->input('tempat_lahir');
        $tanggallahir = $request->input('tanggal_lahir');
        //$formattanggal = Carbon::createFromFormat('dd-MM-yyyy', $tanggallahir)->format('yyyy-dd-MM');
        $jeniskelamin = $request->input('jenis_kelamin');
        $statuspernikahan = $request->input('status_pernikahan');
        $alamat = $request->input('alamat');
        $notelpon = $request->input('telpon');
        $pendidikanterakhir = $request->input('pendidikan_terakhir');
        $agama = $request->input('agama');
        $jurusan = $request->input('jurusan');
        $sekolah = $request->input('sekolah');
        $email = $request->input('email');
        // Misalnya, menyimpan data ke dalam tabel
      $data =  Datauser::create([
            'nama_lengkap' => $nama,
            'no_ktp' => $noktp,
            'tempat_lahir' => $tempatlahir,
            'tanggal_lahir' => $tanggallahir,
            'jenis_kelamin' => $jeniskelamin,
            'status_pernikahan' => $statuspernikahan,
            'alamat' => $alamat,
            'telpon' => $notelpon,
            'pendidikan_terakhir' => $pendidikanterakhir,
            'agama' => $agama,
            'jurusan' => $jurusan,
            'sekolah' => $sekolah,
            'email' => $email,
            // 'path' => $fileName,
        ]);
       
    $filecv = $request->file('cv');
    $fileNamecv = $filecv->getClientOriginalName();
    $filecv->storeAs('public/img', $fileNamecv);
    $filektp = $request->file('cv');
    $fileNamektp = $filektp->getClientOriginalName();
    $filektp->storeAs('public/img', $fileNamektp);
    $filektp = $request->file('ktp');
    $fileNamektp = $filektp->getClientOriginalName();
    $filektp->storeAs('public/img', $fileNamektp);
    $filekk = $request->file('kk');
    $fileNamekk = $filektp->getClientOriginalName();
    $filekk->storeAs('public/img', $fileNamekk);
    $filenpwp = $request->file('npwp');
    $fileNamenpwp = $filenpwp->getClientOriginalName();
    $filenpwp->storeAs('public/img', $fileNamenpwp);
    $filebpjs = $request->file('bpjs');
    $fileNamebpjs = $filebpjs->getClientOriginalName();
    $filebpjs->storeAs('public/img', $fileNamebpjs);
    $fileskck = $request->file('skck');
    $fileNameskck = $fileskck->getClientOriginalName();
    $fileskck->storeAs('public/img', $fileNameskck);
    $filesuratsehat = $request->file('surat_sehat');
    $fileNamesuratsehat = $filesuratsehat->getClientOriginalName();
    $filesuratsehat->storeAs('public/img', $fileNamesuratsehat);
    $filefoto = $request->file('foto');
    $fileNamefoto = $filefoto->getClientOriginalName();
    $filefoto->storeAs('public/img', $fileNamefoto);
    $fileijazah = $request->file('ijazah');
    $fileNameijazah = $fileijazah->getClientOriginalName();
    $fileijazah->storeAs('public/img', $fileNameijazah);
    $filesertifikat = $request->file('sertifikat');
    $fileNamesertifikat = $filesertifikat->getClientOriginalName();
    $filesertifikat->storeAs('public/img', $fileNamesertifikat);
   Filedokumen::create([
        'cv' => $fileNamecv,
        'ktp' => $fileNamektp,
        'kk' => $fileNamekk,
        'npwp' => $fileNamenpwp,
        'bpjs' => $fileNamebpjs,
        'skck' => $fileNameskck,
        'surat_sehat' => $fileNamesuratsehat,
        'foto' => $fileNamefoto,
        'ijazah' => $fileNameijazah,
        'sertifikat' => $fileNamesertifikat,
        'datauser_id' => $data->id,
    ]);
    // $id_lowongan = Lowongan::find($id);
    Pilihlowongan::create([
        'status' => 'Seleksi',
        'datauser_id' => $data->id,
        'lowongan_id' => $id,
    ]);
        //return view('index')->with('success', 'Data berhasil diunggah.');
      return redirect('/')->with('success', 'Data berhasil diunggah.');
        //return response()->json(['message'=>'Berhasil di simpan data Lowongan'], 200);  
    }
    // public  function pilihlowonganbyid(Request $request, $id){
    //     $data = Lowongan::where('id', $id)->get();
    //     //   return view('lowongan', compact('data'));
    //     return response()->json(['message'=>'Lihat data Lowongan','data' => $data], 200);  
    // }
    public function pilihlowonganbyid($id)
    {
        $id = Lowongan::find($id);
        // $data = DB::table('lowongan')
        // ->where('id','=', $id)
        // ->get();
        return view('lowongan.form', ['id'=> $id]);
    }
    public function lowonganbyid(Request $request, $id){
        // $data = Lowongan::where('kategori_lowongan', $id)->get();
        
    //    $idkategori = kategorilowongan::find($id);
        $data = DB::table('lowongan')
        ->where('kategori_lowongan','=', $id)
        ->get();
       return view('lowongan.home',['data'=> $data]);
    //  return response()->json(['message'=>'Lihat data Lowongan','data' => $data], 200);  
    }
    public function lihatkategori(Request $request){
        // $data = DB::table('lowongan')
        // ->leftJoin('kategorilowongan', 'lowongan.id', '=', 'kategorilowongan.id')
        // ->select('lowongan.deskripsi_lowongan','lowongan.judul_lowongan','lowongan.tanggal_akhir','lowongan.penempatan','kategorilowongan.nama_kategori','lowongan.kategori_lowongan','lowongan.id')
        // ->get();
        $data = kategorilowongan::all();
        $datas = Lowongan::all();
       // return response()->json(['message'=>'Lihat data kategori Lowongan','data' => $data], 200);  
        return view('index',  ['data' => $data, 'datas' => $datas]);
    }
    // public function lihatseleksi(){
    //     $data = Hasilseleksi::all();
    //     // return response()->json(['message'=>'Lihat data kategori Lowongan','data' => $data], 200);  
    //      return view('seleksi',  ['data' => $data]);
    // }
    public function lihatjadwal(){
        $data = DB::table('jadwalseleksi')
        ->leftJoin('pilihlowongan', 'pilihlowongan.id', '=', 'jadwalseleksi.pilihlowongan_id')
        ->leftJoin('lowongan', 'pilihlowongan.id', '=', 'lowongan.id')
       ->leftJoin('datauser', 'pilihlowongan.datauser_id', '=', 'datauser.id')
        ->select('jadwalseleksi.id','jadwalseleksi.nama_pengumuman','jadwalseleksi.deskripsi','jadwalseleksi.tanggal_seleksi','jadwalseleksi.lokasi_seleksi','lowongan.judul_lowongan','datauser.nama_lengkap')
        ->where('pilihlowongan.status', '=', 'Seleksi')
        ->get();    
        // return response()->json(['message'=>'Lihat data kategori Lowongan','data' => $data], 200);  
         return view('jadwal',  ['data' => $data]);
    }
}
