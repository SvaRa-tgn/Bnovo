<?php

namespace App\DTO;

use App\Http\Request\UpdateGuestRequest;
use Spatie\LaravelData\Data;

class UpdateGuestRequestData extends Data
{

    public function __construct(
        public ?string $name,
        public ?string $surname,
        public ?string $email,
        public ?string $country,
        public ?string $phone,
    )
    {
    }

    public static function fromRequest(UpdateGuestRequest $request): self
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $country = $request->input('code');
        $phone = $request->input('phone');


        return new self(
            $name,
            $surname,
            $email,
            $country,
            $phone,
        );
    }

}
