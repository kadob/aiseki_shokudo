<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Location;
use App\Models\User;

class PostController extends Controller
{
    /**
     * 一覧を表示する
     * @return View
     */
    public function showList(): View
    {
        $post = new Post();
        $posts = $post->getPaginateByLimit();
        return view('posts/list')->with([
            'posts' => $posts
        ]);
    }

    /**
     * 作成画面を表示する
     * @return View
     */
    public function create(): View
    {
        $location = new Location();
        $locations = $location->get();
        $user_id = auth()->id();
        return view('posts/create')->with([
            'locations' => $locations,
            'user_id' => $user_id,
        ]);
    }

    /**
     * 保存する
     * @param PostRequest $request
     * @param Post $post
     * @return void
     */
    // public function save(Post $post, PostRequest $postRequest)
    // {
    //     $input = $postRequest['post'];
    //     $post->fill($input)->save();
    //     return redirect('/posts');
    // }

    /**
     * 編集画面を表示する
     * @param Post $post
     * @return View
     */
    // public function edit(Post $post): View
    // {
    //     $locations = Location::all();//全件取得ではなく、ロケの有名人の名前だけ全件取得すればよい
    //     return view('posts.edit')->with([
    //         'post' => $post,
    //         'location' => $locations,
    //     ]);
    // }

    /**
     * 更新する
     * @param PostRequest $Request
     * @param Post $post
     * @return void
     */
    // public function update(PostRequest $request, Post $post)
    // {
    //     $input_post = $request['post'];
    //     $post->fill($input_post)->save();
    //     return redirect('/posts');
    // }

    /**
     * 削除する
     * @param Post $post
     * @return void
     */
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
