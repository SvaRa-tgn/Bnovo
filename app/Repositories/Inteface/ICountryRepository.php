<?php

namespace App\Repositories\Inteface;

use App\DTO\CreateCountryRequestData;
use App\DTO\UpdateCountryRequestData;
use App\Models\Country;
use Illuminate\Database\Eloquent\Collection;

interface ICountryRepository
{
    public static function getCountry(string $code): Country;
    public function getAll(): Collection;
    public function getById(int $id): Country;
    public function create(CreateCountryRequestData $dto): Country;
    public function update(UpdateCountryRequestData $dto, Country $country): Country;
    public function delete(Country $country): void;
}
