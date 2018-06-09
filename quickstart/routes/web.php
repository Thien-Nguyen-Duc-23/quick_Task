<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;
use Illuminate\Http\Request;
Route::get('/a', function () {
    return view('tasks');
});

 Route::get('/','HomeController@getValue') ;
 
 Route::post('/tasks',function(Request $request){

 	$task = new Task();
      $task->name = $request->name;
     $task->save();
     return redirect('/');
 });

 Route::delete('/tasks/{task}',function(tasks $task)
{
	$task->delete();
	return redirect('/');
});
// 
