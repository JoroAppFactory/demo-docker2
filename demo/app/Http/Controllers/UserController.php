<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = Http::get('http://127.0.0.1:8089/users');
        return $users->json();
    }
}
