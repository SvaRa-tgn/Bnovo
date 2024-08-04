<?php

namespace App\Http\Request;

use App\DTO\CreateGuestRequestData;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateGuestRequest extends FormRequest
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
            'name'    => ['required', 'string'],
            'surname' => ['required', 'string'],
            'email'   => ['string', 'unique:guests,email'],
            'code'    => ['required', 'string'],
            'phone'   => ['required', 'string', 'unique:guests,phone'],
        ];
    }

    public function dto(): CreateGuestRequestData
    {
        return CreateGuestRequestData::fromRequest($this);
    }
}
