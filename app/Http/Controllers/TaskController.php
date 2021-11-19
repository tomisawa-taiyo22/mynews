<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = auth()->user()->statuses()->with('tasks')->get();
        
        return view('tasks.index', compact('tasks'));
    }
}
