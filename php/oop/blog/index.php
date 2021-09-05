<?php

use Blog\FilePostRepository;
use Blog\Post;
use Blog\PostRepository;



function home(PostRepository $postRepository, array $data)
{
    $post = new Post($data['title'], $data['content'], new DateTimeImmutable());

    $postRepository->create($post);
}

// $repo = new InMemoryPostRepository();
$repo = new FilePostRepository();
home($repo, ['title' => 'Breaking news', 'content' => 'Lorem ....']);
