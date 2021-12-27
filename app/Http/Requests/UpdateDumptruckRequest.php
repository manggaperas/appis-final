<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class UpdateDumptruckRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('dumptruck-update', 'dumptruck-self-update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bulan' => 'required|in:januari,februari,maret,april,mei,juni,juli,agustus,september,oktober,november,desember',
            'tahun' => 'required|numeric',
            'volume' => 'required|numeric',
            'jarak' => 'required|numeric',
            'kecepatan' => 'required|numeric',
            'waktu_tunggu' => 'required|numeric',
            'waktu_bongkar' => 'required|numeric',
            'waktu_istirahat' => 'required|numeric',
            'waktu_shift' => 'required|numeric',
            'sampah' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'bulan.required' => 'Pilih Bulan Data!',
            'tahun.required' => 'Pilih Tahun Data!',
            'volume.required' => 'Pilih Volume Dumptruck!',
            'jarak.required' => 'Masukkan Jarak Menuju TPA!',
            'kecepatan.required' => 'Masukkan Kecepatan Dumptruck!',
            'waktu_tunggu.required' => 'Masukkan Waktu Tunggu Dumptruck!',
            'waktu_bongkar.required' => 'Masukkan Waktu Bongkar Tossa!',
            'waktu_istirahat.required' => 'Masukkan Waktu Istirahat Pekerja!',
            'waktu_shift.required' => 'Masukkan Jam Kerja Pekerja!',
            'sampah.required' => 'Masukkan Jumlah Sampah Terangkut!',

            'bulan.numeric' => 'Tolong Hanya Masukkan Angka!',
            'tahun.numeric' => 'Tolong Hanya Masukkan Angka!',
            'volume.numeric' => 'Tolong Hanya Masukkan Angka!',
            'jarak.numeric' => 'Tolong Hanya Masukkan Angka!',
            'kecepatan.numeric' => 'Tolong Hanya Masukkan Angka!',
            'waktu_tunggu.numeric' => 'Tolong Hanya Masukkan Angka!',
            'waktu_bongkar.numeric' => 'Tolong Hanya Masukkan Angka!',
            'waktu_istirahat.numeric' => 'Tolong Hanya Masukkan Angka!',
            'waktu_shift.numeric' => 'Tolong Hanya Masukkan Angka!',
            'sampah.numeric' => 'Tolong Hanya Masukkan Angka!',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => 'Data Dumptruck berhasil ditambahkan!',
            'message'   => 'Gagal tambah Dumptruck',
            'data'      => $validator->errors()
        ]));
    }
}
