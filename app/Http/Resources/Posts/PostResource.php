<?php declare(strict_types=1);

namespace App\Http\Resources\Posts;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->key,
            'type' => 'post',
            'attribute' => [
                'title' => $this->title,
                'slug' => $this->slug,
                'body' => $this->body,
                'user_id' => $this->user_id,
                'description' => $this->description,
                'created_at' => $this->created_at,
                'published' => $this->published,
            ],
            'relationships' => [],
            'links' => [
                'self' => route('v1:posts:show', $this->key)
            ],
        ];
    }
}
