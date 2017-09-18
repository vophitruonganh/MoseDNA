<?php

namespace MoseDNA\Entities;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Posts extends Eloquent {
    protected $connection = 'mongodb';
    protected $collection = 'posts';
}
