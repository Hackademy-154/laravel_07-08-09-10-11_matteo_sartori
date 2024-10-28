<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmValidations extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|string|min:3',
            'plot'=>'required|string|min:10|max:400',
            'duration'=>'required|numeric', 
            'img'=>'image|mimes:jpg,png,webp,jpeg', 
        ];
    }

    public function messages(): array {
        return [
            "*.required"=> "Il campo ':attribute' è obbligatorio!",
            "*.min"=> "Il campo ':attribute' deve avere minimo :min caratteri!",
            "plot.max"=> "Il campo ':attribute' deve avere massimo :max caratteri!",
            "img.mimes"=> "Il file deve essere di tipo: .jpg, .jpeg, .png o .webp!"
        ];
    }
    public function attributes(): array{
        return [
            "title"=> "titolo",
            "plot"=> "trama",
            "duration"=> "durata",
            "img"=> "immagine di copertina"
        ];
    }
}
