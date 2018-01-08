<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\File;

class FilesController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(File $model)
    {
        $this->model = $model;
    }
}
