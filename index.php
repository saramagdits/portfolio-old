<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http://www.saramagdits.com/favicon.ico">
    <title>Sara Magdits</title>

    <!--Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Muli|League+Script" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3"></script>
    <script src="js/googlemapsscript.js"></script>

    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- Scrollspy Refresh -->
    <script type="text/javascript">
      $(document).ready(function(){
        // Scroll Spy
        $('[data-spy="scroll"]').each(function(){
          var $spy = $(this).scrollspy('refresh');
        }); 
      
        // toggle the mobile nav bar
        $('#myNavbar').on('click',function(){
             $('#myNavbar').removeClass('in');
        })
      });
    </script>

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');     
      ga('create', 'UA-71271266-1', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body class="container-fluid" data-spy="scroll" data-target="#myNavbar" data-offset="10">
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand visible-xs" href="#">Sara Magdits</a>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav navbar-right spy-scroll-id">
            <li><a href="#home">Home</a></li>
            <li><a href="#bio">About Me</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#contact">Contact</a></li>
			<li><a href="http://www.clients.saranorkelun.com">Client Portal</a></li>
          </ul>
        </div>
      </div>
    </nav>  <!-- /Navbar -->

    <!-- Jumbotron -->
    <div id="home" class= "container-fluid jumbotron">
      <img class="image-responsive center-block monogram" src="img/custommonogram.png">
      <span class="home-content">
        <h1>Hello, I'm Sara.</h1>
        <p>I like to make things.</p>
        <a href="saraMagditsResume.pdf" class="btn btn-primary btn-lg" role="button" target="_blank">Resume</a>
        <a href="#work" class="btn btn-primary btn-lg" role="button">My Work</a>
      </span>
    </div>

    <!-- Bio -->
    <div id="bio" class="container-fluid ">
      <div class="row">
        <div>
          <h1>About Me</h1>
        </div>
      </div>
      <div class="col-sm-6 col-sm-offset-3">
        <img src="img/milehigh.jpg">
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <p><span class="large-letter">M</span><span class="capital-letter">y name is Sara Magdits and I'm a NY based web designer.</span>
          I graduated from Stony Brook University with a degree in Biology. Since graduating I have been designing websites as a freelancer, and I am now looking for an in house position in order to turn web design into a career. I have a strong foundation in HTML5, CSS3 and Adobe Photoshop and I have some experience using Wordpress, Twitter Bootstrap and Google Analytics. My current focus is website design, but I am also interested in becoming a full front-end developer. 
          </p>
          <div class="row">
            <div class="bioList col-xs-4">
              <h3>Foundation</h3>
              <ul>
                <li>HTML / CSS</li>
                <li>Adobe Photoshop</li>
                <li>Responsive Design</li>
                <li>Wordpress and ecommerce</li>
              </ul>
            </div>  
            
            <div class="bioList col-xs-4">
              <h3>Working on..</h3>
              <ul>
                <li>JavaScript and jQuery</li>
                <li>PHP</li>
              </ul>
            </div>
            
            <div class="bioList col-xs-4">
              <h3>Would like to explore..</h3>
              <ul>
                <li>MYSQL</li>
                <li>UX/UI Design</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
              <img src="img/divider4.png">
            </div>
          </div>
          <div>
            <p class="text-center">
            Why don't you check out my <a href="saraMagditsResume.pdf" target="_blank">resume</a>?
            </p>
          </div>
        </div>
      </div>
    </div> <!-- /Bio -->

    <!-- Work  -->
    <div id="work" class="container-fluid">
      <div class="row">
        <div>
          <h1>Recent Work</h1>
        </div>
      </div> 
      <!-- Independent Fresh -->
      <div class="row sample">
        <div class="col-sm-5 col-sm-offset-1">
          <img src="img/IndependentFreshPreview.png" class="preview img-responsive">
        </div>
        <div class="col-sm-4">
          <h2>Independent Fresh</h2>
          <p>Independent Fresh is the new face of farm-to-table.
          </p>
          <span class="label label-default">HTML <i class="fa fa-html5"></i></span>
          <span class="label label-default">CSS <i class="fa fa-css3"></i></span>
          <span class="label label-default">Photoshop</span>
          <span class="label label-default">JavaScript</span>
          <span class="label label-default">jQuery</span>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#IndependentFreshModal">
          Learn More
          </button>

          <!-- Modal -->
          <div class="modal fade" id="IndependentFreshModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h2 class="modal-title" id="myModalLabel">Independent Fresh</h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                      <img src="img/IndependentFresh.png">
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                      <p>
                        Independent Fresh is the new face of farm-to-table.
                      </p>
                      <p>Based in Glasgow Scotland, this innovative web app connects people to their local farmers and food producers. 
                        Through its game-changing delivery and subscription service, Independent Fresh works to make local produce more accessible, helping farmers and consumers alike.
                      </p>
                      <p>As part of a collaboration with another developer, I crafted the website's design; making it friendly and functional for the user. 
                        It is built responsively from the ground up; always keeping mobile design in mind. As much of today's shopping is done with a mobile device, this is a factor that businesses can't afford to ignore.
                      </p>
                      <span class="label label-default">HTML <i class="fa fa-html5"></i></span>
                      <span class="label label-default">CSS <i class="fa fa-css3"></i></span>
                      <span class="label label-default">Photoshop</span>
                      <span class="label label-default">JavaScript</span>
                      <span class="label label-default">jQuery</span>
                      <span class="label label-default">Responsive Design</span>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- /Modal -->

        </div>
      </div>
      <!-- /Independent Fresh -->
      <!-- PA Mobile Attorney -->
      <div class="row sample">
        <div class="col-sm-5 col-sm-offset-1">
          <img src="img/PAMobileAttorneyPreview.png" class="preview img-responsive">
        </div>
        <div class="col-sm-4">
          <h2>PA Mobile Attorney</h2>
          <p> Ann McCLuskey-Yamulla is a travelling attorney based in Doylestown PA who specializes in providing efficient legal services at any location.
          </p>
          <span class="label label-default">HTML <i class="fa fa-html5"></i></span>
          <span class="label label-default">CSS <i class="fa fa-css3"></i></span>
          <span class="label label-default">Photoshop</span>
          <span class="label label-default">JavaScript</span>
          <span class="label label-default">jQuery</span>
          <span class="label label-default">Responsive Design</span>
          <span class="label label-default">Twitter Bootstrap</span>
          <span class="label label-default">Email Setup</span>

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#PAMobileAttorneyModal">
          Learn More
          </button>

          <!-- Modal -->
          <div class="modal fade" id="PAMobileAttorneyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h2 class="modal-title" id="myModalLabel">PA Mobile Attorney</h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                      <img src="img/PAMobileAttorney.png">
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                      <p>
                        Ann McCLuskey-Yamulla is a travelling attorney based in Doylestown PA who specializes in providing efficient legal services at any location.
                      </p>
                      <p>
                        Ann needed an informational website to attract new clients to her practice. This single page scroller design uses clean, modern design to keep things simple. 
                        Eye-catching call to action buttons help convert visitors into prospective clients, with the help of an easy to use contact form.
                      </p>
                      <span class="label label-default">HTML <i class="fa fa-html5"></i></span>
                      <span class="label label-default">CSS <i class="fa fa-css3"></i></span>
                      <span class="label label-default">Photoshop</span>
                      <span class="label label-default">JavaScript</span>
                      <span class="label label-default">jQuery</span>
                      <span class="label label-default">Responsive Design</span>
                      <span class="label label-default">Twitter Bootstrap</span>
                      <span class="label label-default">Email Setup</span>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-default view-live"><a href="http://www.pamobileattorney.com" target="_blank">View Live</a></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /Modal -->

        </div>
      </div>
      <!-- /PA Mobile Attorney -->
      <!-- Kelly Vecchio LCSW -->
      <div class="row sample">
        <div class="col-sm-5 col-sm-offset-1">
          <img src="img/kellylcsw.png" class="preview img-responsive">
        </div>
        <div class="col-sm-4">
          <h2>Kelly Vecchio LCSW</h2>
          <p>Kelly Vecchio is a licensed clinical social worker based in Rocky Point NY who provides therapy and counseling. 

            I made this for her as a favor to help her establish her new practice.
          </p>
          <span class="label label-default">HTML <i class="fa fa-html5"></i></span>
          <span class="label label-default">CSS <i class="fa fa-css3"></i></span>
          <span class="label label-default">Photoshop</span>
          <span class="label label-default">JavaScript</span>
          <span class="label label-default">jQuery</span>
          <span class="label label-default">Email Setup</span>

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#kellylcswModal">
          Learn More
          </button>

          <!-- Modal -->
          <div class="modal fade" id="kellylcswModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h2 class="modal-title" id="myModalLabel">Kelly LCSW</h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                      <img src="img/kellylcswfull.png">
                      <img src="img/kellylcswfull2.png">
                      <img src="img/kellylcswfull3.png">
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                      <p>
                        Kelly needed a simple informational website to provide to prospective clients. I organized the site into five pages and I choose a floral theme for the design. I created leaf images to use for the the list elements on the FAQ page and I made the logo to be continuous with the theme. The image slider on the landing page used a jquery plugin I found on Github.
                      </p>
                      <p>
                        HTML5 elements were used in order to maximize SEO. I choose Google fonts to provide good design and readability. 
                      </p>
                      <p>
                        Finally, it was crucial to add a contact form as a way for clients to get in touch with Kelly. The contact form submits to a php file that performs validation of the email address, and either sends the email to Kelly or returns an error. 
                      </p>
                      <span class="label label-default">HTML <i class="fa fa-html5"></i></span>
                      <span class="label label-default">CSS <i class="fa fa-css3"></i></span>
                      <span class="label label-default">Photoshop</span>
                      <span class="label label-default">Javascript</span>
                      <span class="label label-default">jQuery</span>
                      <span class="label label-default">Email Setup</span>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-default view-live"><a href="http://www.kellylcsw.saranorkelun.com" target="_blank">View Live</a></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /Modal -->

        </div>
      </div> <!-- /Kelly Vecchio LCSW -->

      <!-- Herbizzle -->
      <div class="row sample">
        <div class=" col-sm-5 col-sm-offset-1">
          <img src="img/herbizzle.png" class="preview img-responsive">      
        </div>
        <div class="col-sm-4">
          <h2>Herbizzle</h2>
          <p>Herbizzle was a design experiment of mine based on my interest in plants and herbs. I worked at a greenhouse in Mattituck NY for 5 years and during that time I learned much about different plants.
          </p>
          <span class="label label-default">HTML <i class="fa fa-html5"></i></span>
          <span class="label label-default">CSS <i class="fa fa-css3"></i></span>
          <span class="label label-default">Photoshop</span>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#herbizzleModal">
          Learn More
          </button>

          <!-- Modal -->
          <div class="modal fade" id="herbizzleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h2 class="modal-title" id="myModalLabel">Herbizzle</h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                      <img src="img/herbizzlefull.png">
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                      <p>This website was a pet-project of mine to experiment with z-indexes. The image on the sidebar , the menu and the logo were created in Photoshop and layered on top of their container elements using z-indexes. I included this project because I thought it was one of my best designs.
                      </p>
                      <span class="label label-default">HTML <i class="fa fa-html5"></i></span>
                      <span class="label label-default">CSS <i class="fa fa-css3"></i></span>
                      <span class="label label-default">Photoshop</span> 
                    </div>
                  </div>
                </div>
                <div class="modal-footer"> 
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-default view-live"><a href="http://www.herbizzle.saranorkelun.com" target="_blank">View Live</a></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /Modal -->

        </div>
      </div> <!-- /Herbizzle -->
      <!-- Chickadee Blue -->
      <div class="row sample">
        <div class=" col-sm-5 col-sm-offset-1">
          <img src="img/chickadeeblue.png" class="preview img-responsive">      
        </div>
        <div class="col-sm-4">
          <h2>Chickadee Blue</h2>
          <p>Chickadee Blue was one of the first websites that I made. The website sold the hats, scarves and bags that I had been making for fun. 
          </p>
          <span class="label label-default">Wordpress</span>
          <span class="label label-default">Woocommerce</span>
          <span class="label label-default">Stripe</span> 
          <span class="label label-default">Photoshop</span> 
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#chickadeeModal">
          Learn More
          </button>

          <!-- Modal -->
          <div class="modal fade" id="chickadeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h2 class="modal-title" id="myModalLabel">Chickadee Blue</h2>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                      <img src="img/chickadeebluefull1.png">
                      <img src="img/chickadeebluefull2.png">
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                      <p>The website uses Wordpress as a content management system. I had to learn how to use Wordpress to customize the site layout. Woocommerce is used to keep track of the inventory and their sales. Orders and payments are handled by the Stripe payment gateway.
                      </p>
                      <span class="label label-default">Wordpress</span>
                      <span class="label label-default">Woocommerce</span>
                      <span class="label label-default">Stripe</span> 
                      <span class="label label-default">Photoshop</span> 
                    </div>
                  </div>
                </div>
                <div class="modal-footer"> 
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-default view-live"><a href="http://www.herbizzle.saranorkelun.com" target="_blank">View Live</a></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /Modal -->

        </div>
      </div> <!-- /Chickadee Blue -->
    </div> <!-- Work -->

    <!-- Contact -->
    <!-- Email Script -->
    <?php include('email.php') ?> 
    <div id="contact" class="container-fluid">
      <div class="row">
        <div>
          <h1>Contact</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2 form-container">
          <form class="form-horizontal" role="form" method="post" action="index.php#contact">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="First &#38 Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
            </div>
            <div class="form-group">
              <label for="message" class="col-sm-2 control-label">Message</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" name="message" placeholder="Tell me about your project"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
            </div>
            <div class="form-group">
              <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                <?php echo "<p class='text-danger'>$errHuman</p>";?>
              </div>
            </div>
            <div class="form-group submit-frame">
              <div class="col-sm-12">
                <input id="submit" name="submit" type="submit" value="&#x2709; Send" class="btn btn-primary btn-lg">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <?php echo $result; ?>    
              </div>
            </div>
          </form>
        </div>
        <div class="col-sm-4">
          <hr>
          <p>Want to work together? Just fill out my snazzy form or email me at <a href="hello@saramagdits.com">hello@saramagdits.com</a> and I’ll reply back as soon as possible. Thanks!</p>
          <hr>
          <a href="tel://1-631-680-3319" class="contactLink"><i class="fa fa-phone"></i>  +1 (631) 680-3319</a>
          <a href="mailto:hello@saramagdits.com" class="contactLink"><i class="fa fa-envelope"></i>  hello@saramagdits.com</a>
        </div>
      </div>
    </div>  
    <!-- Footer -->     
    <footer class="container footer">        
      <p class="text-muted">
        &copy;
        <script type="text/javascript">
          document.write(new Date().getFullYear());
        </script>
        <a href="http://www.saramagdits.com">Sara Magdits</a>
        <a href="http://www.facebook.com/norkie"><i class="fa fa-facebook-square fa-3x"></i></a>
        <a href="https://github.com/saramagdits"><i class="fa fa-github-square fa-3x"></i></a>
        <a href="https://www.linkedin.com/in/saramagdits"><i class="fa fa-linkedin-square fa-3x"></i></a>
      </p>
    </footer><!-- /Footer -->
    <!-- /Contact -->

    <!-- Google Map -->
    <div id="mapContainer" class="hidden-xs">
      <div id="mapContent">
        <div class="paddedContent">
          <div id="map_canvas" style="width: 100%; height: 100%;">
          </div>
        </div>
      </div>
    </div> <!-- Google Map -->
  </body>
</html>