<?php

namespace App\Actions\API;

use App\Models\Guest;
use App\Repositories\GuestRepository;

class GetGuestAction
{
    public function __construct(private readonly GuestRepository $questRepository){}

    public function execute(int $id): Guest
    {
        return $this->questRepository->getById($id);
    }
}
