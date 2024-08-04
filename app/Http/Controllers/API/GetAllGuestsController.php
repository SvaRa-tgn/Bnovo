<?php

namespace App\Http\Controllers\API;

use App\Actions\API\GetAllGuestsAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\GuestCollection;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetAllGuestsController extends Controller
{
    public function getAllGuests(GetAllGuestsAction $action): JsonResponse
    {
        return (new GuestCollection($action->execute()))->response()->setStatusCode(Response::HTTP_OK);
    }
}
