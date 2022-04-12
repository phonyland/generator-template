<?php

declare(strict_types=1);

namespace Phonyland\ExampleGenerator;

use Phonyland\Framework\Generator;

class ExampleGenerator extends Generator
{
    protected array $attributes = [
        'exampleAttribute' => 'example.text'
    ];

    protected array $attributeAliases = [
        'exampleAttributeAlias' => 'exampleAttribute'
    ];

    protected array $methodsAsAttributes = [
        'exampleMethod' => [],
    ];

    protected array $methodAliases = [
        'exampleMethodAlias' => 'exampleMethod'
    ];

    public function exampleMethod(): string
    {
        return 'example-text-' . random_int(1, 9999);
    }
}
