<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UsersController extends Controller {
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function index() {
        $users = $this->userService->getAllUsers();
        return view('users.index', compact('users'));
    }
}
