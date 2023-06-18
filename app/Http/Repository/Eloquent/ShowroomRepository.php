<?php

namespace App\Repository\Eloquent;

use App\Models\Showroom;
use Illuminate\Http\Request;
use App\Repository\ShowroomInterface;

class ShowroomRepository extends BaseRepository implements ShowroomInterface
{

    protected $model;
    public function __construct(Showroom $model)
    {
        $this->model = $model;
    }
}