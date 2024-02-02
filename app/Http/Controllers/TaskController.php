<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      /*  $datos['Task']=Task::paginate(5);
        return view('tarea.index',$datos );*/
        $Task =  DB::table('tasks')->get();
        return view('dashboard', compact('Task'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarea.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosTarea = request()->except('_token');
        Task::insert( $datosTarea);
       
        return redirect()->action([TaskController::class, 'index']);

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
        $tarea=Task::findOrFail($id);
        return view('tarea.edit', compact('tarea'));
        return redirect()->action([TaskController::class, 'index']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $datos = request()->except(['_token', '_method']);
        Task::where('id', $id)->update($datos);

        $tarea=Task::findOrFail($id);
        return redirect()->action([TaskController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
                //
                Task::destroy($id);
                return redirect('tarea');
        
    }
}
