<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class companyUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', Rule::unique('companies', 'user_id')->ignore(Auth::id())],
            'code' => ['required', 'numeric', 'min:5', Rule::unique('companies', 'user_id')->ignore(Auth::id())],
            'pvm_code' => ['required', 'string', Rule::unique('companies', 'user_id')->ignore(Auth::id())],
            'address' => 'required|string',
            'telephone' => ['required', 'string', 'regex:/(86|\+3706)\d{7}/', Rule::unique('companies', 'user_id')->ignore(Auth::id())],
            'email' => ['required', 'email', Rule::unique('companies', 'user_id')->ignore(Auth::id())],
            'CEO' => 'required|string',
        ];
    }
}
