<?php

namespace App;

class Post
{
    public function __construct(
        private string $title,
        private string $content,
        private string $author,
        private Comment $comment
    ) {
    }

}