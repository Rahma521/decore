<?php

namespace App\Repository\Eloquent;

use App\Models\Designer;
use Illuminate\Http\Request;
use App\Repository\DesignerInterface;

class DesignerRepository extends BaseRepository implements DesignerInterface
{

    protected $model;
    public function __construct(Designer $model)
    {
        $this->model = $model;
    }
    
}