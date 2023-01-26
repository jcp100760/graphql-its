<?php

namespace App\GraphQL\Schemas;

use App\GraphQL\Queries\HelloQuery;
use Rebing\GraphQL\Support\Contracts\ConfigConvertible;

class prueba implements ConfigConvertible
{
    public function toConfig(): array
    {
        return [
            'query' => [
                HelloQuery::class
            ],

            'mutation' => [
                // ExampleMutation::class,
            ],

            'types' => [
                // ExampleType::class,
            ],
        ];
    }
}
