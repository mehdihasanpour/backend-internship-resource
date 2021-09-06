<?php

namespace App;

class Post
{
    public function __construct(
        private string $title,
        private string $content,
        private User $author,
        private array $comments
    ) {
    }

    public function addComment(Comment $comment): void
    {
       $this->comments[] = $comment;
    }

    public function removeCommentOfOneUser(string $user_name)
    {
        foreach($this->comments as $key => $comment){
            if($comment->getUserName() == $user_name){
                unset($this->comments[$key]);
            }
        }
    }

}