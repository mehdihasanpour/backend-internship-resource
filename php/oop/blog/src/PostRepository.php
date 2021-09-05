<?php

namespace Blog;


interface PostRepository
{
    public function create(Post $post);
    public function all(): array;
}
