<?php

namespace App\Actions\API\Country;

use App\Http\Request\UpdateCountryRequest;
use App\Models\Country;
use App\Repositories\CountryRepository;

class UpdateCountryAction
{
    public function __construct(private readonly CountryRepository $countryRepository){}

    public function execute(UpdateCountryRequest $request, int $id): Country
    {
        return $this->countryRepository->update($request->dto(), $this->countryRepository->getById($id));
    }
}
