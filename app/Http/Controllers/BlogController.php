<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(Request $request) {
//        dd($request->all());
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => '<strong>Blog</strong> content',
            'category_id' => 2,
        ];
        $posts = array_fill(0, 10, $post);

        $filtered_posts = array_filter($posts, function ($post) use ($search, $category_id) {
            if ($search && !str_contains(strtolower($post->title), strtolower($search))) {
                return false;
            }

            if ($category_id && $post->category_id != $category_id) {
                return false;
            }

            return true;
        });

        $categories = [
            null=>__('Все категории'),
            1 => __('Первая категория'),
            2 =>__('Вторая категория')
        ];

        return view('blog.index', compact('filtered_posts', 'categories'));
    }

    function show($post) {
        $post = (object) [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, unde!',
            'content' => '<strong>Blog</strong> content',
        ];

        return view('blog.show', compact('post'));
    }

    function like() {
        return 'Поставить лайк';
    }
}
