<?php

namespace App\Http\Controllers;

use App\Models\ArmRoll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArmrollController extends Controller
{
    public function index(Request $request) {

        // Data yang ditampilin Armroll Table
        $bulan = $request->input('bulan', 'januari');
        $tahun = $request->input('tahun', date('Y'));
        $volume = $request->input('volume','6' );

        $data = ArmRoll::whereBulan($bulan)->whereTahun($tahun)->whereVolume($volume)->paginate();
        $headings = collect([
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'volume'=> 'Kapasitas Armroll',
            'jumlah_kontainer' => 'Kebutuhan Kontainer',
            'jumlah_armroll' => 'Kebutuhan Armroll',
            'jumlah_pekerja' => 'Jumlah Tenaga Kerja',
            'ritasi' => 'Ritasi',
            'waktu_perjalanan' => 'Waktu Total Pengangkutan'
        ]);
        return view('armroll', compact('data', 'headings'));
    }

    // Method penyimpanan data ke database armrolls
    public function store (Request $request) {
        $this->validate($request, [
            'kecepatan' => 'required|numeric',
            'jarak' => 'required|numeric',
            'ritasi' => 'required|numeric',
            'jumlah_armroll' => 'required|numeric',
            'istirahat' => 'required|numeric',
            'muat' => 'required|numeric',
            'bongkar' => 'required|numeric',
            'sampah' => 'required|numeric',
            'volume' => 'required|numeric',
            'bulan' => 'required|in:januari,februari,maret,april,mei,juni,juli,agustus,september,oktober,november,desember',
            'tahun' => 'required|numeric',
        ]);
        // pake scope yang td namanya add 
        // ArmRoll::add($request->validated()); 

        //kalo manual
        $armroll = ArmRoll::create([
            'jarak' => $request->input('jarak'),
            'kecepatan' => $request->input('kecepatan'),
            'ritasi' => $request->input('ritasi'),
            'jumlah_armroll' => $request->input('jumlah_armroll'),
            'istirahat' => $request->input('istirahat'),
            'muat' => $request->input('muat'),
            'bongkar' => $request->input('bongkar'),
            'sampah' => $request->input('sampah'),
            'volume' => $request->input('volume'),
            'bulan' => $request->input('bulan'),
            'tahun' => $request->input('tahun')
        ]);
        dd($armroll);

        // $data['waktu'] = ($data['jarak']/$data['kecepatan'])*60 + 20;

        // dd($data);
        // $armroll = new ArmRoll;
        // $armroll->jarak = $request->input('jarak');
        // $armroll->kecepatan = $request->input('kecepatan');
        // $armroll->ritasi = $request->input('ritasi');
        // $armroll->jumlah_armroll = $request->input('jumlah_armroll');
        // $armroll->bulan = $request->input('bulan');
        // $armroll->tahun = $request->input('tahun');
        // $armroll->waktu = ($request->input('jarak')/$request->input('kecepatan'))*60 + 20;

        // if (!$armroll->save()) {
        if (!$armroll->id) {
            return redirect()->back()->withInput()->with('alert_error', 'Gagal tambah armroll');
        }

        return redirect()->route('armroll')->with('alert_success', 'Data armroll berhasil di tambah');
    }

    public function edit($id){
        $armroll = DB::table('armrolls')->where('id', $id)->first();
        return view('edit-armroll', ['armroll'=>$armroll]);
    }

    public function update(Request $request, $id){

    }

    // direction to form tambah armroll
    public function create(){
        
        return view ('create_armroll');
    }
}
