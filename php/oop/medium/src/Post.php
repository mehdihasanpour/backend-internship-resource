<?php

namespace App;

use DateTimeImmutable;

class Post
{
    public function __construct(
        protected int $id,
        protected string $title,
        protected string $content,
        protected User $author,
        protected array $comments = [],
        protected bool $is_archived = false,
        protected DateTimeImmutable $published_at,
    ) {
    }

    public  function getId(): int 
    {
        return $this->id;
    }

    public  function getTitle(): string 
    {
        return $this->title;
    }

    public  function getContent(): string 
    {
        return $this->content;
    }

    public  function getAuthor(): User 
    {
        return $this->author;
    }

    public  function getPublishedAt(): DateTimeImmutable
    {
        return $this->published_at;
    }

    public function archive() 
    {
        $this->is_archived = true;
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