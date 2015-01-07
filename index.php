<!DOCTYPE html>
<!--The index page includes all the related including portion of the page from includes folder -->
<html>
<head>
	<title>Ajeet Khan</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>

</head>
<body background="grey">
	<!-- To include header -->
	<?php 
		include('includes/header.inc.php'); 
		//include('includes/navbar.inc.php');

		//include('includes/content.inc.php');

	?>
	
    <div class="row">
    <div class="col-xs-12">
      <nav class="navbar navbar-default " role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <a id="aboutme" class="navbar-brand" href="#">About Me |</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li  ><a id="projects" href="#" > Projects |</a></li>
                  <li><a id="academics" href="#"> Academics |</a></li>
                  <li><a id="research" href="#"> Research |</a></li>
                  <li><a id="contactme" href="#"> Contact Me |</a></li>
                  
                  </li>
                </ul>
             	
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
      </nav>
     </div><!-- end of col-xs-12 div -->
    </div><!-- end of row div -->
    
    <div id="result"></div>
 


<!-- show_page function to show the content according to the clicked navbar item -->
<script type="text/javascript">
    /*function show_page(i){
        alert(i);
        //var datastring='id=' + i;
        if (i==1) {
          alert("inside ");
          $("#result").load('content.inc.html #target');
        };*/
        /*$.ajax({
            type:'POST', 
            url: 'content.inc.php', 
            data:datastring, 
            success: function(response) {
              // Any code to execute on a successful return
              //alert("success");

            }
        });*/
    
    //}//end of show_page

  $(document).ready(function(){
      //alert('onload');
      	$('#result').load('app/aboutme.php');
       $("#projects").click(function(){
        $('#result').load('app/project.php');
         //alert("Thanks for visiting!");
       }); 
 
       $("#academics").click(function(){
       	$('#result').load('app/academics.php');
        // alert("Thanks for visiting!");
       });

       $("#research").click(function(){
       	$('#result').load('app/research.php');
        // alert("Thanks for visiting!");
       });

       $("#aboutme").click(function(){
       	$('#result').load('app/aboutme.php');
        // alert("Thanks for visiting!");
       });

       $("#contactme").click(function(){
       	$('#result').load('app/contactme.php');
        // alert("Thanks for visiting!");
       });


     });
</script>


<?php 
			include('includes/footer.inc.php');

?>
</body>
</html>


