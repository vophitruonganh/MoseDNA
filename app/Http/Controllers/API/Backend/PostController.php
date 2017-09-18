<?php

namespace MoseDNA\Http\Controllers\API\Backend;

use Illuminate\Http\Request;
use MoseDNA\Entities\Posts;
use MoseDNA\Http\Controllers\Controller;

class PostController extends Controller
{
    function index(){
        return Posts::all()->toJson();
    }
}
