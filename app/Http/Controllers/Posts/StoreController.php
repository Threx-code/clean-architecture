<?php declare(strict_types=1);

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\StoreRequest;
use Domain\Blogging\Actions\CreatePost;
use Domain\Blogging\Factories\PostFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): JsonResponse
    {

        $post = CreatePost::handle(
            postDTO: PostFactory::create(
                attributes: $request->validated()
            )
        );

        return response()->json(
            data: $post,
            status: ResponseAlias::HTTP_ACCEPTED
        );
    }
}
