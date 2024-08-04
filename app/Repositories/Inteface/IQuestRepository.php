<?php

namespace App\Repositories\Inteface;

use App\DTO\CreateGuestRequestData;
use App\DTO\UpdateGuestRequestData;
use App\Models\Guest;
use Illuminate\Database\Eloquent\Collection;

interface IQuestRepository
{
    public function getAll(): Collection;
    public function create(CreateGuestRequestData $dto): Guest;
    public function getById(int $id): Guest;
    public function update(UpdateGuestRequestData $dto, Guest $guest): Guest;
    public function delete(Guest $quest): void;
}
