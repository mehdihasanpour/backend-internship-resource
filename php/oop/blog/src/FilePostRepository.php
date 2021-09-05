<?php

namespace Blog;


class FilePostRepository implements PostRepository
{
    public function create(Post $post)
    {
        $f = fopen('posts.txt', 'w+');
        fwrite($f, serialize($post));
        fwrite($f, '\n');
        fclose($f);
    }

    public function all(): array
    {
        return str_split(file_get_contents('posts.txt'), '\n');
    }
}
