<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function index()
    {
        $new = DB::table('products')->orderBy('id', 'DESC')->get()->take(4);

        return view('index')->with('news', $new);
    }
    
    public function home()
    {
        return view('users.home');
    }

    public function countusers()
    {
        return view('users.countusers');
    }
}
