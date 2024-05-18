<?php declare(strict_types=1);

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Resources\Posts\PostResource;
use Domain\Blogging\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class IndexController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json(
            data: PostResource::collection(
            Post::published()->paginate(5) // get() can be replaced with paginate
            ),
            status: ResponseAlias::HTTP_OK
        );
    }
}
