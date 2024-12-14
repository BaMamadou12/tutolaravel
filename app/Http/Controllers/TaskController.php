<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks=Task::all();
        return view('task.index',compact('tasks'));
    }
    public function create(){
        
        return view('task.create');
    }
    public function store(Request $request){
     //dd($request);
     $completed=$request->completed ? true : false ;
     $validated=$request->validate(
        [
           'content'=>'required|string|',
        ]
        );
        if(!$validated){
   return view('task.create',['message'=>'L\'ajout a echoué !']);
        }

        $task=Task::create([
            'content'=>$validated['content'] ,
            'completed'=>$completed
        ]);
        $tasks=Task::all();
        return view('task.index',compact('tasks'));
    }

    public function destroy($id){
        $task= Task::findOrFail($id);
        //dd($task);
        $task->delete();
        $tasks=Task::all();
        return view('task.index',compact('tasks'));
    }


    //methode qui permet de renvoyer la page update
     public function page_update($id){
      
       $task=Task::findOrFail($id);

        return view('task.update',compact('task'));
    }
    public function update(Request $request, $id){
      //dd($request);
      
      $validated=$request->validate(['content'=>'required|string']);
      $completed=$request->completed ? true : false ;
      //dd($completed);
      $task=Task::where('id',$id)->update([
        'content'=>$validated['content'],
        'completed'=>$completed
      ]);
      $tasks=Task::all();
        return view('task.index',compact('tasks'));
    }
}
