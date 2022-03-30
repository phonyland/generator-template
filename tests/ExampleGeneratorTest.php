<?php

declare(strict_types=1);

test('example->text')
    ->expect(🙃()->example->text())
    ->toBeAWord()
    ->toContain('example-text-');
