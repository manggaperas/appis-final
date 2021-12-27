<?php

namespace App\Http\Controllers;

use App\Models\Dumptruck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DumptruckController extends Controller
{

    public function index(Request $request)
    {
        // Data yang ditampilin pada tabel Dumptruck
        $bulan = $request->input('bulan', 'januari');
        $tahun = $request->input('tahun', date('Y'));
        $volume = $request->input('volume', '8');

        $data = Dumptruck::whereBulan($bulan)->whereTahun($tahun)->whereVolume($volume)->paginate();
        $headings = collect([
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'volume' => 'Kapasitas Dumptruck',
            'waktu_angkut' => 'Waktu Total Pengangkutan',
            'ritasi' => 'Ritasi',
            'jumlah_dumptruck' => 'Kebutuhan Dumptruck',
            'jumlah_pekerja' => 'Jumlah Tenaga Kerja'
        ]);

        return view('dumptruck', compact('data', 'headings'));
    }

    // Method penyimpanan data ke database dumptrucks
    public function store(Request $request)
    {
        $newdumptruck = new Dumptruck;
        $newdumptruck['bulan'] = $request->bulan;
        $newdumptruck['tahun'] = $request->tahun;
        $newdumptruck['volume'] = $request->volume;
        $newdumptruck['jarak'] = $request->jarak;
        $newdumptruck['kecepatan'] = $request->kecepatan;
        $newdumptruck['waktu_tunggu'] = $request->waktu_tunggu;
        $newdumptruck['waktu_bongkar'] = $request->waktu_bongkar;
        $newdumptruck['waktu_istirahat'] = $request->waktu_istirahat;
        $newdumptruck['waktu_shift'] = $request->waktu_shift;
        $newdumptruck['sampah'] = $request->sampah;

        $newdumptruck->save();

        if (!$newdumptruck->id) {
            return redirect()->back()->withInput()->with('alert_error', 'Gagal menambahkan data Dumptruck');
        }

        return redirect()->route('dumptruck')->with('alert_success', 'Data Dumptruck berhasil ditambahkan!');
    }

    public function create()
    {

        return view('create-dumptruck');
    }
    
    public function edit($id)
    {
        $dumptruck = Dumptruck::findOrFail($id);
        return view('edit-dumptruck', ['dumptruck' => $dumptruck]);
    }

    public function update(Request $request, $id) {
        $newdumptruck = Dumptruck::findOrFail($id);
        $newdumptruck['bulan'] = $request->bulan;
        $newdumptruck['tahun'] = $request->tahun;
        $newdumptruck['volume'] = $request->volume;
        $newdumptruck['jarak'] = $request->jarak;
        $newdumptruck['kecepatan'] = $request->kecepatan;
        $newdumptruck['waktu_tunggu'] = $request->waktu_tunggu;
        $newdumptruck['waktu_bongkar'] = $request->waktu_bongkar;
        $newdumptruck['waktu_istirahat'] = $request->waktu_istirahat;
        $newdumptruck['waktu_shift'] = $request->waktu_shift;
        $newdumptruck['sampah'] = $request->sampah;
        $newdumptruck->update();

        if (!$newdumptruck->update()) {
            return redirect()->back()->withInput()->with('alert_error', 'Gagal Ubah Data Armroll');
        }

        return redirect()->route('armroll')->with('alert_success', 'Data Armroll Berhasil Diubah!');
    }

    public function delete($id)
    {
        Dumptruck::findOrFail($id)->delete();
        return redirect()->route('dumptruck')->with('alert_success', 'Data dumptruck berhasil di hapus');
    }
}
