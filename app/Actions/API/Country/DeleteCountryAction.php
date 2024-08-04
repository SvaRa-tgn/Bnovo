<?php

namespace App\Actions\API\Country;

use App\Repositories\CountryRepository;

class DeleteCountryAction
{
    public function __construct(private readonly CountryRepository $countryRepository){}

    public function execute(int $id): array
    {
        $this->countryRepository->delete($this->countryRepository->getById($id));

        return ['success' => true, 'status' => 'Страна удалена'];
    }
}
