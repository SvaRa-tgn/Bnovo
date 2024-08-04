<?php

namespace App\Http\Controllers\API\Country;

use App\Actions\API\Country\GetCountryAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetCountryController extends Controller
{
    public function getCountry(GetCountryAction $action, int $id): JsonResponse
    {
        return (new CountryResource($action->execute($id)))->response()->setStatusCode(Response::HTTP_OK);
    }
}
