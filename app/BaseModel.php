<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function getAll(Model $model){
         return $model->all();
    }
}
