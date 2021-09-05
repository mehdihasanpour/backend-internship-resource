<?php

namespace Blog;


class InMemoryPostRepository implements PostRepository
{
    private array $posts = [];

    public function create(Post $post)
    {
        $this->posts []= $post;
    }

    public function all(): array
    {
        return $this->posts;
    }
}
