<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTask;
use App\Http\Requests\UpdateState;
use App\Models\Task;
use Exception;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // GET /api/task/
    public function index()
    {
        return response()->json([
            'response' => Task::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    /* Todo : Añade las validaciones de la clase AddTask */
    // POST /api/task
    public function store(AddTask $task)
    {

         // Insertar Datos a la tabla Task
         try {
            return response()->json([
               'ok' => true,
               'response' => Task::create($task->all())
            ], '200');

         // retorna la clase AddTask

         } catch (Exception $e) {

            // devuelve error 500, con el detalle del error
            return response()->json([
                'ok' => false,
                'msg' => 'server error',
                'detail' => $e->getMessage()
            ]);
        }

    }

    /**
     * Display the specified resource.
     */

    /* Todo : Retorna los datos del Task seleccionado */
    // GET /api/task/{id}
     public function show(Task $task)
    {
        return response()->json([
           'ok' => true,
           'response' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    /* Todo : Añade las validaciones de la clase AddTask */
    // PUT /api/task/{id}

     public function update(AddTask $request, Task $task)
    {
        try {

            $task->title = $request->title;
            $task->description = $request->description;
            $task->dni = $request->dni;
            $task->due_date = $request->due_date;
            $task->save();

            return response()->json([
                'ok' => true,
                'response' => $task
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => 'server error',
                'detail' => $e->getMessage()
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */

     // DELETE /api/task/{id}
    public function destroy(Task $task)
    {
        try {
            return response()->json([
                'ok' => true,
                'response' => $task->delete()
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => 'server error',
                'detail' => $e->getMessage()
            ]);
        }
    }

    /* Todo : Añade las validaciones de la clase UpdateState */

    // POST /api/task/update-state/{id}
    public function updateState(UpdateState $request, Task $task) {
        try {

            $task->state = $request->state;
            $task->save();

            return response()->json([
                'ok' => true,
                'response' => $task
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => 'server error',
                'detail' => $e->getMessage()
            ]);
        }
    }
}
