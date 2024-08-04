<?php

namespace App\Actions\API;

use App\DTO\CreateGuestRequestData;
use App\Models\Guest;
use App\Repositories\GuestRepository;
class CreateGuestAction
{
    public function __construct(private readonly GuestRepository $questRepository){}

    public function execute(CreateGuestRequestData $dto): Guest
    {
        return $this->questRepository->create($dto);
    }
}
