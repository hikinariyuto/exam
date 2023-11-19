<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
        'fullname' => ['required', 'string'],
        'email' => ['required','email'],
        'postcode' => ['required','string','max:8'],
        'address' => ['string', 'required'],
        'building' => [ 'string', ],
        'opinion' => [ 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
        'fullname.required' => '名前を入力してください',
        'fullname.string' => '名前を文字列で入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.string' => 'メールアドレスをメールアドレス形式で入力してください',
        'postcode.required' => '郵便番号を入力してください',
        'postcode.string' => '郵便番号を文字列で入力してください',
        'postcode.max' => '郵便番号をハイフンを入れて8文字で入力してください',
        'address.required' => '住所を入力してください',
        'address.string' => '住所を文字列で入力してください',
        'building.string' => '建物名を文字列で入力してください',
        'opinion.string' => '意見を文字列で入力してください',
        'opinion.max' => '意見を120文字以下で入力してください',
        ];
    }
}
