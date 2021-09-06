<?php

class Post
{
    public function __construct(
        private string $title,
        private string $content,
        private string $author,
        private array $comments = []
    ) {
    }

    public function addComment(string $string): void
    {
       $this->comments[] = $string;
    }

    public function showPostItem(string $requested_item)
    {
        return $this->$requested_item;
    }
}

$post1 = new Post('this is a title', 'lorem', 'mehdi');
$post1->addComment('this is comment');
$post_data = $post1->showPostItem('comments');
var_dump($post_data);

// $post2 = new Post('title for post 2', 'content for post 2', 'ali');
// $post2->addComment('comment for post 2');
// var_dump($post2);
