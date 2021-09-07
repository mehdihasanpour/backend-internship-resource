<?php 

namespace App;

interface PostProvider
{
    public function create(Post $post): array;
    public function update(int $id,Post $post);
    public function remove(int $id): void;
    public function find(int $id): Post;
    public function sort();
    public function showPosts(): array;
}