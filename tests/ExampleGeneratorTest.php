<?php

declare(strict_types=1);

test('example->exampleMethod()')
    ->expect(🙃()->example->exampleMethod())
    ->toBeAWord()
    ->toContain('example-text-');
