<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class CreateContainerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('armroll-create', 'armroll-self-create');
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
            'jenis_container' => 'required',
            'daya_tampung' => 'required|numeric',
            'kebutuhan_container' => 'required|numeric',
            'sampah' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'bulan.required' => 'Pilih Bulan Data!',
            'tahun.required' => 'Pilih Tahun Data!',
            'jenis_container.required' => 'Pilih Jenis Kontainer!',
            'daya_tampung.required' => 'Masukkan Daya Tampung!',
            'kebutuhan_container.required' => 'Masukkan Kebutuhan Kontainer!',
            'sampah.required' => 'Masukkan Jumlah Sampah!',

            'bulan.numeric' => 'Tolong Hanya Masukkan Angka!',
            'tahun.numeric' => 'Tolong Hanya Masukkan Angka!',

            'daya_tampung.numeric' => 'Tolong Hanya Masukkan Angka!',
            'kebutuhan_container.numeric' => 'Tolong Hanya Masukkan Angka!',
            'sampah.numeric' => 'Tolong Hanya Masukkan Angka!',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        return redirect()->back()->withInput()->with('alert_error', $validator->errors());
    }
}
