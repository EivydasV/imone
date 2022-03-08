<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CompanyStoreRequest extends FormRequest
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
            'name' => ['required', 'string', Rule::unique('companies', 'name')],
            'code' => ['required', 'numeric', 'min:5', Rule::unique('companies', 'code')],
            'pvm_code' => ['required', 'string', Rule::unique('companies', 'pvm_code')],
            'address' => 'required|string',
            'telephone' => ['required', 'string', 'regex:/(86|\+3706)\d{7}/', Rule::unique('companies', 'telephone')],
            'email' => ['required', 'email', Rule::unique('companies', 'email')],
            'CEO' => 'required|string',
        ];
    }
}
