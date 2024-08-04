<?php

namespace App\DTO;

use App\Http\Request\UpdateCountryRequest;
use Spatie\LaravelData\Data;

class UpdateCountryRequestData extends Data
{

    public function __construct(
        public ?string $code,
        public ?string $country,
    )
    {
    }

    public static function fromRequest(UpdateCountryRequest $request): self
    {
        $code = $request->input('code');
        $country = $request->input('country');

        return new self(
            $code,
            $country,
        );
    }

}
