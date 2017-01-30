@extends('layouts.app')
@section('content')

<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-12 grid-list">
            <i class="fa fa-th fa-2x list-color " id="grid" aria-hidden="true"></i>
            <i class="fa fa-th-list fa-2x" id="list" aria-hidden="true"></i>
        </div>
    </div>

    <div id="place" class="row">

        <?php
        $fav_arr = [];
        if (isset($_COOKIE['favourite'])) {
            $fav_arr = json_decode($_COOKIE['favourite'], true);
          
        }
        $fav_sec = "";
        $simple_sec = "";
       
        if (isset($results) && count($results)) {
       
            foreach ($results as $result) {
                if (in_array($result->id, $fav_arr)) {
                    $fav_sec = $fav_sec . '
                            <div class="col-sm-4"  id="showHideDiv'.$result->id.'">
                    <div class="title"> <h4>' . $result->destination . '</h4></div>
                    <div id="myCarousel{{$result->id}}" class="carousel slide" data-ride="carousel">
                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="public/images/img_chania.jpg" alt="Chania" height="300" width="460">
                            </div>

                            <div class="item">
                                <img src="public/images/img_chania2.jpg" alt="Chania" height="300" width="460">
                            </div>

                            <div class="item">
                                <img src="public/images/img_flower.jpg" alt="Flower" height="300" width="460" >
                            </div>

                            <div class="item">
                                <img src="public/images/img_flower2.jpg" alt="Flower" height="300" width="460" >
                            </div>

                            <div class="icon-data">           
                                <i class="fa fa-heart" aria-hidden="true" onclick="favorite(' . $result->id . ')"></i>  
                                  <i class="fa fa-times" aria-hidden="true" onclick="showHide('.$result->id.')"></i>  
                                <i class="fa fa-trash-o" aria-hidden="true" onclick="removeFavorite(' . $result->id . ')"></i>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel' . $result->id . '" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel' . $result->id . '" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="sort_descript" style="margin-bottom:30px">
                        <a title="Sort description title" id="sort_id1" class="sort-data" >View Description</a>   
                    </div> 
                    <div id="full-descript1" class="full-descript" style="display: none">
                        ' . $result->description . '
                    </div>

                </div>';
                } else {

                    $simple_sec = $simple_sec . '
                <div class="col-sm-4" id="showHideDiv'.$result->id.'">
                    <div class="title"> <h4>' . $result->destination . '</h4></div>
                    <div id="myCarousel{{$result->id}}" class="carousel slide" data-ride="carousel">
                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="public/images/img_chania.jpg" alt="Chania" height="300" width="460">
                            </div>

                            <div class="item">
                                <img src="public/images/img_chania2.jpg" alt="Chania" height="300" width="460">
                            </div>

                            <div class="item">
                                <img src="public/images/img_flower.jpg" alt="Flower" height="300" width="460" >
                            </div>

                            <div class="item">
                                <img src="public/images/img_flower2.jpg" alt="Flower" height="300" width="460" >
                            </div>

                            <div class="icon-data">           
                                <i class="fa fa-heart" aria-hidden="true" onclick="favorite(' . $result->id . ')"></i>  
                              <i class="fa fa-times" aria-hidden="true" onclick="showHide('.$result->id.')"></i>  
                                <i class="fa fa-trash-o" aria-hidden="true" onclick="removeFavorite(' . $result->id . ')"></i>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel' . $result->id . '" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel' . $result->id . '" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="sort_descript" style="margin-bottom:30px">
                        <a title="Sort description title" id="sort_id1" class="sort-data" >View Description</a>   
                    </div> 
                    <div id="full-descript1" class="full-descript" style="display: none">
                        ' . $result->description . '
                    </div>

                </div>' ;
                }
            }

            echo $fav_sec;
            echo $simple_sec;
        } else {
            echo "<h3>No Result Found.</h3>";
        }
        ?>



    </div>
</div>

@endsection