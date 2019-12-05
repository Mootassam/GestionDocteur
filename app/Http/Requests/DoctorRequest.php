<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Doctor ;


class DoctorRequest extends FormRequest
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
    // to do this breakpoint // 

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

           

            

            //
        ];
    }
}
