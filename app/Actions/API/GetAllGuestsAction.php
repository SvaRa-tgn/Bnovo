<?php

namespace App\Actions\API;

use App\Repositories\GuestRepository;
use Illuminate\Support\Collection;

class GetAllGuestsAction
{
    public function __construct(private readonly GuestRepository $questRepository){}

    public function execute(): Collection
    {
        return $this->questRepository->getAll();
    }
}
