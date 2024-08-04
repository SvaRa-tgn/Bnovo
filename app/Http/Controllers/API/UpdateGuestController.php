<?php

namespace App\Http\Controllers\API;

use App\Actions\API\UpdateGuestAction;
use App\Http\Controllers\Controller;
use App\Http\Request\UpdateGuestRequest;
use App\Http\Resources\GuestResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UpdateGuestController extends Controller
{
    public function updateGuest(UpdateGuestAction $action, UpdateGuestRequest $request, int $id): JsonResponse
    {
        return (new GuestResource($action->execute($request, $id)))->response()->setStatusCode(Response::HTTP_CREATED);
    }
}
