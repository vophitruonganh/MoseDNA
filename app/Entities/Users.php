<?php

namespace MoseDNA\Entities;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Users extends Eloquent {
    protected $connection = 'mongodb';
    protected $collection = 'users';
}
