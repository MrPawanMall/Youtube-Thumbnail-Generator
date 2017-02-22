<!DOCTYPE html>
<html>
<head>
	<title>Youtube Thumbnail Generator by Pawan Mall</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Generator Youtube Thumbnail">
    <meta name="author" content="Pawan Mall">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Custom CSS -->
    <style>
	    /* Sticky footer styles
		-------------------------------------------------- */
		html {
		  position: relative;
		  min-height: 100%;
		}
		body {
		  background-color: #2a2a2a;	
		  /* Margin bottom by footer height */
		  margin-bottom: 0px;
		  padding-top: 0px;
	        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		}
		.footer {
			color: #fff !important;
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		  /* Set the fixed height of the footer here */
		  /* height: 60px; */
		  background-image: -webkit-linear-gradient(top,#3c3c3c 0,#222 100%);
	    background-image: -o-linear-gradient(top,#3c3c3c 0,#222 100%);
	    background-image: -webkit-gradient(linear,left top,left bottom,from(#3c3c3c),to(#222));
	    background-image: linear-gradient(to bottom,#3c3c3c 0,#222 100%);
	    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3c3c3c', endColorstr='#ff222222', GradientType=0);
	    filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
	    background-repeat: repeat-x;
	    border-radius: 4px;
		}


		/* Custom page CSS
		-------------------------------------------------- */
		/* Not required for template or sticky footer method. */

		body > .container {
		  padding: 60px 15px 0;
		}
		.container .text-muted {
	  		margin: 20px 0;
		}

		.footer > .container {
			  padding-right: 15px;
			  padding-left: 15px;
		}

		code {
		  	font-size: 80%;
		}
		textarea{
			width:100% !important;
			height:485px !important;
		}
		.ftext{
			padding-top: 9px;
		}
		a{
			color:#fff;
		}
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
            	<form action="index.php" method="get" style="margin-top: 10px;">
            		<div class="form-group row">
            		  <div class="col-md-6">
					  	<input type="text" name="url" id="url" class="form-control" placeholder="Paste here Youtube URL : https://www.youtube.com/watch?v=f_wKfDDmI38">	
					  </div>
					  <div class="col-md-3">
					  	<select name="thumbSize" id="thumbSize" class="form-control">
							<option value="default">1st Thumbnail</option>
							<option value="1">2nd Thumbnail</option>
							<option value="2">3rd Thumbnail</option>
							<option value="3">4th Thumbnail</option>
							<option value="0" selected>Default</option>
							<option value="hqdefault">HQ Default</option>
							<option value="sddefault">SD Default</option>
							<option value="mqdefault">MQ Default</option>
							<option value="maxresdefault">Max Res Default</option>
						</select>
					  </div>
					  <div class="col-md-3">
					  	<button type="button" id="get" class="btn btn-primary btn-block"><i class="fa fa-cog fa-spin fa-fw" aria-hidden="true"></i> Generate Thumbnail</button>
					  </div>
			  		</div>
            	</form>
	            <!-- /.navbar-collapse -->
	       	</div>
        <!-- /.container -->
    </nav>
<!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="result"></div>
			</div>
		</div>
	</div>	
<footer class="footer">
  <div class="container">
    <p class="text-center ftext">Youtube Thumbnail Generator by <a href="http://www.pawanmall.net/">Pawan Mall</a></div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="ajax.js"></script>
</body>
</html>

