<?php

use Phonyland\Framework\Phony;

test('sample text', function (): void {
    // Arrange
    $phony = new Phony();

    // Act
    $data = $phony->sample->text;

    // Assert
    expect($data)->toContain('sample-text-');
});
