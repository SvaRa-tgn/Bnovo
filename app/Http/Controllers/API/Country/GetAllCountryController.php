<?php

namespace App\Http\Controllers\API\Country;

use App\Actions\API\Country\GetAllCountryAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryCollection;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetAllCountryController extends Controller
{
    public function getAllCountry(GetAllCountryAction $action): JsonResponse
    {
        return (new CountryCollection($action->execute()))->response()->setStatusCode(Response::HTTP_OK);
    }
}
