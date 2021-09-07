<?php

namespace App;

use DateTimeImmutable;

class Comment
{
    public function __construct(
        protected int $id,
        protected string $user,
        protected string $content,
        protected DateTimeImmutable $submitedAt
    ) {
    }

    public function getId(): int
    {
        return $this->id;
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