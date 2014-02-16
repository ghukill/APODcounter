<!DOCTYPE php>
<html>
<head>
    <meta charset="utf-8">
    <title>awesome page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">



    <!--jquery-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>

    <!--Mustache-->
    <script src="inc/mustache/jquery.mustache.js"></script>
    <script type="text/javascript" src="inc/mustache/mustache.js"></script>

    <!-- Bootstrap -->
	<link href="inc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Local JS -->
    <script src="js/main.js" type="text/javascript"></script>

    <!-- local css -->
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">        
    
    <!--Pagination-->
    <!--<script type="text/javascript" src="inc/jquery.bootpag.min.js"></script>-->       
    
    <!--jscookie-->
    <script src="inc/jquery_cookie/jquery.cookie.js" type="text/javascript"></script>
</head>

<body>

	<div id="main_body" class="container">       
    	<div class="row">
			<div id="counter_container" class="col-md-12">
				<span id="counter">0</span></br>                
                <button type="button" class="btn btn-default btn-sm" onclick="timerStart(); return false;">spin the wheel!</button>
			</div>                        
		</div>
        <div class="row">
            <div class="col-mod-12">
                <h1 id="message"></h1>
            </div>
        </div>

    </div><!-- /.container -->


    <!-- Boostrap -->
    <script src="inc/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            loadAPOD();
        });
    </script>
</body>


</html>
