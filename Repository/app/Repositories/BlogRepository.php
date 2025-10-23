<?php

namespace App\Repositories;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use App\Contracts\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{
    public function index()
    {
        $blogs = Blog::all();
        return $blogs;
    }

    public function find($id)
    {
        $blog = Blog::find($id);
        return $blog;
    }

    public function create(array $data)
    {
        return '';
    }

    public function update($id, array $data)
    {
        return '';
    }

    public function delete($id)
    {
        return '';
    }
}
