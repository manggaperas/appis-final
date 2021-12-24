<?php

namespace App\Http\Controllers;

use App\Models\Dumptruck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DumptruckController extends Controller
{

    public function index(Request $request){
        // Data yang ditampilin pada tabel Dumptruck
        $bulan = $request->input('bulan', 'januari');
        $tahun = $request->input('tahun', date('Y'));
        $volume = $request->input('volume','8' );

        $data = Dumptruck::whereBulan($bulan)->whereTahun($tahun)->whereVolume($volume)->paginate();
        $headings = collect([
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'volume'=> 'Kapasitas Dumptruck',
            'waktu_perjalanan' => 'Waktu Total Pengangkutan',
            'ritasi' => 'Ritasi',
            'jumlah_dumptruck' => 'Kebutuhan Dumptruck',
            'jumlah_pekerja' => 'Jumlah Tenaga Kerja'
        ]);

        return view('dumptruck', compact('data', 'headings'));
    }
    
    // Method penyimpanan data ke database dumptrucks
    public function store (Request $request) {
        $this->validate($request, [
            'bulan' => 'required|in:januari,februari,maret,april,mei,juni,juli,agustus,september,oktober,november,desember',
            'tahun' => 'required|numeric',
            'volume' => 'required|numeric',
            'jarak' => 'required|numeric',
            'kecepatan' => 'required|numeric',
            'waktu_tempuh' => 'required|numeric',
            'waktu_tunggu' => 'required|numeric',
            'waktu_bongkar' => 'required|numeric',
            'bongkar_tossa' => 'required|numeric',
            'total_waktu_tossa' => 'required|numeric',
            'waktu_istirahat' => 'required|numeric',
            'waktu_angkut' => 'required|numeric',
            'ritasi' => 'required|numeric',
            'sampah' => 'required|numeric',
            'jumlah_dumptruck' => 'required|numeric',
            'jumlah_pekerja' => 'required|numeric'
        ]);
        //kalo manual
        $dumptruck = Dumptruck::create([
            'jarak' => $request->input('jarak'),
            'kecepatan' => $request->input('kecepatan'),
            'ritasi' => $request->input('ritasi'),
            'waktu_tempuh' => $request->input('waktu_tempuh'),
            'waktu_tunggu' => $request->input('waktu_tunggu'),
            'waktu_bongkar' => $request->input('waktu_bongkar'),
            'bongkar_tossa' => $request->input('bongkar_tossa'),
            'total_waktu_tossa' => $request->input('total_waktu_tossa'),
            'waktu_istirahat' => $request->input('waktu_istirahat'),
            'waktu_angkut' => $request->input('waktu_angkut'),
            'sampah' => $request->input('sampah'),
            'jumlah_dumptruck' => $request->input('jumlah_dumptruck'),
            'jumlah_pekerja' => $request->input('jumlah_pekerja'),
            'volume' => $request->input('volume'),
            'bulan' => $request->input('bulan'),
            'tahun' => $request->input('tahun')
        ]);

        if (!$dumptruck->id) {
            return redirect()->back()->withInput()->with('alert_error', 'Gagal menambahkan data Dumptruck');
        }

        return redirect()->route('dumptruck')->with('alert_success', 'Data Dumptruck berhasil ditambahkan!');
    }
    
    public function create(){

        return view('create-dumptruck');
    }
    
}