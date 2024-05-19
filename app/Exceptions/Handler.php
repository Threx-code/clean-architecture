<?php declare(strict_types=1);

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * @param $request
     * @param Throwable $e
     * @return bool
     */
    protected function shouldReturnJson($request, Throwable $e): bool
    {
        if($request->is('api/*')){
            return true;
        }

        return $request->expectsJson();
    }
}
