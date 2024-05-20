<?php declare(strict_types=1);

namespace Domain\Blogging\ValueObjects;

class PostValueObject
{
    public function __construct(
        public string $title,
        public int $userId,
        public string|null $body,
        public string|null $description,
        public bool|null $published = false
    ){}

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            'description' => $this->description,
            'published' => $this->published,
            'user_id' => $this->userId,
        ];
    }
}
