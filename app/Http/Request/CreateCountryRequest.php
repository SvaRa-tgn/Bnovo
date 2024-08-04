<?php

namespace App\Http\Request;

use App\DTO\CreateCountryRequestData;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateCountryRequest extends FormRequest
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
            'code'      => ['required', 'string', 'unique:countries,code'],
            'country'   => ['required', 'string', 'unique:countries,country'],
        ];
    }

    public function dto(): CreateCountryRequestData
    {
        return CreateCountryRequestData::fromRequest($this);
    }
}
