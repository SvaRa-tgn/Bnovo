<?php

namespace App\Http\Controllers\API;

use App\Actions\API\CreateGuestAction;
use App\Http\Controllers\Controller;
use App\Http\Request\CreateGuestRequest;
use App\Http\Resources\GuestResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CreateGuestController extends Controller
{
    public function createGuest(CreateGuestAction $action, CreateGuestRequest $request): JsonResponse
    {
        return (new GuestResource($action->execute($request->dto())))->response()->setStatusCode(Response::HTTP_CREATED);
    }
}
