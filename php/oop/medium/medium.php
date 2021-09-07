<?php

use App\Comment;
use App\InMemoryPostProvider;
use App\Post;
use App\PostRepository;
use App\User;

require 'vendor/autoload.php';

$user1 = new User('mehdi','mehdi@yahoo.com');
$user2 = new User('ali','ali@yahoo.com');
$date1 = new DateTimeImmutable('2017-02-29');
$date2 = new DateTimeImmutable('2012-02-29');
$comment1 = new Comment(1,$user1->getName(),'this is comment 1 for post 1',0,$date1);
$comment2 = new Comment(2,$user2->getName(),'this is comment 2 for post 1',0,$date2);
$comments =  array($comment1);
$post1 = new Post(1,'post1','content of post 1', $user1, $comments,false,$date1);
$post2 = new Post(2,'post2','content of post 2', $user2, $comments,false,$date2);
$post = new PostRepository(new InMemoryPostProvider);
$post_create = $post->create($post1);
$post_create2 = $post->create($post2);
// $post->update(1,$post2);
$post->remove(1);
// $result = $post->find(1);
// var_dump($result);
// $post->sort();
var_dump($post->showPosts());
