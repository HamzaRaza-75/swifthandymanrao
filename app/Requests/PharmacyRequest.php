<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PharmacyRequest extends FormRequest
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
            'title' => 'required|min:3|max:20',
            'qty' => 'required|integer',
            'expire_date' => 'required',
            'sale_price' => 'integer|required',
            'phurcse_price' => 'integer|required',
            'created_by' => Auth::user()->id,
            'created_name' => Auth::user()->name,
        ];
    }

    // protected function prepareForValidation()
    // {
    //     if ($this->has('expire_date')) {
    //         $inputDate = $this->input('expire_date');
    //         $carbonDate = Carbon::createFromFormat('d/m/Y', $inputDate);
    //         $formattedDate = $carbonDate->format('Y-m-d');
    //         $this->merge(['expire_date' => $formattedDate]);
    //     }
    // }
}
