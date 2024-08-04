<?php

namespace App\Repositories;

use App\DTO\CreateCountryRequestData;
use App\DTO\UpdateCountryRequestData;
use App\Models\Country;
use App\Repositories\Inteface\ICountryRepository;
use Illuminate\Database\Eloquent\Collection;

class CountryRepository implements ICountryRepository
{
    public static function getCountry(string $code): Country
    {
        return Country::where('code', $code)->firstOrFail();
    }

    public function getAll(): Collection
    {
        return Country::all();
    }

    public function getById(int $id): Country
    {
        return Country::find($id);
    }

    public function create(CreateCountryRequestData $dto): Country
    {
        $country = new Country;

        $country->code = $dto->code;
        $country->country = $dto->country;

        $country->save();

        return $country;
    }

    public function update(UpdateCountryRequestData $dto, Country $country): Country
    {
        if($dto->code !== null){
            $country->code = $dto->code;
        }

        if($dto->country !== null){
            $country->country = $dto->country;
        }

        $country->save();

        return $country;
    }
    public function delete(Country $country): void
    {
        $country->delete();
    }
}
