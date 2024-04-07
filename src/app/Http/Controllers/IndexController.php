<?php

namespace App\Http\Controllers;

// Eloquentを使用できるようにモデルを読み込む
use App\Models\User;
use App\Models\Category;
use App\Models\Contact;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        //index.php を呼び出す
        //return view('index');

        $users = Author::all(); //User::all();
        return view('index', ['users' => $users]);
    }
}
