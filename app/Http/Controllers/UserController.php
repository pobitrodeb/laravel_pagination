<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $allUser = User::all();
        return view('welcome', compact('allUser'));
    }
}
