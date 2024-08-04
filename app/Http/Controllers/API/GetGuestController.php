<?php

namespace App\Http\Controllers\API;

use App\Actions\API\GetGuestAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\GuestResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetGuestController extends Controller
{
    public function getGuest(GetGuestAction $action, int $id): JsonResponse
    {
        return (new GuestResource($action->execute($id)))->response()->setStatusCode(Response::HTTP_OK);
    }
}
