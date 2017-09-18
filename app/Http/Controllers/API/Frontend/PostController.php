<?php

namespace MoseDNA\Http\Controllers\API\Frontend;

use Illuminate\Http\Request;
use MoseDNA\Entities\Posts;
use MoseDNA\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    function getAllPosts(){
        dd(Posts::all()->toJson());
        return Posts::all()->toJson();
    }



}
