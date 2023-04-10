<?php

namespace App\Http\Requests\Vendors;

use App\Models\Vendor;
use Illuminate\Foundation\Http\FormRequest;

class VendorUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'required|unique:vendors,email,'.$this->id,
            'phone'=>'required|unique:vendors,phone,'.$this->id,

        ];
    }
}
