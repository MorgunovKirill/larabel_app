<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostsController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 1,
            'title' => 'Blog title',
            'content' => '<strong>Blog</strong> content',
        ];
        $posts = array_fill(0, 10, $post);
        return view('user.posts.index', compact('posts'));
    }
    public function create()
    {
        return view('user.posts.create');
    }

    function store(Request $request) {
        $validated = validator($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ])->validate();

        @dd($validated);

//        $validated = $request->validate([
//            'title' => ['required', 'string', 'max:100'],
//            'content' => ['required', 'string', 'max:10000'],
//        ]);
//        $validated = $request->validated();

//        if ($order->amount > $account->balance)
        if (true) {
//            return redirect()->back()->withInput()->with('message', __('Недостаточно средств'));
            throw ValidationException::withMessages([
                'account' =>__('Недостаточно средств'),
            ]);
        }

        return redirect()->route('user.posts.show', 123);
    }

    public function show() {
        $post = (object) [
            'id' => 1,
            'title' => 'Blog title',
            'content' => '<strong>Blog</strong> content',
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit() {
        $post = (object) [
            'id' => 1,
            'title' => 'Blog title',
            'content' => '<strong>Blog</strong> content',
        ];

        return view('user.posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $post) {
        $validated = validator($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ])->validate();

        @dd($validated);

//        return redirect()->route('user.posts.show', $post);
        return redirect()->back();
    }

    public function delete($id) {
        return redirect()->route('user.posts');
    }

    public function like()
    {
        return 'Запрос лайка';
    }
}
