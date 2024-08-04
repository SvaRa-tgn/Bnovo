<?php

namespace App\Actions\API;

use App\Repositories\GuestRepository;

class DeleteGuestAction
{
    public function __construct(private readonly GuestRepository $guestRepository){}

    public function execute(int $id): array
    {
        $this->guestRepository->delete($this->guestRepository->getById($id));

        return ['success' => true, 'status' => 'Гость удален'];
    }
}
