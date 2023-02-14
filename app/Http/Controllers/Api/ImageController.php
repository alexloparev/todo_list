<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function add(ImageRequest $request)
    {
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extention = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = "image/" . $filename . "_" . time() . "." . $extention;
            $path = $request->file('image')->storeAs('public', $fileNameToStore);
        }
        return response()->json([
            'url' => env('APP_URL') . Storage::disk()->url($path)
        ]);
    }
}
