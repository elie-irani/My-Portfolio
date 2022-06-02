<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function show($postId)
    {
        return response()->json(["result" => "ok"], 201);
    }
}
