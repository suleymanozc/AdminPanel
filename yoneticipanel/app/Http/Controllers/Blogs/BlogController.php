<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlogs(){
        return view('backend.blog.blogs');
    }

    public function getBlogsAdd(){
        return view('backend.blog.blog-add');
    }

    public function getBlogsEdit(){
        return view('backend.blog.blog-edit');
    }

    public function getBlogsCategory(){
        return view('backend.blog.blog-category');
    }

    public function getBlogsCategoryAdd(){
        return view('backend.blog.blog-category-add');
    }

    public function getBlogsCategoryEdit(){
        return view('backend.blog.blog-category-edit');
    }
}
