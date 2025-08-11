<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $tasks =Task::all();
        $tasks = auth()->user()->UserHastasks()->latest()->get();
        return view('pages.index', compact('tasks'));
        //    return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()

    {
      return view('pages.Addtask');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate =$request ->validate([
             'title'   => 'required',
        ]);

        $validate['user_id'] = auth()->id();

        Task::create($validate);
        return redirect('tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $tasks =Task::findOrFail($id);
        return view('pages.edit', compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
         $validate =$request ->validate([
             'title'   => 'required',
        ]);

        $tasksId =Task::find($id);
        $tasksId->update($validate);
        return redirect('tasks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $taskId =Task::findOrFail($id);
        $taskId->delete();
        return redirect('tasks');

    }
}
