<?php

namespace App\Repo;

use App\Repo\BaseRepo;
use App\Destination;
use App\DestinationType;
use App\Medium;

Class SearchRepo extends BaseRepo {

    public function getResults($data) {

        $mediumArry = [];
        $mediumType = new Medium();
        $mediumTypes = $this->getAll($mediumType);

        foreach ($mediumTypes as $value) {
            if (isset($data[$value->name])) {
                $mediumArry [$data[$value->name]] = 1; 
            }
        }
        
          
         $destArray = [];
        $destinationType = new DestinationType();
      $destinationTypes = $this->getAll($destinationType);
       
        foreach ($destinationTypes as $value) {
            if (isset($data[$value->name])) {
                $destArray [$data[$value->name]] = 1; 
            } 
        }
        
        
      
        $destination = new Destination();

        $results = $destination->Where('category_id', $data['category_id'])
                ->Where('status', 1)
                ->get();
       
        
        $finalResult = [];
     
        if(count($destArray)>0){
        if(count($mediumArry)>0){
        foreach ($results as $result) {
            $destArrayDB = json_decode($result->destination_type, true);
            
            
            $mediumArrayDB = json_decode($result->medium_type,true);
            
         
            $matchedArray = array_intersect_assoc($destArrayDB, $destArray);
          
            
            $matchArray =  array_intersect_assoc($mediumArrayDB,$mediumArry);
           
          
          if (  (sizeof($matchedArray) > 0) && (sizeof($matchedArray) == sizeof($destArray) ) && (sizeof($matchArray) > 0) && (sizeof($matchArray) == sizeof($mediumArry))   ) {
                $finalResult[] = $result;
            }
            
            
        }  
        }else{
            
             foreach ($results as $result) {
            $destArrayDB = json_decode($result->destination_type, true);
            
            
            $mediumArrayDB = json_decode($result->medium_type,true);
            
         
            $matchedArray = array_intersect_assoc($destArrayDB, $destArray);
          
            
            $matchArray =  array_intersect_assoc($mediumArrayDB,$mediumArry);
           
          
          if (  (sizeof($matchedArray) > 0) && (sizeof($matchedArray) == sizeof($destArray) )   ) {
                $finalResult[] = $result;
            }
            
            
        }
            
        }
        }  else{
            if(count($mediumArry)>0){
        foreach ($results as $result) {
            $destArrayDB = json_decode($result->destination_type, true);
            
            
            $mediumArrayDB = json_decode($result->medium_type,true);
            
         
            $matchedArray = array_intersect_assoc($destArrayDB, $destArray);
          
            
            $matchArray =  array_intersect_assoc($mediumArrayDB,$mediumArry);
           
          
          if (  (sizeof($matchArray) > 0) && (sizeof($matchArray) == sizeof($mediumArry))   ) {
                $finalResult[] = $result;
            }
            
            
        }  
        }else{
            
             foreach ($results as $result) {
            $destArrayDB = json_decode($result->destination_type, true);
            
            
            $mediumArrayDB = json_decode($result->medium_type,true);
            
         
            $matchedArray = array_intersect_assoc($destArrayDB, $destArray);
          
            
            $matchArray =  array_intersect_assoc($mediumArrayDB,$mediumArry);
           
          
        
                $finalResult[] = $result;
            
            
            
        }
            
        }
          
        }
    
        return $finalResult;
    }

}
