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

    public function getUserName(): string
    {
        return $this->user;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getSubmitedAt(): DateTimeImmutable
    {
        return $this->submitedAt;
    } 
}