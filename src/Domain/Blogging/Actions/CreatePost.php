<?php declare(strict_types=1);

namespace Domain\Blogging\Actions;

use Domain\Blogging\ValueObjects\PostValueObject;
use Domain\Blogging\Models\Post;

class CreatePost
{
    public static function handle(PostValueObject $postDTO): Post
    {
        return Post::create($postDTO->toArray());
    }
}
