<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Year;

class YearsController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(Year $model)
    {
        $this->model = $model;
    }
}
