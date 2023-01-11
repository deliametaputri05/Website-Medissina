<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaftarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [

            'id_poli' => 'required|exists:poli,id',
            'nik' => 'required|integer',
            'nama' => 'required|string',
            'tempatLahir' => 'required|string',
            'tglLahir' => 'required|date',
            'usia' => 'required|integer',
            'jk' => 'required|string',
            'agama' => 'required|string',
            'status' => 'required|string',
            'alamat' => 'required|string',
            'noHp' => 'required|string',
            'caraBayar' => 'required|string',
            'ktp' => 'required|image',
            'tglBerobat' => 'required|date',
            'keluhan' => 'required|string',
            'ceklis' => 'required|string'

        ];
    }
}
