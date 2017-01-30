<?php
namespace App\Services;
use Illuminate\Database\Eloquent\Model;
use App\Repo\BaseRepo;

Class BaseService{
     public function getAll(Model $model)
    {
        $baseRepo =  new BaseRepo();
         return $baseRepo->getAll($model);
    }
}
