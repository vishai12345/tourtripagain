<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="public/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="public/css/jquery-ui.css">
	<link href="public/css/full-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
        <link rel="stylesheet" href="public/css/footer.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/logo-nav.css" rel="stylesheet">
    <link href="public/css/app.css" rel="stylesheet">
     <link href="public/css/trip.css" rel="stylesheet">
      <link rel="stylesheet" href="public/css/nouislider.css">



     
   
</head>

<body>
    <div id="app" style="position:relative">
         <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav" >
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </div>
    
    <div class="">
        
              @yield('content') 
        
    </div>
   
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

		</footer>
      
	
    <!-- Scripts -->
      <script type="text/javascript" src="public/js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript">
    jQuery(function (e) {
         jQuery('#datetimepicker6').datetimepicker();
         jQuery('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
         jQuery("#datetimepicker6").on("dp.change", function (e) {
            jQuery('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
         jQuery("#datetimepicker7").on("dp.change", function (e) {
             jQuery('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
    </script>
    <script src="public/js/app.js"></script>
    <script src="public/js/bootstrap.js"></script>
  <script type="text/javascript" src="public/js/moment.js"></script>
    <script src="public/js/jquery.js"></script>
  <script type="text/javascript" src="public/js/jquery-ui.js"></script>
    <script type="text/javascript" src="public/js/script.js"></script>

  <script src="public/js/bootstrap.min.js"></script>
    <script>
        jQuery('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>
      
          

   <script type="text/javascript" src="public/js/bootstrap-datetimepicker.min.js"></script>

    
 <script type="text/javascript" src="public/js/ratings.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

$("#stars-green").rating('create',{coloron:'gold'});
});

</script>
   

      <script src="public/js/nouislider.js"></script>	
      <script>
var dragFixedSlider = document.getElementById('drag-fixed');

	var marginMin = document.getElementById('slider-margin-value-min'),
	marginMax = document.getElementById('slider-margin-value-max');	
    	
noUiSlider.create(dragFixedSlider, {
	start: [ 500, 10000 ],
	behaviour: 'drag',
	
	connect: true,
	range: {
		'min': [     500 ],
		'10%': [   0,  500 ],
		'15%': [  1500, 1000],
		'60%': [  5500, 1500 ],
		'max': [ 10000 ]
	}
	
});

(function( $ ){

dragFixedSlider.noUiSlider.on('update', function ( values, handle ) {
	if ( handle && values ) {
	
		marginMax.innerHTML = values[handle];
		
		} else {
		marginMin.innerHTML = values[handle];	
	}
	
}
);
}

)( jQuery );	


</script>
      
      
      
  <!--for date pickeer add dev --->
  <script type="text/javascript">
$(document).ready(function() {
        
    $("#departing").datepicker();
    $("#returning").datepicker();
     
        $("#cal1").click(function() { 
   $("#departing").datepicker( "show" );
  });
    $("#cal2").click(function() { 
   $("#returning").datepicker( "show" );
  });
    $("button").click(function() {
    	var selected = $("#dropdown option:selected").text();
        var departing = $("#departing").val();
        var returning = $("#returning").val();
        if (departing === "" || returning === "") {
			alert("Please select departing and returning dates.");
        } else {
			confirm("Would you like to go to " + selected + " on " + departing + " and return on " + returning + "?");
        }
    });
});
</script>
 <script type="text/javascript">
     /// add js for title and description toggle
    $(document).ready(function(){

 $(".sort-data").click(function(){
           //$(this).parent().siblings().show();
           $(this).parent().next().slideToggle();
       });


});

</script>
<script type="text/javascript">
    // add for data show in list and grid dev.. 
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#place .col-sm-4').addClass('list-group-item');});
     $('#list').click(function(event){$('#list').addClass('list-color');});
          $('#grid').click(function(event){$('#list').removeClass('list-color');});
           $('#grid').click(function(event){$('#grid').addClass('list-color');});
            $('#list').click(function(event){$('#grid').removeClass('list-color');});

    $('#grid').click(function(event){event.preventDefault();$('#place .col-sm-4').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>

<script type="text/javascript">
 
   function makeFavourite(loc){
       var appUrl = '<?php echo url('/'); ?>';
    console.log(appUrl);
       var loc;
       console.log(loc);
$.ajax({
       method:"get",
       url:appUrl +'/make-favourite',
       data:{"location":loc},
       
    success: function(response){
}
});
}
</script>

<script type="text/javascript">
 
   function removeFavourite(loc){
       var appUrl = '<?php echo url('/'); ?>';
    console.log(appUrl);
       var loc;
       console.log(loc);
$.ajax({
       method:"get",
       url:appUrl +'/remove-favourite',
       data:{"location":loc},
       
    success: function(response){
}
});
}
</script>
<script>
function showHide(id) {
   
   $( '#showHideDiv'+id ).fadeOut(1000); 
}
</script>
</body>
</html>
