<?php


/**
 * Created by PhpStorm.
 * User: Venkatesh SM
 * Date: 1/10/2017
 * Time: 11:30 PM
 */
namespace venkateshsm\Todo\Http;

use App\Http\Controllers\Controller;
use venkateshsm\Todo\Todo;

class TodoController extends Controller {

    public function getUserTodoList() {

          $todos = Todo::orderBy('created_at')->get();

         return view('todo::todo-list')->with('todos',$todos);
    }

}