<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use App\Http\Resources\TodoResource;
use App\Http\Resources\TodoResourceCollection;
use App\Models\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): JsonResponse
    {
        return response()->json([
            'todos' => new TodoResourceCollection(Todo::whereUserId(auth()->id())->get())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create(TodoRequest $request): JsonResponse
    {
        Todo::updateOrCreate([
            'title' => $request->title,
            'image' => $request->image,
            'user_id' => auth()->user()->id
        ]);
        return response()->json([
            'status' => 'success',
            'todos' => new TodoResourceCollection(Todo::whereUserId(auth()->id())->get())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return JsonResponse
     */

    public function edit(Todo $todo, TodoRequest $request)
    {
        Todo::whereId($todo->id)->update([
            'title' => $request->title,
            'image' => $request->image,
        ]);
        $todo->refresh();
        return response()->json([
            'status' => 'success',
            'todo' => new TodoResource($todo)
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Todo $todo
     * @return JsonResponse
     */

    public function delete(Todo $todo)
    {
        if (auth()->user()->id == $todo->user_id)
            $todo->delete();
        return response()->json([
            'status' => 'success',
            'todos' => new TodoResourceCollection(Todo::whereUserId(auth()->id())->get())
        ]);
    }
}
