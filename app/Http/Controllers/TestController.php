<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from user where role = ?', [2]);
        return view('test', ['users' => $users]);
    }
}