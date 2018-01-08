<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Classe;
use App\Year;
use App\Scholl;

class ClassesController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = ['school', 'year'];

    public function __construct(Classe $model)
    {
        $this->model = $model;
    }
}
