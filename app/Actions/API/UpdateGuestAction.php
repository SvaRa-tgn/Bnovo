<?php

namespace App\Actions\API;

use App\Http\Request\UpdateGuestRequest;
use App\Models\Guest;
use App\Repositories\GuestRepository;

class UpdateGuestAction
{
    public function __construct(private readonly GuestRepository $guestRepository){}

    public function execute(UpdateGuestRequest $request, int $id): Guest
    {
        return $this->guestRepository->update($request->dto(), $this->guestRepository->getById($id));
    }
}
