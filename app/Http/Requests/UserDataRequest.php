<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserDataRequest extends FormRequest
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
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|max:500'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Поле "Имя" не заполнено',
            'name.min' => 'Такого имени не существует...',
            'email.required' => 'Поле "Email" не заполнено',
            'email.email' => 'Данные в поле "Email" неверны',
            'message.required' => 'Поле "message" не заполнено',
            'message.max' => 'Ваше сообщение слишком длинное :C'
        ];
    }
}
