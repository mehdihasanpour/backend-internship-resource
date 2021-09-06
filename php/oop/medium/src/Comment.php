<?php

namespace App;

use DateTimeImmutable;

class Comment
{
    public function __construct(
        private string $user,
        private string $content,
        private DateTimeImmutable $submitedAt
    ) {
    }
}