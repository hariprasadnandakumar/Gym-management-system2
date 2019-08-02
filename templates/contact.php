<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
<!-- Mirrored from quickdevs.com/templates/actiongym/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2017 10:54:05 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<title>Contact | Sports Authority of Gujarat</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Quickdev">

		<!-- ==============================================
		Favicon
		=============================================== -->  
        <link rel="shortcut icon" href="img/master/favicon.png">
		
		<!-- ==============================================
		CSS
		=============================================== -->  
        <link rel="stylesheet" href="css/bootstrap.css"> 
        <link rel="stylesheet" href="css/styles.css"> 
        
        <!-- ==============================================
		Fonts
		=============================================== -->
        <link rel='stylesheet prefetch' href='../../../maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
        <link rel='stylesheet prefetch' href='../../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
        
</head>

<body>
    

    
    <!-- MAIN CONTAINER -->
    <div class="wrapper">
        <!-- MAIN HEADER -->
        <div class="pages-header">
            <?php 
            include './themepart/header-menu.php';
            ?>
            
            <div class="main">
                    <div class="section">
                        <div class="pages-title">
                            <h1>CONTACT</h1>
                            <p>Home / Pages / Contact</p>
                        </div>
                    </div>
            </div>
        </div>
        <!-- END MAIN HEADER -->

        <div class="container-form text-center"  id="contact">
            <div class="section">
                <div class="row">
                  <div class="col-md-6 col-md-6">
                      <div class="span-support">
                        <h4>GET IN TOUCH</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>

                      </div>
                    <form id="contact-form" method="post" action="http://quickdevs.com/templates/actiongym/contact.php">
                        <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_contact" type="text" name="name" class="form-control" placeholder="Contact No." required="required" data-error="Contact Number is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email address" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Your message" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="submit" class="btn btn-warning" value="Send message"></p>
                                    </div>
                                </div>
                            </div>
                    </form>
                  </div>
                </div> 
            </div>       
        </div>
        
        
    <!-- END MAIN CONTAINER -->
    
    <?php
    include './themepart/footer.php';
    ?>
    
    <a href="#" class="go-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    <!-- #JAVASCRIPTS
    ================================================== -->
    <script type="text/javascript" src="../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src='../../../cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/return-top.js"></script>
    <script src="../../../code.jquery.com/jquery-1.12.2.min.js"></script>
    <script src="js/counter.js"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="../../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <script type="text/javascript" src="js/validator.js"></script> 
    <script  src="js/loader.js"></script>
    <script  src="js/maps-style.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-101241150-1', 'auto');
      ga('send', 'pageview');
    </script>

</body>


<!-- Mirrored from quickdevs.com/templates/actiongym/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2017 10:54:19 GMT -->
</html>
