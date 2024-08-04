<?php

namespace App\DTO;

use App\Http\Request\CreateGuestRequest;
use App\Repositories\CountryRepository;
use Spatie\LaravelData\Data;

class CreateGuestRequestData extends Data
{
    public function __construct(public string $name,
                                public string $surname,
                                public string $email,
                                public string $country,
                                public string $phone){}

    public static function fromRequest(CreateGuestRequest $request): self
    {
        $country = CountryRepository::getCountry($request->input()['code'])['country'];

        return new self($request->input()['name'],
                        $request->input()['surname'],
                        $request->input()['email'],
                        $country,
                        $request->input()['phone'],);
    }

}
