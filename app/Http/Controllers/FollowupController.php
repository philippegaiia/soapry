<?php

namespace App\Http\Controllers;

use App\Task;
use App\Batch;
use App\Followup;
use Illuminate\Http\Request;

class FollowupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Task $task)
    {
        $followups = Followup::all();
        // dd($followups);
        return view('followups.index', compact('followups', 'task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Batch $batch)
    {
        $tasks = Task::all();
        $followup = new Followup();

        return view('followups.create', compact('batch', 'tasks', 'followup'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Batch $batch, Followup $followup)
    {
        $data = request()->validate([
            'done' => 'required',
            'due_date' => 'required',
            'task_id' => 'required',
        ]);

        $data['batch_id'] = $batch->id;

        $followup = Followup::create($data);

        return redirect('batches/'.$batch->id)->with('message', 'Une tâche de suivi de production a été ajoutée');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Followup $followup)
    {
        $tasks = Task::all();

        return view('followups.edit', compact('followup', 'tasks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'done' => 'required',
            'due_date' => 'required',
            'task_id' => 'required',
        ]);

        $followup = Followup::findOrFail($id);
        $batchId = $followup->batch_id;

        $followup->fill($data);
        $followup->save();

        return redirect('batches/'.$batchId)->with('message', 'Une tâche de suivi de production a été mise à jour');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Followup $followup)
    {
        $followup->delete();

        return redirect('batches/' . $followup->batch->id)->with('message', 'Une tâche de suivi de production a été effacée');
    }
}
