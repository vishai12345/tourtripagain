 @extends('layouts.app')

 @section('content')

 <?php 
foreach($results as $result)
{
    echo $result['id'];
    echo $result['from_loc'];
    echo $result['medium_id'];
    echo $result['airports'];
    echo $result['destination'];
    echo $result['category_id'];
    echo $result['description'];
    echo $result['destination_type'];
    
    $string = str_random(40);
    
 $value = old('value');
   dump($value);
      dump($string);
    
}


 ?>

  @endsection