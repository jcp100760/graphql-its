<?php

declare(strict_types=1);

namespace App\GraphQL\Inputs;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\InputType;

class ProffessorInput extends InputType
{
    protected $attributes = [
        'name' => 'ProffessorInput',
    ];

    public function fields(): array
    {
        return [
            'name' => [
                'name' => 'name', 
                'type' => Type::nonNull(Type::string()),
                'rules' => ['requiere','max:30']
            ],
            'lastname' => [
                'name' => 'lastname', 
                'type' => Type::nonNull(Type::string()),
                'rules' => ['max:30']
            ],
            'ci' => [
                'name' => 'ci', 
                'type' => Type::nonNull(Type::int()),
            ],
            'active' => [
                'name' => 'active', 
                'type' => Type::nonNull(Type::boolean()),
            ]
        ];
    }
}
