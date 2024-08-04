<?php

namespace App\Repositories;

use App\DTO\CreateGuestRequestData;
use App\DTO\UpdateGuestRequestData;
use App\Models\Guest;
use App\Repositories\Inteface\IQuestRepository;
use Illuminate\Database\Eloquent\Collection;


class GuestRepository implements IQuestRepository
{
    public function getAll(): Collection
    {
        return Guest::all();
    }

    public function create(CreateGuestRequestData $dto): Guest
    {
        $guest = new Guest;

        $guest->name = $dto->name;
        $guest->surname = $dto->surname;
        $guest->email = $dto->email;
        $guest->phone = $dto->phone;
        $guest->country = $dto->country;

        $guest->save();

        return $guest;
    }

    public function getById(int $id): Guest
    {
        return Guest::find($id);
    }

    public function update(UpdateGuestRequestData $dto, Guest $guest): Guest
    {

        if($dto->name !== null){
            $guest->name = $dto->name;
        }

        if($dto->surname !== null){
            $guest->surname = $dto->surname;
        }

        if($dto->email !== null){
            $guest->email = $dto->email;
        }

        if($dto->country !== null){
            $guest->country = $dto->country;
        }

        if($dto->phone !== null){
            $guest->phone = $dto->phone;
        }

        $guest->save();

        return $guest;
    }

    public function delete(Guest $quest): void
    {
        $quest->delete();
    }
}
