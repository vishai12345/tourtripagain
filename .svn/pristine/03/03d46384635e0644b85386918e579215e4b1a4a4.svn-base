<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Services\BaseService;
use App\Category;
use App\Medium;
use App\DestinationType;

class BaseController extends Controller
{
protected $baseService;
public function __construct(BaseService $baseService) {
		$this->baseService = $baseService;
	}
        
    public function index(){
        $category =  new Category();
        $categories = $this->getAll($category);
        $data['categories']=$categories;
        
        $medium =  new Medium();
        $mediums = $this->getAll($medium);
        $data['mediums']=$mediums;
        
        $destinationType =  new DestinationType();
        $destinationTypes = $this->getAll($destinationType);
        $data['destinationTypes']=$destinationTypes;
        
        return view('index',$data); 
    }
    
    public function getAll(Model $model){
       return $this->baseService->getAll($model); 
       
    }
}
