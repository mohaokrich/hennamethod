<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;

class showPostInBlogController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $slug)
    {
        $post = Post::where('title_slug', $slug)->first();

        if ($post) {
            return Inertia::render('Public/blog/show-post', compact('post'));
        }

        abort(404);
    }
}
