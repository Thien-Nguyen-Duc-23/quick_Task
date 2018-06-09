<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class HomeController extends Controller
{
    public function getValue()
    {
    	$tasks = Task::all();
    	return view('tasks',compact('tasks'));
		
    	 
    }
}
