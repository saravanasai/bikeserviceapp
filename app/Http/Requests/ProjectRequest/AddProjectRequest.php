<?php

namespace App\Http\Requests\ProjectRequest;

use Illuminate\Foundation\Http\FormRequest;

class AddProjectRequest extends FormRequest
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
            "project_tittle" => "required",
            "Client_name" => "required",
            "days" => "required|numeric",
            "project_description" => "required",
            "start_date" => "required",
            "end_date" => "required",
        ];
    }
}
