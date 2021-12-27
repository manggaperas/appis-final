<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class CreateArmrollRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('armroll-create');
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
            // 'waktu_muat' => 'required|numeric',
            // 'waktu_bongkar' => 'required|numeric',
            // 'waktu_istirahat' => 'required|numeric',
            'kecepatan' => 'required|numeric',
            'jarak' => 'required|numeric',
            'shift' => 'required|numeric',
            // 'jumlah_sampah' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'bulan.required' => 'Pilih Bulan Data!',
            'tahun.required' => 'Pilih Tahun Data!',
            'volume.required' => 'Pilih Volume Armroll!',
            'kecepatan.required' => 'Masukkan Kecepatan Armroll!',
            'jarak.required' => 'Masukkan Jarak Menuju TPA!',
            'waktu_istirahat.required' => 'Masukkan Waktu Istirahat Pekerja!',
            'waktu_muat.required' => 'Masukkan Waktu Muat Kontainer!',
            'waktu_bongkar.required' => 'Masukkan Waktu Bongkar Kontainer!',
            'jam_kerja.required' => 'Masukkan Kecepatan Armroll!',
            'jumlah_sampah.required' => 'Masukkan Jumlah Sampah yang Diangkut!',

            'bulan.numeric' => 'Tolong Hanya Masukkan Angka!',
            'tahun.numeric' => 'Tolong Hanya Masukkan Angka!',
            'volume.numeric' => 'Tolong Hanya Masukkan Angka!',
            'kecepatan.numeric' => 'Tolong Hanya Masukkan Angka!',
            'jarak.numeric' => 'Tolong Hanya Masukkan Angka!',
            'waktu_istirahat.numeric' => 'Tolong Hanya Masukkan Angka!',
            'waktu_muat.numeric' => 'Tolong Hanya Masukkan Angka!',
            'waktu_bongkar.numeric' => 'Tolong Hanya Masukkan Angka!',
            'jam_kerja.numeric' => 'Tolong Hanya Masukkan Angka!',
            'jumlah_sampah.numeric' => 'Tolong Hanya Masukkan Angka!',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        return redirect()->back()->withInput()->with('alert_error', $validator->errors());
    }
}
