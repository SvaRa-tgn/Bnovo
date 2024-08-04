<?php

namespace App\Http\Controllers\API\Country;

use App\Actions\API\Country\CreateCountryAction;
use App\Http\Controllers\Controller;
use App\Http\Request\CreateCountryRequest;
use App\Http\Resources\CountryResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CreateCountryController extends Controller
{
    public function createCountry(CreateCountryAction $action, CreateCountryRequest $request): JsonResponse
    {
        return (new CountryResource($action->execute($request->dto())))->response()->setStatusCode(Response::HTTP_CREATED);
    }
}
