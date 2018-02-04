<?php
namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests\createTaskRequest;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TasksController extends Controller
{
    public function index () {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create () {
        return view('tasks.create');
    }

    public function store (createTaskRequest $request) {
        /*long way add to db*/
        //        $this->validate($request, ['title' => 'required', 'descriptions' => 'required']);
        //        $task=new Task();
        //        $task->fill($request->all());
        //        $task->save();
        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function edit ($id) {
        $myTask = Task::find($id);

        return view('tasks.edit', ['task' => $myTask]);
    }

    public function update (Request $request, $id) {
        $this->validate($request, ['title'=>'required','descriptions'=>'required']);
        $myTask = Task::find($id);
        $myTask->update($request->all());
        return redirect()->route('tasks.index');
    }

    public function show ($id) {

$myTask=Task::find($id);
return view('tasks.show',['task'=>$myTask]);
    }

    public function destroy($id){
        Task::find($id)->delete();
        return redirect()->route('tasks.index');
    }


}
