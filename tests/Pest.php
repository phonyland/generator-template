<?php

declare(strict_types=1);

use Phonyland\Framework\Phony;

function 🙃(): Phony
{
    return new Phony();
}

expect()->extend('toBeAWord', function () {
    return $this->toMatch('/\w+/');
});
