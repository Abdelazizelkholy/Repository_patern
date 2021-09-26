<?php

namespace App\Repositories\Eloquent;
use App\Repositories\EloquentRepositoryInterface;

class BaseRepository implements EloquentRepositoryInterface
{

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->get();
    }
}