<?php

namespace App\Services;

class UserService {
    public function getAllUsers() {
        return \App\Models\User::all();
    }
}
