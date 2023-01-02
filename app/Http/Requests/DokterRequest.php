<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokterRequest extends FormRequest
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
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'jadwalHari' => 'required|string',
            'jadwalWaktu' => 'required|string',
            'gambar' => 'image',

        ];
    }
}
