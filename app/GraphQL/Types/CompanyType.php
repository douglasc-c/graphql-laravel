<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;

class CompanyType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Company',
        'model' => Company::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'The auto incremented compoany ID'
            ],
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
}
