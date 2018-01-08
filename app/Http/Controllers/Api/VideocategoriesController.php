<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\VideoCategorie;

class VideoCategoriesController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(VideoCategorie $model)
    {
        $this->model = $model;
    }
}
