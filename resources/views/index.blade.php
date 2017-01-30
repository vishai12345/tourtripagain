    @extends('layouts.app')

@section('content')

    <header id="myCarousel" class="carousel slide" style="top: -18px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('public/images/slide11.jpg');"></div>

            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('public/images/slide7.jpg');"></div>

            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('public/images/slide31.jpg');"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
           
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
           
        </a>
    
            
  {{ Form::open(array('method' => 'post','action'=>'SearchController@getResults')) }}
        <div class=" form-group slider-form form-bg ">
         <div class="row">
            <div class=" col-md-6">
              
                <div class="form-group">

                    {{ Form::label('location', 'Location') }} {{ Form::select('location', array('Singapur' => 'Singapur', 'India' => 'India',), 'Singapur', ['class' => 'form-control' ])}}
                </div>
                </div>
               <div class=" col-md-5">
                <div class="form-group">
                    {{ Form::label('rating', 'Rating') }}
                     <div class="form-group">
                         <div><span id="stars-green" data-rating="1"></span>
                             <span class="glyphicon glyphicon-home" style="font-size:20px;margin-left:10px;top: -3px;color:gold"></span></div>
                  
      
                  </div>
                </div>
                </div>
             </div>
            
            <div class="row">
                 <div class=" col-md-6">
                <div class="form-group"> 
                    {{ Form::label('category', 'Category') }}
                    <select name="category_id"  class="form-control">
                    <?php
                    if (isset($categories))
                    {
                        foreach($categories as $category){
                            $cat_id=$category["id"];
                            $cat_name=$category["name"];
                            ?>
                              <option value="{{ $cat_id }}">{{ $cat_id }}</option>
                        <?php }
                    }
                       ?>
                              </select>
                    
                </div>
                     </div>
                
                <div class="col-md-6">
                     <div class="form-group">
                    {{ Form::label('destination', 'Destination')}} 
                      <div class="form-group" style="padding-top:7px;">
                       <?php
                    if(isset($destinationTypes)){
                        foreach($destinationTypes as $destinationType){
                       ?>
                    {{ Form::label($destinationType["name"], $destinationType["name"])}} 
                    {{ Form::checkbox($destinationType["name"], $destinationType["id"])}} 
                    <?php
                        }
                    }
                    ?>

                </div>
                </div>
                    </div>
                </div>
            
                <div class="row">
                <div class='col-md-3 '>
                     <div class="form-group">
                         <label for="from">From</label>
                         <div  class='input-group date'>
               <input class="form-control" type="text" id="departing">
                <span class="input-group-addon" id="cal1">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                
                </div>
                </div>
                     </div>
                    
           <div class='col-md-3 '>
                     <div class="form-group">
                         <label for="to">To</label>
                         <div  class='input-group date'>
                <input class="form-control" type="text" id="returning">
                <span class="input-group-addon" id="cal2">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                
                </div>
                </div>
                     </div> 
                    
                    <div class="col-md-6">
                        <div class="form-group">
                    {{ Form::label('medium', 'Medium')}} 
                    <div class="form-group" style="padding-top:10px;">
                    <?php
                    if(isset($mediums)){
                        foreach($mediums as $medium){
                       ?>
                    {{ Form::label( '','',array('class'=>$medium["icon"])) }}
                    {{ Form::checkbox($medium["name"], $medium["id"])}}  
                    
                     <?php
                    }
                      }
                       ?>
                </div>
                </div>
                        </div>
    </div>
   
                <div  class="row">
                    <div class="col-md-6" style="margin-bottom:15px">
                   <p>Price:	$<span class="example-val" id="slider-margin-value-min"></span>
			<span class="example-val" id="slider-margin-value-max"></span>
                   </p>
			<div id="drag-fixed"></div>
                </div>
                    
                    <div class="col-md-2">
                    <div class="from-group">
                 
 {{ Form::label('adult', 'Adult') }} 
 
 {{ Form::select('people', array('1' => '1', '2' => '2','3' => '3','4' => '4','5' => '5'), '1', ['class' => 'form-control' ])}}

                  </div>
                    </div>
                    
                    <div class="col-md-2">
                <div class='from-group' >
                   
 {{ Form::label('child', 'Child (<12 Years)') }} {{ Form::select('people', array('1' => '1', '2' => '2','3' => '3','4' => '4','5' => '5'), '1', ['class' => 'form-control' ])}}

                  </div>
                    </div>
                    
                    <div class="col-md-2">
                 <div class='from-group' >
 {{ Form::label('child', 'Infant (<2 Years)') }} {{ Form::select('people', array('1' => '1', '2' => '2','3' => '3','4' => '4','5' => '5'), '1', ['class' => 'form-control' ])}}
 
                  </div>
                    </div>
                    
                    </div>
                
            

                  
            
                <div class="row">
                    <div class="col-md-6 col-md-offset-5">
      {{ Form::submit('Submit!',['class' => 'btn btn-primary '] ) }}
      </div>
      </div>
                

             </div>

      
  
     {{ Form::close() }}
     
     
    </header>
    
     
    @endsection
