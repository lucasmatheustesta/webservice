<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Video;
use App\VideoCategorie;
use App\Year;

class VideosController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = ['videocategorie', 'year'];

    public function __construct(Video $model)
    {
        $this->model = $model;
    }
}
