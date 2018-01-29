<?php
namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;


class TasksController extends Controller
{


    public function index () {
        return view('tasks.index');
    }

    public function create () {
        return view('tasks.create');
    }

    public function store (Request $request) {
/*long way add to db*/
//        $this->validate($request, ['title' => 'required', 'descriptions' => 'required']);
//        $task=new Task();
//        $task->fill($request->all());
//        $task->save();


        $this->validate($request, ['title' => 'required', 'descriptions' => 'required']);
        Task::create($request->all());

        return redirect()->route('tasks.index');
    }
}
