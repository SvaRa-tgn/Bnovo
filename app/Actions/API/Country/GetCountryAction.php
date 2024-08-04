<?php

namespace App\Actions\API\Country;

use App\Models\Country;
use App\Repositories\CountryRepository;

class GetCountryAction
{
    public function __construct(private readonly CountryRepository $countryRepository){}

    public function execute(int $id): Country
    {
        return $this->countryRepository->getById($id);
    }
}
