<?php

namespace App\Http\Request;

use App\DTO\UpdateGuestRequestData;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGuestRequest extends FormRequest
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
            'name'    => ['nullable', 'string'],
            'surname' => ['nullable', 'string'],
            'email'   => ['nullable', 'string', 'unique:guests,email'],
            'code'    => ['nullable', 'string'],
            'phone'   => ['nullable', 'string', 'unique:guests,phone'],
        ];
    }

    public function dto(): UpdateGuestRequestData
    {
        return UpdateGuestRequestData::fromRequest($this);
    }
}
