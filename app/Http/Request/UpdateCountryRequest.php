<?php

namespace App\Http\Request;

use App\DTO\UpdateCountryRequestData;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'code'      => ['nullable', 'string', 'unique:countries,code'],
            'country'   => ['nullable', 'string', 'unique:countries,country'],
        ];
    }

    public function dto(): UpdateCountryRequestData
    {
        return UpdateCountryRequestData::fromRequest($this);
    }
}
