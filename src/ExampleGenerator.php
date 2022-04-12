<?php

declare(strict_types=1);

namespace Phonyland\ExampleGenerator;

use Phonyland\Framework\Generator;

class ExampleGenerator extends Generator
{
    public function exampleMethod(): string
    {
        return 'example-text-' . random_int(1, 9999);
    }
}
