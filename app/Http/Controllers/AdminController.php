<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function spp(){
        $data = Spp::all();
        return view('admin.spp.spp', compact('data'));
    }
    public function formspp(){
        return view('admin.spp.tambahspp');
    }
    public function addspp(Request $request){
        $data = Spp::create([
            'id_spp'=>$request->id_spp,
            'tahun'=>$request->tahun,
            'nominal'=>$request->nominal,
        ]);
        return redirect()->route('spp');
    }
    public function showspp($id){
        $data = Spp::find($id);
        $data = Spp::findOrFail($id);
        return view('admin.spp.editspp');
    }
    public function updatespp(Request $request, $id)
    {
        $data = Spp::find($id);
        $data->update([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);
        return redirect()->route('kelas')->with('success', 'Data berhasil di edit');
    }
////////////////////////  FORM KELAS  //////////////////////////
    public function kelas(){
        $data = Kelas::all();
        return view('admin.kelas.kelas', compact('data'));
    }
    public function formkelas(){
        return view('admin.kelas.tambahkelas');
    }
    public function addkelas(Request $request){
        $data = Kelas::create([
            'nama_kelas'=>$request->nama_kelas,
            'kompetensi_keahlian'=>$request->kompetensi_keahlian,
        ]);
        return redirect()->route('kelas')->with('success', 'Data berhasil di tambah');
    }

    public function showkelas($id){
        $data = Kelas::find($id);
        $data = Kelas::findOrFail($id);
        return view('admin.kelas.editkelas', compact('data'));
    }

    public function updatekelas(Request $request, $id){
        $data = Kelas::find($id);
        $data->update([
            'nama_kelas'=>$request->nama_kelas,
            'kompetensi_keahlian'=>$request->kompetensi_keahlian,
        ]);
        return redirect()->route('kelas')->with('success', 'Data berhasil di edit');
    }
    public function deletekelas($id)
    {
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('olimpiade')->with('success', 'Data Berhasil Di Hapus');
    }
/////////////////////////FORM SISWA/////////////////////////
    public function siswa(){
        $siswa = Siswa::with('kelas', 'spp');
        $data = Siswa::all();
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view('admin.siswa.siswa', compact('data', 'siswa', 'kelas', 'spp'));
    }
    public function formsiswa(){
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view('admin.siswa.tambahsiswa', compact('kelas', 'spp'));
    }
    public function addsiswa(Request $request){
        $data = Siswa::create([
            'nisn'=>$request->nisn,
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'id_kelas'=>$request->id_kelas,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'id_spp'=>$request->id_spp,
        ]);
        return redirect()->route('siswa');
    }
}