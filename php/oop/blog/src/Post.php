<?php

namespace Blog;

use DateTimeImmutable;

// title
// content
// published at
class Post
{
    public function __construct(public string $title,
                                public string $content,
                                public DateTimeImmutable $publishedAt) {}
}

