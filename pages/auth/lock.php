<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="http://alvarez.is/demo/dashio/favicon.png">

    <title>Admin LTE 2</title>

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">
    <link rel="stylesheet" href="../../dist/css/style.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!--external css-->
    <link href="../../dist/font-awesome/css/font-awesome.css" rel="stylesheet" />
        

    <link href="style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body onload="getTime()">

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  	<div class="container">
	  	
	  		<div id="showtime"></div>
	  			<div class="col-lg-4 col-lg-offset-4">
	  				<div class="lock-screen">
		  				<h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
		  				<p>UNLOCK</p>
		  				
				          <!-- Modal -->
				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				              <!-- <div class="modal-dialog">
				                  <div class="modal-content">
				                      <div class="modal-header">
				                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                          <h4 class="modal-title">Welcome Back</h4>
				                      </div>
				                      <div class="modal-body">
				                          <p class="centered"><img class="img-circle" width="80" src="../../dist/img/ui-sam.jpg"></p>
				                          <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">
				
				                      </div>
				                      <div class="modal-footer centered">
				                          <button data-dismiss="modal" class="btn btn-theme04" type="button">Cancel</button>
				                          <button class="btn btn-theme03" type="button">Login</button>
				                      </div>
				                  </div>
                                  
				              </div> -->
                              <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 login-box-locked">
                    
                                    <img class="avatar" src="../../dist/img/photo7.jpg">
                                    
                                    <h2>Lukasz Holeczek</h2>
                                    <p>lukasz@bootstrapmaster.com</p>

                                    <div class="input-prepend input-group">
                                        <input type="password" placeholder="Password" size="16" class="form-control" id="prependedInput">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info"><i class="fa fa-unlock"></i></button>
                                        </span>
                                    </div>
                                    <a href="page-login.html">I'm not Lukasz Holeczek</a>

                                  </div>
				          </div>
				          <!-- modal -->
		  				
		  				
	  				</div><! --/lock-screen -->
	  			</div><!-- /col-lg-4 -->
	  	
	  	</div><!-- /container -->

    <!-- js placed at the end of the document so the pages load faster -->
    <!-- jQuery 2.2.3 -->
    <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="../../bootstrap/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="../../plugins/jquery-backstretch/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("../../dist/img/login-bg.jpg", {speed: 500});
    </script>

    <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>

  </body>
</html>
