<?php

namespace App\Repositories;

use App\Models\Blog;

interface BlogRepositoryInterface
{
    /** @return Blog[] */
    public function all(): array;
    public function find(int $id): ?Blog;
}
