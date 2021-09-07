<?php

namespace App;

use DateTimeImmutable;

class PostRepository
{
    // private array $data = [];

    public function __construct(private PostProvider $post_provider)
    {
        
    }
    public function create(Post $post) {
        $this->post_provider->create($post);
    }

    public function update(int $id, Post $post)
    {
        $this->post_provider->update($id,$post);
    }

    public function remove(int $id)
    {
        $this->post_provider->remove($id);
    }

    public function find(int $id): Post
    {
        $post = $this->post_provider->find($id);
        return $post;
    }

    public function sort()
    {
        $this->post_provider->sort();
    }

    public function showPosts()
    {
        return $this->post_provider->showPosts();
    }
}
