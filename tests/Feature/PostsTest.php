<?php declare(strict_types=1);

use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use function Pest\Laravel\get;


test('it gets the correct status code', function () {
        get('/')->assertStatus(ResponseAlias::HTTP_OK);
});

