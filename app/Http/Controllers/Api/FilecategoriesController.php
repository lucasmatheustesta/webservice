<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\FileCategorie;

class FileCategoriesController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(FileCategorie $model)
    {
        $this->model = $model;
    }
}
