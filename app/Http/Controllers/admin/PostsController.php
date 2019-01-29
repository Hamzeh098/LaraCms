<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\RequestEditPost;
use App\Model\Category;
use App\Model\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('admin.posts.list', compact('posts'));
    }

    public function create()
    {
        $postStatus         = Post::getStatuses();
        $allCategories      = Category::get();
        $categories         = $allCategories->groupBy('parent_id');
        $categories['root'] = $categories[''];
        unset($categories['']);

        return view('admin.posts.create', compact('postStatus', 'categories'));
    }

    public function store(PostCreateRequest $request)
    {
        $post = Post::create([
            'post_title'   => $request->input('postTitle'),
            'post_slug'    => $request->input('postTitle'),
            'post_content' => $request->input('postContent'),
            'post_author'  => User::first()->id,
            'post_status'  => $request->input('postStatus'),
        ]);

        if ($post && $post instanceof Post) {
            $categories = $request->input('categories');
            if (count($categories) > 0) {
                $post->categories()->attach($categories);
            }

            return redirect()->route('admin.posts')
                             ->with('status', 'مطلب با موفقیت ساخته شد');
        }

    }

    public function delete(Request $request, $post_id)
    {
        $post = Post::find($post_id);
        if ($post && $post instanceof Post) {
            $postdestory = Post::destroy($post_id);
            if ($postdestory) {
                return redirect()->back()
                                 ->with('status', 'مطلب با موفقیت حذف شد');
            }
        }
    }

    public function edit(Request $request, $post_id)
    {
        $postStatus     = Post::getStatuses();
        $post           = Post::find($post_id);
        $categories     = Category::get();
        $postCategories = $post->categories()->pluck('id')->toArray();


        return view('admin.posts.edit',
            compact('post', 'categories', 'postStatus', 'postCategories'));
    }

    public function update(RequestEditPost $request, $post_id)
    {
        $post = Post::find($post_id);
        if ($post && $post instanceof Post) {
            $postData = [
                'post_title'   => $request->input('postTitle'),
                'post_content' => $request->input('postContent'),
                'post_status'  => $request->input('postStatus'),
            ];

            $updateResult = $post->update($postData);
            if ($updateResult) {
                $categories = $request->input('categories');
                if (count($categories) > 0) {
                    $post->categories()->sync($categories);
                }

                return redirect()->route('admin.posts')
                                 ->with('status', 'مطلب با موفقیت ویرایش شد!');
            }
        }
    }
}
