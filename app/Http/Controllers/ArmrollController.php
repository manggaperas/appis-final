<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArmrollRequest;
use App\Http\Requests\UpdateArmrollRequest;
use App\Models\ArmRoll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArmrollController extends Controller
{
    public function index(Request $request)
    {
        // Data yang ditampilin Armroll Table
        $bulan = $request->input('bulan', 'januari');
        $tahun = $request->input('tahun', date('Y'));
        $volume = $request->input('volume', '6');

        $data = ArmRoll::whereBulan($bulan)->whereTahun($tahun)->whereVolume($volume)->paginate();
        $headings = collect([
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'volume' => 'Kapasitas Armroll',
            'jumlah_kontainer' => 'Kebutuhan Kontainer',
            'jumlah_armroll' => 'Kebutuhan Armroll',
            'jumlah_pekerja' => 'Jumlah Tenaga Kerja',
            'ritasi' => 'Ritasi',
            'waktu_perjalanan' => 'Waktu Total Pengangkutan',
            'user_id' => 'User'
        ]);
        return view('armroll', compact('data', 'headings'));
    }

    // Method penyimpanan data ke database armrolls
    public function store(CreateArmrollRequest $request)
    {
        $newArmroll = new ArmRoll;
        $newArmroll['jarak'] = $request->jarak;
        $newArmroll['kecepatan'] = $request->kecepatan;
        $newArmroll['istirahat'] = $request->istirahat;
        $newArmroll['muat'] = $request->muat;
        $newArmroll['bongkar'] = $request->bongkar;
        $newArmroll['sampah'] = $request->sampah;
        $newArmroll['volume'] = $request->volume;
        $newArmroll['bulan'] = $request->bulan;
        $newArmroll['tahun'] = $request->tahun;
        $newArmroll['shift'] = $request->shift;
        $newArmroll['user_id'] = $request->user()->id;


        $newArmroll->save();

        if ($newArmroll->save()) {
            return redirect()->route('armroll')->with('alert_success', 'Data armroll berhasil di tambah');
        }
    }

    public function edit($id)
    {
        $armroll = ArmRoll::findOrFail($id);
        return view('edit-armroll', ['armroll' => $armroll]);
    }

    public function update(Request $request, $id)
    {
        $newArmroll = ArmRoll::findOrFail($id);
        $newArmroll['jarak'] = $request->jarak;
        $newArmroll['kecepatan'] = $request->kecepatan;
        $newArmroll['istirahat'] = $request->istirahat;
        $newArmroll['muat'] = $request->muat;
        $newArmroll['bongkar'] = $request->bongkar;
        $newArmroll['sampah'] = $request->sampah;
        $newArmroll['volume'] = $request->volume;
        $newArmroll['bulan'] = $request->bulan;
        $newArmroll['tahun'] = $request->tahun;
        $newArmroll['shift'] = $request->shift;
        $newArmroll['user_id'] = $request->user()->id;
        $newArmroll->update();

        if (!$newArmroll->update()) {
            return redirect()->back()->withInput()->with('alert_error', 'Gagal Ubah Data Armroll');
        }

        return redirect()->route('armroll')->with('alert_success', 'Data Armroll Berhasil Diubah!');
    }

    // direction to form tambah armroll
    public function create()
    {
        return view('create_armroll');
    }

    public function delete($id)
    {
        ArmRoll::findOrFail($id)->delete();
        return redirect()->route('armroll')->with('alert_success', 'Data armroll berhasil di hapus');
    }
}
