<?php declare(strict_types=1);

namespace Domain\Blogging\Models\Builders;

use Illuminate\Database\Eloquent\Builder;

class PostBuilder extends Builder
{
    /**
     * @return self
     */
    public function published(): self
    {
        return $this->where('published', true);
    }

    /**
     * @return self
     */
    public function draft(): self
    {
        return $this->where('published', false);
    }

}
