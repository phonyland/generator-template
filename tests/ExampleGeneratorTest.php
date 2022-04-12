<?php

declare(strict_types=1);

test('example->exampleMethod()')
    ->expect(🙃()->example->exampleMethod())
    ->toBeAWord()
    ->toContain('example-text-');

test('example->exampleMethodAlias()')
    ->expect(🙃()->example->exampleMethodAlias())
    ->toBeAWord()
    ->toContain('example-text-');

test('example->exampleMethod as alias')
    ->expect(🙃()->example->exampleMethod)
    ->toBeAWord()
    ->toContain('example-text-');
