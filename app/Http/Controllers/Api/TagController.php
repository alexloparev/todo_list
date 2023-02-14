<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Http\Resources\TagsResourceCollection;
use App\Http\Resources\TodoResourceCollection;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([
            'tags' => new TagsResourceCollection(Tag::whereUserId(auth()->id())->get())
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function filter(Tag $tag)
    {
        return response()->json([
            'todos' => new TodoResourceCollection($tag->todo)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function add(TagRequest $request)
    {
        $tag = Tag::create([
            'label' => $request->label,
            'color' => $request->color,
            'user_id' => auth()->user()->id,
        ]);
        $tag->todo()->attach($request->todoId);
        return response()->json([
            'status' => 'success',
            'tags' => new TagsResourceCollection(Tag::whereUserId(auth()->id())->get())
        ]);
    }

}
