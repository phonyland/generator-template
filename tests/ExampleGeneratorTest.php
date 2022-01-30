<?php

test('example->text')
    ->expect(🙃()->example->text())
    ->toBeAWord()
    ->toContain('example-text-');
