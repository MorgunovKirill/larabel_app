<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request) {
        return 'Запрос создания поста';
    }

    public function show($id) {
        return view('posts.show', ['id' => $id]);
    }

    public function edit($id) {
        return view('posts.edit', ['id' => $id]);
    }

    public function update(Request $request, $id) {
        return 'Запрос изменения поста';
    }

    public function delete($id) {
        return 'Запрос удаления поста';
    }

    public function like()
    {
        return 'Запрос лайка';
    }
}
