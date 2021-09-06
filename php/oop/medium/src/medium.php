<?php

class Post
{
    public function __construct(
        private string $title,
        private string $content,
        private string $author,
        private array $comment = []
    ) {
    }

    public function addComment(string $string): array
    {
       $this->comment[] = $string; 
       return $this->comment;
    }

    public function showPost()
    {
        return $this;
    }
}

$post1 = new Post('this is a title', 'lorem', 'mehdi');
$new_commetn = $post1->addComment('this is comment');
var_dump($post1->showPost());

$post2 = new Post('title for post 2', 'content for post 2', 'ali');
$post2->addComment('commetn for post 2');
var_dump($post2->showPost());
