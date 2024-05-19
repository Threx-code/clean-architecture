<?php declare(strict_types=1);

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\StoreRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): JsonResponse
    {

        echo "ffff";

        return response()->json(
            data: null,
            status: ResponseAlias::HTTP_ACCEPTED
        );
    }
}
