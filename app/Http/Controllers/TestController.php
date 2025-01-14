<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function testdb()
    {
        $users = DB::select('select * from user where role = ?', [2]);
        return view('test', ['users' => $users]);
    }

    public function index()
    {
        $responses = Http::local()->get('/test/first');
        
        return [
            'first' => $responses->body(),
        ];
    }

    public function first()
    {
        return 'This is the first response';
    }

    public function second()
    {
        return 'This is the second response';
    }

    public function third()
    {
        return 'This is the third response';
    }
}
