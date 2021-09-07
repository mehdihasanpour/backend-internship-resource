<?php

namespace App;

class Post
{
    public function __construct(
        protected int $id,
        protected string $title,
        protected string $content,
        protected User $author,
        protected array $comments
    ) {
    }

    public  function getId(): int 
    {
        return $this->id;
    }

    public function addComment(Comment $comment): void
    {
       $this->comments[] = $comment;
    }

    public function removeCommentByUserName(string $user_name)
    {
        foreach($this->comments as $key => $comment){
            if($comment->getUserName() == $user_name){
                unset($this->comments[$key]);
            }
        }
    }

    public function removeCommentById(int $id): void
    {
        foreach($this->comments as $key => $comment){
            if($comment->getId() == $id){
                unset($this->comments[$key]);
            }
        }
    }
}