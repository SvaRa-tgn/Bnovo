<?php

namespace App\DTO;

use App\Http\Request\CreateCountryRequest;
use Spatie\LaravelData\Data;

class CreateCountryRequestData extends Data
{
    public function __construct(public string $code,
                                public string $country,
    )
    {
    }

    public static function fromRequest(CreateCountryRequest $request): self
    {
        return new self($request->input()['code'],
                        $request->input()['country'],
        );
    }

}
