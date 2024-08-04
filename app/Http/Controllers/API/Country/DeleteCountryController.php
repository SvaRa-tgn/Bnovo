<?php

namespace App\Http\Controllers\API\Country;

use App\Actions\API\Country\DeleteCountryAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DeleteCountryController extends Controller
{
    public function deleteCountry(DeleteCountryAction $action, int $id): JsonResponse
    {
        return response()->json($action->execute($id))->setStatusCode(Response::HTTP_OK);
    }
}
