<?php

namespace MoseDNA\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use MoseDNA\Http\Controllers\Controller;
use MoseDNA\Entities\Posts;
class PostsController extends Controller
{
    function index(){
        return Posts::all()->toJson();
    }
}
