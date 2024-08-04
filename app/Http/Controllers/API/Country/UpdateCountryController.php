<?php

namespace App\Http\Controllers\API\Country;

use App\Actions\API\Country\UpdateCountryAction;
use App\Http\Controllers\Controller;
use App\Http\Request\UpdateCountryRequest;
use App\Http\Resources\CountryResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UpdateCountryController extends Controller
{
    public function updateCountry(UpdateCountryAction $action, UpdateCountryRequest $request, int $id): JsonResponse
    {
        return (new CountryResource($action->execute($request, $id)))->response()->setStatusCode(Response::HTTP_CREATED);
    }
}
