<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Schema;

class BlogPostController extends Controller
{
    /**
     * Get All POST.
     *
     * @return collection
     */
    public function index()
    {
        $posts = BlogPost::get();
        // dd($posts);
        return view('blog-post',['posts' => $posts]);

    }

}
