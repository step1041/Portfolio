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

                    <!-- Content -->

                    <div class="large-9 columns">
                        <div class="panel radius">

                            <h2>About Me</h2>
                            <div class="row">
                                <div class="large-9 small-9 columns">
                                    <!-- PAGE CONTENT -->
                                    <h4>Hello World!</h4>
                                    <p>Stephen Wiggins is currently attending Georgian College in Barrie, Ontario participating in their 3 year Computer Programmer Analyst program.
                                        <br><br>He has work experience in web development while working at Georgian College in Barrie in the summer of 2013.
                                        <br><br>Other past work includes manufacturing at Crystal Fountains in Concord, Ontario during the summers of 2009, 2010, and 2012.
                                        <br><br>Volunteer experience gained at Victoria Village Manor working in the laundry room in 2009.
                                        <br><br>Education includes an OSSD from Bear Creek Secondary School in 2012 specializing in business and computer courses.
                                        <br><br>If you wish to have a look at my <a href="./files/resume.pdf">Resume</a> feel free to do so!</p>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="large-3 columns">
                        <div class="panel radius">
                            <img src="./img/GC_portrait_about.jpg" alt="slide image">
                        </div>
                    </div>
                    <!-- End Content -->

                </div>
            </div>
        </div>

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
                    '.js><\/script>');
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