<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'user_id' => 'required|max:200',
            'description' => 'required|max:200',
            'services' => 'required|max:200',
            'address' => 'required',
            'visible' => 'required',
            'photo'   => 'nullable|image|max:4096',

        ];
    }


    public function messages()
    {
        return [

            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => 'Il titolo deve avere :max caratteri',
            'description.required' => 'La descrizione deve essere inserita',
            'thumb.required' => 'Questo campo non può rimanere vuoto',
            'cover_image.max' => "La dimensione del file è troppo grande",
            'cover_image.image' => "Il file deve essere di tipo immagine",
        ];
    }
}
