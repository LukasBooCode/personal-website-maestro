<?php

namespace App\Repositories;

use App\Models\Blog;
use Framework\Database;

class BlogRepository implements BlogRepositoryInterface
{
    private Database $database;
    public function __construct(Database $database)
    {
        $this->database = $database;
    }
    /** @return Blog[] */
    public function all(): array
    {
        $stmt = $this->database->run('SELECT * FROM blogs')->fetchAll();
        $blogs = [];
        foreach ($stmt as $row) {
            $blog = $this->fromDbRow($row);
            $blogs[] = $blog;
        }
        return $blogs;
    }
    public function find(int $id): ?Blog
    {
        $row = $this->database->run('SELECT * FROM blogs WHERE id = :id', [
            'id' => $id
        ])->fetch();

        if ($row) {
            $blog = $this->fromDbRow($row);
            return $blog;
        }

        return null;
    }
    private function fromDbRow(mixed $row): Blog
    {
        $blog = new Blog();

        $blog->id = $row->id;
        $blog->author = $row->author;
        $blog->datePublished = (int)$row->date_published;
        $blog->title = $row->title;
        $blog->content = $row->content;

        return $blog;
    }
}
