<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "label" => ["nullable", "string"],
            "color" => ["nullable", "string"],
//            "todoId" => ["nullable", "exists:tag_todo,todo_id", "integer"]
        ];
    }

}
