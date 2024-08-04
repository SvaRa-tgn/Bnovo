<?php

namespace App\Actions\API\Country;

use App\DTO\CreateCountryRequestData;
use App\Models\Country;
use App\Repositories\CountryRepository;

class CreateCountryAction
{
    public function __construct(private readonly CountryRepository $countryRepository){}

    public function execute(CreateCountryRequestData $dto): Country
    {
        return $this->countryRepository->create($dto);
    }
}
