<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DestinationService;
class SearchController extends BaseController
{
    protected $destinationService;
    public function __construct(DestinationService $destination_service) {
		$this->destinationService = $destination_service;
	}
        
       /* get search result by user input on home page */ 
    public function getResults(Request $request){
      $data = $request->all();
      $results = $this->destinationService->getResults($data);
   
      return  view('search-results',['results'=>$results]);
      
     
    }
     public function setCookies(Request $request){
        $fav_arr = array();
        $value = $request->location;
        $cookie_name = "favourite";
         if(isset($_COOKIE['favourite'])) {
             $fav_arr = json_decode($_COOKIE['favourite'],true);
            if (!in_array($value, $fav_arr))       
            {
                array_push($fav_arr, $value);
            }
         }  
         else{
              array_push($fav_arr, $value);
         }
          $cookie_value = json_encode($fav_arr);
        
         setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
     }
      public function deleteCookies(Request $request){
          
           $fav_arr = array();
        $value = $request->location;
        $cookie_name = "favourite";
         if(isset($_COOKIE['favourite'])) {
             $fav_arr = json_decode($_COOKIE['favourite'],true);
               if (in_array($value, $fav_arr))       
            {
               $key = array_search($value, $fav_arr);
               unset($fav_arr[$key]);
            }
             $cookie_value = json_encode($fav_arr);
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

         }  
    
            }
}
