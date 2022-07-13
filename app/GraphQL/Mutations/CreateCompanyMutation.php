<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;

class CreateCompanyMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createCompany'
    ];

    public function type(): Type
    {
        return GraphQL::type('Company');
    }

    public function args(): array
    {
        return [
            'name' => [
                'type' => Type::nunNull(Type::string()), 
                'description' => 'The company name'
            ],
            'contact_email' => [
                'type' => Type::nunNull(Type::string()), 
                'description' => 'The company email'
            ],
            'street_address' => [
                'type' => Type::nunNull(Type::string()), 
                'description' => 'The street address of a company HQ'
            ],
            'city' => [
                'type' => Type::nunNull(Type::string()), 
                'description' => 'The city of a company HQ'
            ],
            'country' => [
                'type' => Type::nunNull(Type::string()), 
                'description' => 'The country of a company HQ'
            ],
            'domain' => [
                'type' => Type::nunNull(Type::string()), 
                'description' => 'The domain for a company'
            ],
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        return Compnay::create($args);
    }
}
