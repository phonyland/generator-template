<?php

declare(strict_types=1);

namespace Phonyland\SampleGenerator;

class ExampleGenerator
{
    /**
     * @throws \Exception
     */
    public function exampleOne(): string
    {
        return 'example-one-' . random_int(1, 9999);
    }
}
