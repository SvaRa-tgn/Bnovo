<?php

namespace App\Actions\API\Country;

use App\Repositories\CountryRepository;
use App\Repositories\GuestRepository;
use Illuminate\Support\Collection;

class GetAllCountryAction
{
    public function __construct(private readonly CountryRepository $countryRepository){}

    public function execute(): Collection
    {
        return $this->countryRepository->getAll();
    }
}
