<?php
namespace App\Services;
use App\Services\BaseService;
use App\Repo\SearchRepo;

Class DestinationService extends BaseService{
    
    protected $searchRepo;
     public function __construct(SearchRepo $search_repo) {
		$this->searchRepo = $search_repo;
	}
    public function getResults($data){
       
     return $this->searchRepo->getResults($data);
     
    }
}
