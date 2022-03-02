<?php

declare(strict_types=1);

namespace Phonyland\ExampleGenerator;

use Phonyland\GeneratorManager\Generator;

class ExampleGenerator extends Generator
{
    public function text(): string
    {
        return 'example-text-'.random_int(1, 9999);
    }
}
