<?php

namespace App\Repository\Eloquent;
use Illuminate\Database\Eloquent\Model;
use App\Repository\BaseInterface;


class BaseRepository implements BaseInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAllData()
    {
        return $this->model->all();
    }
    public function storeData(array $data)
    {
       
        $model = $this->model->create($data);

        return $model->fresh();
    }

}