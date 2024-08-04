<?php

namespace App\Http\Controllers\API;

use App\Actions\API\DeleteGuestAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DeleteGuestController extends Controller
{
    public function deleteGuest(DeleteGuestAction $action, int $id): JsonResponse
    {
        return response()->json($action->execute($id))->setStatusCode(Response::HTTP_OK);
    }
}
