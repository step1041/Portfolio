<?php
  // Start the session
  require_once('startsession.php');
  
  require_once('connectvars.php'); // database username and password files
  
?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />

        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width" />

        <title>Stephen Wiggins</title>

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/foundation.css">

        <script src="js/vendor/custom.modernizr.js"></script>

    </head>
    <body>
        <div class="row">
            <div class="large-12 columns">

                <!-- Navigation -->

                <nav class="top-bar">
                    <ul class="title-area">
                        <!-- Title Area -->
                        <li class="name">
                            <h1>
                                <a href="./index.php">SW</a>
                            </h1>
                        </li>
                        <li class="toggle-topbar menu-icon"><a href="index.html"><span>menu</span></a></li>
                    </ul>

                    <section class="top-bar-section">
                        <ul class="left">
                            <li class=""><a href="./projects.php">Projects</a></li>
                            <li class=""><a href="./services.php">Services</a></li>
                            <li class=""><a href="./about.php">About Me</a></li>
                            <li class=""><a href="./contact.php">Contact Me</a></li>
                            <li class=""><a href="./business.php">Business Contacts</a></li>
                            <li class=""><a href="./links.php">Links</a></li>
                        </ul>
                        <ul class ="right">
                            <li class=""><a href="./login.php">Login</a></li>
                            <li class=""><a href="./logout.php"><?php echo("Log Out: " . $_SESSION['username'] ) ?></a></li>
                        </ul>
                    </section>
                </nav>

                <!-- End Navigation -->

            </div>
        </div>


        <div class="row">
            <div class="large-12 columns">
                   <div class="row">
            <div class="large-12 columns">
                <div class="row">

                    <!-- Content -->
                    
                     <div class="large-12 columns">
                         
                        <div class="panel radius">
                            
                            <div class="row">
                                <!-- PAGE CONTENT -->
                                <h2>Services</h2><hr/>
                                   <h4>Custom sites for your needs</h4>
                                   <p>The site I build is for you, so it should be tailored for your needs, no more template designed web sites. </p>
                                   <p>I do it all! I will work on your project from start to finish to ensure it is built to your needs and specifications.</p>
                                   <p>Working with speed and efficiency your web site will be done as soon as possible.</p>
                                   <p>Readable code is important, so I make sure that the final code is readable for you to make changes and add parts as needed.</p>
                                   <p>Creating websites couldn't be easier! Contact me for a quote today!</p>

                            </div>
                        </div>
                    </div>

                    <!-- End Content -->

                </div>
            </div>
        </div>
                

            </div>
        </div><br>

        

<!-- Footer -->

        <footer class="row">
            <div class="large-12 columns">
                <hr>
                <div class="row">
                    <div class="large-6 columns">
                        <p>&copy; Copyright Stephen Wiggins 2013</p>
                    </div>
                    <div class="large-6 columns">
                        <ul class="inline-list right">
                            <li><a href="https://www.facebook.com/steve.wiggins">Facebook</a></li>
                            <li><a href="https://twitter.com/stevemwiggins">Twitter</a></li>
                            <li><a href="https://github.com/step1041/">GitHub</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            document.write('<script src=js/vendor/' +
                    ('__proto__' in {} ? 'zepto' : 'jquery') +
                    '.js><\/script>')
        </script>
        <script src="js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#featured').orbit({fluid: '2x1'});
            });
        </script>
        <!-- End Footer -->

    </body>
</html>