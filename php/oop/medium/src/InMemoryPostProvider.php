<?php

namespace App;

use DateTime;

class InMemoryPostProvider implements PostProvider
{
    private array $data = [];

    public function showPosts(): array
    {
        return $this->data;
    }

    public function create(Post $post): array
    {
        $this->data[] = $post;
        return $this->data;
    }

    public function update(int $id, Post $post)
    {
        foreach ($this->data as $key => $value) {
            if ($value->getId() == $id) {
                $this->data[$key] = $post;
            }
        }
    }

    public function remove(int $id): void
    {
        foreach ($this->data as $key => $value) {
            if ($value->getId() == $id) {
                unset($this->data[$key]);
            }
        }
    }

    public function find(int $id): Post
    {
        foreach ($this->data as $value) {
            if ($value->getId() == $id) {
                return $value;
            }
        }
    }

    public function sort()
    {
        usort($this->data, function($a, $b) {
            $ad = new DateTime($a->getPublishedAt()['date']);
            $bd = new DateTime($b->getPublishedAt()['date']);
          
            if ($ad == $bd) {
              return 0;
            }
          
            return $ad < $bd ? -1 : 1;
          });
    }
}
