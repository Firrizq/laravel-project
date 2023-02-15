<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => ['required'],
            'nim' => ['required'],
            'alamat' => ['required']
        ];
    }

    public function messages()
{
    return [
        'nama.required' => 'Masukkan nama Mahasiswa terlebih dahulu',
        'nim.required' => 'Masukkan NIM terlebih dahulu',
        'alamat.required' => 'Masukkan alamat terlebih dahulu'
    ];
}
}
