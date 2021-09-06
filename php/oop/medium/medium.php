<?php

use App\Comment;
use App\Post;
use App\User;

require 'vendor/autoload.php';

$user1 = new User('mehdi','mehdi@yahoo.com');
$user2 = new User('ali','ali@yahoo.com');
$date = new DateTimeImmutable('2017-02-29');
$comment1 = new Comment($user1->getName(),'this is comment 1 for post 1',$date);
$comment2 = new Comment($user2->getName(),'this is comment 2 for post 1',$date);
$comments =  array($comment1);
$post1 = new Post('post1','content of post 1', $user1, $comments);
$post1->addComment($comment2);
// var_dump($post1);
$post1->removeCommentOfOneUser('mehdi');
var_dump($post1);
