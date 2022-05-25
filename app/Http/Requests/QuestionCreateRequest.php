<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionCreateRequest extends FormRequest
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
            'question'=>'required|min:3',
            'image'=>'image|nullable|max:1024|mimes:jpg,jpeg,png',
            'option1'=>'required|min:1',
            'option2'=>'required|min:1',
            'option3'=>'required|min:1',
            'option4'=>'required|min:1',
            'correct_option'=>'required',
            
        ];
    }


    public function attributes()
    {
        return [
            'question'=>'Soru',
            'image'=>'Soru Fotoğrafı',
            'option1'=>'1.Cevap',
            'option2'=>'2.Cevap',
            'option3'=>'3.Cevap',
            'option4'=>'4.Cevap',
            'correct_option'=>'Doğru Cevap',
            
        ];
    }
}



