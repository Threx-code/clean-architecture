<?php declare(strict_types=1);

namespace Domain\Blogging\Models\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasSlug
{

    public static function bootHasSlug(): void
    {
        static::creating(function ($model){
            $model->slug = Str::slug($model->title);
        });
    }
}
