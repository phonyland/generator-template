<?php

use Phonyland\Framework\Phony;

test('sample text', function (): void {
    // Arrange
    $phony = new Phony();

    // Act
    $data = $phony->example->text();

    // Assert
    expect($data)->toContain('example-text-');
});
