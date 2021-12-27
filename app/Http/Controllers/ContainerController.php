<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContainerRequest;
use App\Http\Requests\UpdateContainerRequest;
use App\Models\Container;
use Exception;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    public function index(Request $request)
    {
        // Data yang ditampilin pada tabel Dumptruck
        $bulan = $request->input('bulan', 'januari');
        $tahun = $request->input('tahun', date('Y'));

        $data = Container::whereBulan($bulan)->whereTahun($tahun)->paginate();
        // dd($data);

        $headings = collect([
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'jenis_container' => 'Jenis Container',
            'daya_tampung' => 'Daya Tampung',
            'sampah' => 'Sampah',
        ]);

        return view('container', compact('data', 'headings'));
    }

    // Method penyimpanan data ke database dumptrucks
    public function store(CreateContainerRequest $request)
    {
        $newContainer = new Container();
        $newContainer['bulan'] = $request->bulan;
        $newContainer['tahun'] = $request->tahun;
        $newContainer['jenis_container'] = $request->jenis_container;
        $newContainer['daya_tampung'] = $request->daya_tampung;
        $newContainer['kebutuhan_container'] = $request->kebutuhan_container;
        $newContainer['sampah'] = $request->sampah;

        $newContainer->save();

        if ($newContainer->save()) {
            return redirect()->route('container')->with('alert_success', 'Data container berhasil di tambah');
        }
    }

    public function update(Request $request, $id)
    {
        $datas = Container::findOrFail($id);
        $datas['bulan'] = $request->bulan;
        $datas['tahun'] = $request->tahun;
        $datas['jenis_container'] = $request->jenis_container;
        $datas['daya_tampung'] = $request->daya_tampung;
        $datas['kebutuhan_container'] = $request->kebutuhan_container;
        $datas['sampah'] = $request->sampah;

        $datas->update();

        if ($datas->update()) {
            return redirect()->route('container')->with('alert_success', 'Data container berhasil di update');
        }
    }

    public function create()
    {
        return view('create_container');
    }

    public function edit($id)
    {
        $container = Container::findOrFail($id);
        return view('edit-container', ['container' => $container]);
    }

    public function delete($id)
    {
        Container::findOrFail($id)->delete();
        return redirect()->route('container')->with('alert_success', 'Data container berhasil di hapus');
    }
}
