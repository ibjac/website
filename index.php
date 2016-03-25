<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
function skills() {
	$skillsArr = array('HTML5', 'CSS3', 'jQuery', 'JavaScript', 'Bootstrap', 'SASS',
	'RWD', 'XML', 'XSL', 'PhoneGap','PHP', 'MySQL',
	'SEO', 'ATG', 'Endeca', 'Magento', 'WordPress', 'Drupal',
	'Shell', 'AJAX', 'API', 'EDM', 'ESP', 'Apache',
	'Angular', 'Optimization', 'LINUX', 'SQL', 'Facebook', 'Android');
	

	$skills = '';
	
	foreach ($skillsArr AS $skill) {
		$skills .= '<div class="col-sm-2 col-xs-6 no-padding">
                  <div class="desc-mini">
                    <div class="mid-desc-mini">
                      <p>'. $skill .'</p>
                    </div>
                  </div>
                </div>';
		}
	return $skills;
	}

$dispDetails = $_REQUEST['on'];
$jobs = array(
	'teleflora' => 'Top Online Flower Retailer',
	'aquent' => 'International Recruiting Agency',
	'belkin' => 'Computer Peripherals Company',
	'instructor' => 'Community College / Art Center',
	'medianews' => 'Large Newspaper Media Company',
	'dailybreeze' => 'Large Newspaper',
	'envision' => 'Boutique Interactive Agency'
	);

if (isset($dispDetails)) {
	$jobs['teleflora'] = '<a href="works/teleflora.html" class="link-work">Teleflora</a>';
	$jobs['aquent'] = '<a href="http://aquent.com" target="_blank">Aquent</a> / <a href="http://vitamintalent.com" target="_blank">Vitamin T.</a>';
	$jobs['belkin'] = '<a href="http://belkin.com" target="_blank">Belkin</a>';
	$jobs['instructor'] = '<a href="http://www.cerritos.edu/" target="_blank">Cerritos College</a> / <a href="http://pvartcenter.org" target="_blank">P.V. Art Center</a>';
	$jobs['medianews'] = '<a href="http://www.digitalfirstmedia.com/" target="_blank">Media News Group</a> / <a href="http://la.com" target="_blank">LA.com</a>';
	$jobs['dailybreeze'] = '<a href="http://dailybreeze.com" target="_blank">The Daily Breeze</a>';
	$jobs['envision'] = '<a href="http://envisiongroup.com" target="_blank">Envision Group</a>';
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>I be J.A.C. - Jerry A. Cornejo</title>
    <!-- Bootstrap -->
    <link href="assets/external/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--favicon-->
    <link rel="apple-touch-icon" href="assets/theme/img/ico.png">
    <link rel="shortcut icon" href="assets/theme/img/ico.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Sarala:400,700%7COpen+Sans:400,300' rel='stylesheet' type='text/css'>

    <!-- Theme Style -->
    <link href="assets/theme/css/style.css" rel="stylesheet" type="text/css">
    <!-- Your custom css -->
    <link href="assets/theme/css/theme-custom.css" rel="stylesheet">

    <!-- Font Icons -->
    <link href="assets/external/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Captcha -->
    <link href="assets/external/simpleCaptcha/jquery.simpleCaptcha.css" rel="stylesheet">
    <!-- lightbox -->
    <link href="assets/external/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body >
    <!-- Page Loader -->
    <div class="page-loader">
      <div class="v-align-center">
        <div class="middle-content">
          <div class="img-p-area"> <img src="assets/theme/img/profile-thumb.jpg" alt="" class="img-thumbnail no-radius"></div>
          <span class="itsme" >I be...</span>
          <h4>J.A.C.</h4>
          <p>please wait</p>
          <div class="anim-pg">
            <span ></span>
          </div>
          <div class="force-pg"><button type="button" id='force-close-pg' class="btn">Skip This &rarr;</button></div>
        </div>
      </div>
    </div>
	<!-- End Page Loader -->
    <!-- body-area -->
    <div class="body-area">
      <!-- Header -->
      <header class="main-header">
        <div class="nav-main">
          <span class="itsme">it's me </span>
          <a href="#menu-ovefly" class="toogle-overfly"><i class="fa fa-bars open-t"></i> <i class="fa fa-times close-t"></i></a>
          <!--a href="#search-ovefly" class="toogle-overfly"><i class="fa fa-search open-t"></i> <i class="fa fa-times close-t"></i></a>
          <a href="#share-ovefly" class="toogle-overfly"><i class="fa fa-plus open-t"></i> <i class="fa fa-times close-t"></i></a-->        </div>

        <div class="over-fly-area" id="menu-ovefly">
          <div class="inner-overfly">
            <div class="middle-overfly">
              <h2 class="title-over">Menu</h2>
              <nav class="main-nav" id="menu">
                <ul class="nav">
                  <li class="active"><a href="#aboutme" class="inner-link" data-text="About Me"><span>About Me</span></a></li>
                  <li><a href="#resume" class="inner-link" data-text="Curriculum vitae"><span>Curriculum Vitae</span></a></li>
                  <!--li><a href="#portfolio" class="inner-link" data-text="My Portfolio"><span>Portfolio</span></a></li>
                  <li><a href="#"><span>Blog</span></a></li-->
                  <li><a href="#contact" class="inner-link"  data-text="Contact Me"><span>Contact</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="over-fly-area" id="search-ovefly">
          <div class="inner-overfly">
            <div class="middle-overfly">
              <h2 class="title-over">Find My Articles</h2>
              <form class="from-search">
                <div class="form-group">
                  <input type="search" name="s" class="form-control input-lg input-search" placeholder="Input Text Here !" >
                </div>
                <div class="form-group">
                  <button  class="btn btnc2"><span>Search</span></button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="over-fly-area" id="share-ovefly">
          <div class="inner-overfly">
            <div class="middle-overfly">
              <h2 class="title-over">Share This Page</h2>
              <!-- You MUST change the URL definition in these links to share YOUR page - simply change the URL -->
              <div class="social-share">
                <a href="https://plus.google.com/share?url=http://ibjac.com" target="_blank"  data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                <a href="http://pinterest.com/pin/create/button/?url=http://ibjac.com" target="_blank"  data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                <a href="http://www.facebook.com/share.php?u=http://ibjac.com" target="_blank"  data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="http://twitter.com/home?status=http://ibjac.com" target="_blank"  data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- hero  -->
        <div class="hero-01">
          <div class="hero-border">
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right">
              <div class="v-area">
                <div class="v-middle  show-span" >
                  <div class="p5" id="label-menu">
                    <span>A</span>
                    <span>B</span>
                    <span>O</span>
                    <span>U</span>
                    <span>T</span>
                    <span></span>
                    <span>M</span>
                    <span>E</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-thumb">
            <div class="thumb-top"><img src="assets/theme/img/profile-thumb.jpg" class="img-thumbnail no-radius"  alt="J.A.C."></div>
          </div>

          <div class="content-hero">
            <div class="v-content">
              <h4 class="font-normal">I be J.A.C.</h4>
              <h1 class="myname">Jerry A. Cornejo</h1>
              <h3 class="font-normal with-line">Senior Technologist & Entrepreneur</h3>
              <p><!--a href="#" class="btn btnc1"><span>Hire Me</span></a--> <?php if (isset($dispDetails)): ?><a href="javascript: javascript: alert('Not yet available.');" class="btn btnc1"><span>Download Resume</span></a><?php endif ?></p>
            </div>
          </div>
        </div><!-- hero  -->
      </header><!-- end HEader -->
      <!-- Content body -->
      <div class="content-body">

        <!-- start about me section -->
        <section id="aboutme">
          <div class="section-padd bg2" >
            <div class="container-body clearfix">
              <div class="big-qoute">
                <h3><em>"Start where you are. Use what you have. Do what you can."</em><br /><br />
				<small>&rarr; Arthur Ashe (by way of Theodore Roosevelt)</small></h3>
              </div>
            </div>
          </div>
          <div class="section-padd top-bold-border" >
            <div class="container-body clearfix">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="title"><span>Who be J.A.C</span></h2>
                  <p>An accomplished web-business architect and strategist with close to 20 years of web development experience. A strong "hybrid" skill-set encompassing leadership, architecture and both frontend and backend development. Highly regarded by business partners and executive teams as a key advisor, creative problem solver, skilled leader, and astute process and business analyst.</p>  
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix br-t" >
            <div class="col-md-6 col-sm-6 no-padding">
              <div class="desc-mini no-br-l">
                <div class="mid-desc-mini">
                  <h3>Senior Technologist</h3>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 no-padding">
              <div class="desc-mini">
                <div class="mid-desc-mini">
                  <h3>Entrepreneur</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="bg2 p30 br-b">
            <div class="container-body clearfix">
              <div class="clearfix br-t br-r " >
                <div class="col-lg-4 col-md-6 col-sm-6 no-padding">
                  <div class="desc-mini">
                    <div class="mid-desc-mini">
                      <h4>Web Engineer</h4>
                      <p>Architect and build web sites and applications.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 no-padding">
                  <div class="desc-mini">
                    <div class="mid-desc-mini">
                      <h4>Efficiency Analyst</h4>
                      <p>Analyze, identify, improve, and repeat.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 no-padding">
                  <div class="desc-mini">
                    <div class="mid-desc-mini">
                      <h4>Team Lead</h4>
                      <p>Apply individual capabilities to specific needs.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 no-padding">
                  <div class="desc-mini">
                    <div class="mid-desc-mini">
                      <h4>Site Optimization</h4>
                      <p>Load time, cross-browser, SEO, and more.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 no-padding">
                  <div class="desc-mini" >
                    <div class="mid-desc-mini">
                      <h4>Technical Writer</h4>
                      <p>Gather requirements, be concise, provide use cases.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 no-padding">
                  <div class="desc-mini">
                    <div class="mid-desc-mini">
                      <h4>Vendor/Talent Vetting</h4>
                      <p>Know your audience, ask the right questions.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		<!-- end about me section -->

        <!-- start resume section -->
        <section id="resume">
          <div class="section-padd" >
            <div class="container-body clearfix">
			  <br />
              <a href="#collapseEntrepreneurship" data-toggle="collapse" aria-controls="collapseEntrepreneurship" class="cv-header"><h2 class="title"><span>Entrepreneurship</span></h2><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><span class="glyphicon glyphicon-triangle-bottom" style="display:none;" aria-hidden="true"></span></a>
              <div class="white-space-10" ></div>
              <!-- resume list-->
              <ul id="collapseEntrepreneurship" class="resume-list collapse"> 
                <!--li> 
                  <h4><i class="fa fa-calendar ic-re"></i> 2013 - Present</h4>
                  <i>Co-Founder & CEO</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> <a href="http://audionit.com" target="_blank">AudiOnIt, Inc.</a></h3>
                  <p>AudiOnIt is a startup technology company that has developed a process to take voice and video messages recorded via phone or web and transferring them on to elegantly designed and manufactured audio/video cards.</p>
                </li-->
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2011 - 2012</h4>
                  <i>Founder & CTO</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> CountM, Inc.</h3>
                  <p>CountM was developing an egress and ingress tracking platform for various industries.</p>
                </li>
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2000 - 2005</h4>
                  <i>Founder & President</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> WorldNightClubs / NightLifeConnect, LLC.</h3>
                  <p>A social network and online marketing company for the nightclub and entertainment industries covering all of Southern California. Unique in the industry and a pioneer of its time.</p>
                </li>
              </ul><!-- end resume list-->

              <a href="#collapseEmployment" data-toggle="collapse" aria-controls="collapseEmployment" class="cv-header"><h2 class="title"><span>Employment</span></h2><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><span class="glyphicon glyphicon-triangle-bottom" style="display:none;" aria-hidden="true"></span></a>
              <div class="white-space-10" ></div>
              <!-- resume list-->
              <ul id="collapseEmployment" class="resume-list collapse"> 
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2013 - Present</h4>
                  <i>Web Producer</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> <?=$jobs['teleflora']?></h3>
                  <p><strong>Responsibilities include:</strong> frontend web development (HTML, CSS, jQuery, JavaScript), enterprise content management system, documentation, technical spec writing, vendor vetting, training, task management, process automation</p>

				  <?php if (isset($dispDetails)): ?>
				  <div class="achievements">
				  	<strong>Achievements</strong>
					<ul>
						<li><u>Automated Email Generation</u><br />
						Created an semi-automated process to generate responsive HTML emails cutting email coding from an average of 60 minutes to 5 minutes.<br />
						(<em>Technologies: XML, XSL, Windows Shell</em>)
						</li>
						<li><u>Platform Lead</u><br />
						As the lead of user documentation for the custom implementation of a new e-commerce platform, I led all major content updates and custom frontend features and functions.<br />
						(<em>Technologies: BCC, Endeca, JavaScript, jQuery, HTML, CSS</em>)
						</li>
						<li><u>Vendor Expenditure Reduction</u><br />
						Identified existing requirements and after a comprehensive vetting process replaced a legacy vendor with new one.<br />
						(<em>Results: $90,0000 yearly savings</em>)
						</li> 
					</ul>
				  </div>
				  <?php endif ?>
                </li>
                <!--li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2013 - Present</h4>
                  <i>Subject Matter Expert</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> <?=$jobs['aquent']?></h3>
                  <p>Part of an Expert Network of senior level digital talent with experience in front-end Web Development with the mandate of conducting technical interviews and providing feedback to recruiters about a candidate's coding skills to facilitate job placement.</p>

				  <?php if (isset($dispDetails)): ?>
				  <div class="achievements">
				  	<strong>Achievements</strong>
					<ul>
						<li><u>Selected as Most Useful Reviews</u><br />
						Over 500 interviews to date with an average with an average of 20 per month.
						</li>
					</ul>
				  </div>
				  <?php endif ?>
                </li-->
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2008 - 2013</h4>
                  <i>Consultant</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> Self-Employed</h3>
                  <p>Clients/Projects included: <a href="http://verve8media.com" target="_blank">Verve 8 Media</a>, <a href="http://www.cr8rec.com/" target="_blank">Creative Recreation</a>, <a href="http://olympusamerica.com" target="_blank">Olympus Cameras</a>, <a href="http://www.gsn.com/" target="_blank">Game Show Network</a>, Olympus Cameras, Kyocera, <a href="https://www.tsovet.com/" target="_blank">TSOVET</a>, <a href="http://nartools.com" target="_blank">National Association of Realtors</a>, Drum-Squad, <a href="http://www.opengatecapital.com/" target="_blank">Open Gate Capital</a>, <a href="http://www.omgglobal.com/" target="_blank">OMG Global</a>, NOSOTROS, <a href="http://pvartcenter.org/" target="_blank">P.V. Art Center</a>, <a href="http://drmarion.com/" target="_blank">Dr. Marion</a>, Insomnia Media, <a href="http://www.thompsonchemists.com/" target="_blank">Thompson Chemists</a>, <a href="http://www.help4srs.org/" target="_blank">H.E.L.P.</a>, <a href="http://www.sigulerguff.com/" target="_blank">Siguler Guff</a></p>

				  <?php if (isset($dispDetails)): ?>
				  <div class="achievements">
				  	<strong>Technologies</strong>
					<ul>
						<li>HTML5, CSS3, JavaScript, jQuery, PHP, MySQL, Magento, WordPress, 3dCart, Drupal</li>
					</ul>
				  </div>
				  <?php endif ?>
                </li>
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2011</h4>
                  <i>UX Prototyper</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> <?=$jobs['belkin']?></h3>
                  <p>Protoyped a web-based dashboard for pre-launch IoT electrical meter.</p>

				  <?php if (isset($dispDetails)): ?>
				  <div class="achievements">
				  	<strong>Technologies</strong>
					<ul>
						<li>JavaScript, jQuery</li>
					</ul>
				  </div>
				  <?php endif ?>
                </li>
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2009</h4>
                  <i>Instructor</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> <?=$jobs['instructor']?></h3>
                  <p>Taught beginning web development & introduction to social media.</p>
                </li>
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2007</h4>
                  <i>Project Lead</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> <?=$jobs['medianews']?></h3>
                  <p>Consolidated the entertainment section of 11 local newspapers on to one large entertainment hub.</p>

				  <?php if (isset($dispDetails)): ?>
				  <div class="achievements">
				  	<strong>Technologies</strong>
					<ul>
						<li>Velocity, cmPublish</li>
					</ul>
				  </div>

				  <!-- testimonial -->  
				  <a href="#collapseMediaTesti" data-toggle="collapse" aria-controls="collapseMediaTesti" class="cv-testimonials"><h4 class="title"><span>Testimonial</span></h4><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><span class="glyphicon glyphicon-triangle-bottom" style="display:none;" aria-hidden="true"></span> <i>(1)</i></a>
				  <ul id="collapseMediaTesti" class="list-unstyled list-testimonial collapse clearfix">
					<li>
					  <img src="assets/theme/img/people/tomzevallos.jpg" alt="Tom Zevallos" class="img-thumbnail img-circle">
					  <div class="text-testimonial">
						<h3><a href="https://www.linkedin.com/in/tom-zevallos-7931625" target="_blank"><span class="fa fa-linkedin-square"></span> Tom Zevallos</a><br />
						<small><i>Worked with Jerry - January 21, 2010</i></small>
						</h3>
						<p><sup><span class="fa fa-quote-left"></span></sup> I've worked with Jerry at both the Torrance Daily Breeze and LA.com. Jerry is a well rounded developer with great communication skills. He has both the ability to effectively manage a technical team and bring understanding and support for a executive team.</p>
						<p>On several projects we worked on, he was able to build sites and businesses from the ground up through his unique problem solving and dedication. Jerry is the type of individual who can help clear out any fog from the technical side, and can deliver answers and results by presenting the options. <sup><span class="fa fa-quote-right"></span></sup></p>
						<h4>Conversant, Inc.
	 - <small>Business Development Manager <a href="http://www.conversantmedia.com" target="_blank"><i class="fa fa-globe"></i> http://www.conversantmedia.com</a></small></h4>
					  </div>
					</li>
				  </ul>
				  <!-- end testimonial -->
				  <?php endif ?>
                </li>
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2004 - 2007</h4>
                  <i>Webmaster</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> <?=$jobs['dailybreeze']?></h3>
                  <p>Oversaw all web operations for the newspaper under I.T. Director.</p>

				  <?php if (isset($dispDetails)): ?>
				  <div class="achievements">
				  	<strong>Technologies</strong>
					<ul>
						<li>HTML, CSS, JavaScript, ASP, SQL</li>
					</ul>
				  </div>

				  <!-- testimonial -->  
				  <a href="#collapseDailyTesti" data-toggle="collapse" aria-controls="collapseDailyTesti" class="cv-testimonials"><h4 class="title"><span>Testimonial</span></h4><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><span class="glyphicon glyphicon-triangle-bottom" style="display:none;" aria-hidden="true"></span> <i>(3)</i></a>
				  <ul id="collapseDailyTesti" class="list-unstyled list-testimonial collapse clearfix">
					<li>
					  <img src="assets/theme/img/people/juliaparton.jpg" alt="Julia Parton" class="img-thumbnail img-circle">
					  <div class="text-testimonial">
						<h3><a href="https://www.linkedin.com/in/juliaparton" target="_blank"><span class="fa fa-linkedin-square"></span> Julia Parton</a><br />
						<small><i>Managed Jerry indirectly - February 3, 2010</i></small>
						</h3>
						<p><sup><span class="fa fa-quote-left"></span></sup> I am pleased to give strong recommendation to anyone reviewing Jerry Cornejo's work. While working with Jerry at Copley Los Angeles Newspapers, Jerry handled many challenging assignments that let to increase revenue generation and increased online readership. Jerry is skilled at understanding the needs of all levels of management, as well as all employees involved in the project. He works extremely well in a team environment. Just recently I had connected again with Jerry for some assistance for a non-profit organization (dealing with aging issues) website. The site was old, unsearchable and needed some user flexibility. Jerry was able to assist us, pro-bono, with creating new templates to allow us to have a more user-friendly and updated website. Jerry is very dedicated and loyal.</p>
						<p>Julia Parton Rosas <sup><span class="fa fa-quote-right"></span></sup></p>
						<h4>Premier Bank of Palos Verdes
	 - <small>Vice President Corporate Development <a href="http://www.ibankpremier.com" target="_blank"><i class="fa fa-globe"></i> http://www.ibankpremier.com</a></small></h4>
					  </div>
					</li>
					<li>
					  <img src="assets/theme/img/people/phillawrence.jpg" alt="Phil Lawrence" class="img-thumbnail img-circle">
					  <div class="text-testimonial">
						<h3><a href="https://www.linkedin.com/in/plawrence5" target="_blank"><span class="fa fa-linkedin-square"></span> Phil Lawrence</a><br />
						<small><i>Reported directly to Jerry - January 21, 2010</i></small>
						</h3>
						<p><sup><span class="fa fa-quote-left"></span></sup> Jerry has a great understanding of how to best use technology to meet business objectives and his technical skills are excellent.</p>
						<p>He is also very strong as a manager and during the time I reported to him I felt like I was used effectively and was able to grow my technical skills so that I was more valuable to the company. <sup><span class="fa fa-quote-right"></span></sup></p>
						<h4>Digital First Media
	 - <small>Web/Mobile Strategist and Developer <a href="http://dailybreeze.com" target="_blank"><i class="fa fa-globe"></i> http://dailybreeze.com</a></small></h4>
					  </div>
					</li>
					<li>
					  <img src="assets/theme/img/people/jeanniebolio.jpg" alt="Jeannie Bolio" class="img-thumbnail img-circle">
					  <div class="text-testimonial">
						<h3><a href="https://www.linkedin.com/in/jeanie-bolio-6646784" target="_blank"><span class="fa fa-linkedin-square"></span> Jeannie Bolio</a><br />
						<small><i>Worked directly with Jerry - January 21, 2010</i></small>
						</h3>
						<p><sup><span class="fa fa-quote-left"></span></sup> Working with Jerry was a wonderful experience. Jerry is both professional and Knowledgeable in all aspects of the Internet Operations. I was well educated from many of the meetings and training sessions with JJerry.</p>
						<p>I highly recommend Jerry Cornejo and am happy to endorse him and his work ethic and experience. <sup><span class="fa fa-quote-right"></span></sup></p>
						<p>Jeannie Bolio</p>
						<h4>Moontide Media - <small>Advertising Account Executive <a href="http://moontidemedia.com" target="_blank"><i class="fa fa-globe"></i> http://moontidemedia.com</a></small></h4>
					  </div>
					</li>
				  </ul>
				  <!-- end testimonial -->
				  <?php endif ?>
                </li>
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 1997 - 2004</h4>
                  <i>Senior Web Technologist</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> <?=$jobs['envision']?></h3>
                  <p>Started career as a full stack developer working on online presence and wed initiatives for Fortune 1000 companies.</p>
				  <?php if (isset($dispDetails)): ?>
				  <!-- testimonial -->  
				  <a href="#collapseEnvisionTesti" data-toggle="collapse" aria-controls="collapseEnvisionTesti" class="cv-testimonials"><h4 class="title"><span>Testimonial</span></h4><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><span class="glyphicon glyphicon-triangle-bottom" style="display:none;" aria-hidden="true"></span> <i>(2)</i></a>
				  <ul id="collapseEnvisionTesti" class="list-unstyled list-testimonial collapse clearfix">
					<li>
					  <img src="assets/theme/img/people/careyreisz.jpg" alt="Carey Reisz" class="img-thumbnail img-circle">
					  <div class="text-testimonial">
						<h3><a href="https://www.linkedin.com/in/careyreisz" target="_blank"><span class="fa fa-linkedin-square"></span> Carey Reisz</a><br />
						<small><i>Worked directly with Jerry - November 24, 2011</i></small>

						</h3>
						<p><sup><span class="fa fa-quote-left"></span></sup> As a designer - I absolutely love working with Jerry.</p>
						<p>He takes a designer's visions - and easily re-constructs them so that the design team and programming team are BOTH happy with the results.</p>
						<p>Jerry is a fantastic programmer, and above all he knows how to communicate tech needs to a design team - in terms a designer can understand and deliver to. <sup><span class="fa fa-quote-right"></span></sup></p>
						<h4>Thrive Market
	 - <small>Senior Graphic Designer <a href="https://thrivemarket.com" target="_blank"><i class="fa fa-globe"></i> https://thrivemarket.com</a></small></h4>
					  </div>
					</li>
					<li>
					  <img src="assets/theme/img/people/sandyfu.jpg" alt="Sandy Fu" class="img-thumbnail img-circle">
					  <div class="text-testimonial">
						<h3><a href="https://www.linkedin.com/in/sandyfujohnson" target="_blank"><span class="fa fa-linkedin-square"></span> Sandy Johnson</a><br />
						<small><i>Managed Jerry indirectly - January 26, 2010</i></small>
						</h3>
						<sup><span class="fa fa-quote-left"></span></sup> I worked with Jerry for many years at Envision Group. I was a Sr. Acct Executive/Sr. Producer and I had to work with many groups to achieve what our clients asked of us. Sometimes our asks were not so reasonable, but you would never get a complaint from Jerry (whereas most others would have lots to say). He is one the most hard-working, reliable guys I know. As we were creating strategies that didn't quite fit to a capability we had (YET), Jerry would also pull the latest books to study on how to get it done...the right way. I really miss working Jerry! Jerry is very easy-going, has lots of experience and can adapt to any environment. I think you would be very lucky to hire Jerry as a part of your team. Please feel free to email or call me if you need further details. <sup><span class="fa fa-quote-right"></span></sup>
						<h4>Fujo, Inc. - <small>President/Co-Founder <a href="http://www.fujoinc.com" target="_blank"><i class="fa fa-globe"></i> http://www.fujoinc.com</a></small></h4>
					  </div>
					</li>
				  </ul>
				  <!-- end testimonial -->
 				  <?php endif ?>
               </li>
              </ul><!-- end resume list-->

              <a href="#collapseEducation" data-toggle="collapse" aria-controls="collapseEducation" class="cv-header"><h2 class="title"><span>Education</span></h2><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><span class="glyphicon glyphicon-triangle-bottom" style="display:none;" aria-hidden="true"></span></a>
              <div class="white-space-10" ></div>
              <!-- resume list-->
              <ul id="collapseEducation" class="resume-list collapse"> 
                <li> 
                  <h4><i class="fa fa-calendar ic-re"></i> 2011</h4>
                  <i>Founder</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> <a href="http://fi.co">Founder Institute</a></h3>
                  <p>The Founder Institute is the world's premier startup boot camp for talented entrepreneurs. Through a structured, 4-month curriculum of weekly training courses and business-building assignments, graduates of the Founder Institute come out as Founders of enduring companies.</p>
                </li>
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 2004</h4>
                  <i>Business Management Certificate</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> California Institute of Business Management</h3>
                </li>
                <li> 
                  <h4><i class="fa fa-calendar ic-re" ></i> 1992 - 1998</h4>
                  <i>Computer Science Undergrad</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> California State University Dominguez Hills</h3>
                </li>
              </ul><!-- end resume list-->
 
              <a href="#collapseIBMe" data-toggle="collapse" aria-controls="collapseIBMe" class="cv-header"><h2 class="title"><span>I Be Me</span></h2><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><span class="glyphicon glyphicon-triangle-bottom" style="display:none;" aria-hidden="true"></span></a>
              <div class="white-space-10" ></div>
              <!-- resume list-->
              <ul id="collapseIBMe" class="resume-list collapse"> 
                <li> 
                  <div class="img-pr"><img src="assets/theme/img/profile.jpg" alt="J.A.C." ></div>
                  <h4><i class="fa fa-calendar ic-re"></i> 1997 - Now</h4>
                  <i>I BE ME</i>
                  <h3><i class="fa fa-building-o ic-re" ></i> When WWW was just 6</h3>
                  <p>My first web development job was in 1997 doing HTML coding for an interactive agency in Torrance, CA. The "<a href="https://en.wikipedia.org/wiki/World_Wide_Web" title="WikiPedia: World Wide Web">World Wide Web</a>" was only 6 years old then and while it was the "cool" new thing, most people had no clue how impactful it would be on everyday life.</p>  
				  
				  <p>The plan back then was to work in a creative field as a designer, but as plans often do, they rarely go as expected. Through no conscious desire of my own, not even as a "what if," the design trajectory I had laid out for myself propelled me into the world of web development where I quickly became consumed by it...and that was a good thing.</p>
				  
				  <p><a href="https://en.wikipedia.org/wiki/Arthur_Ashe" title="WikiPedia: Arthur Ashe">Arthur Ashe's</a> quote, "<em>Start where you are. Use what you have. Do what you can.</em>" is how I began. In the late 90's there were no web development degrees, no developer boot camps, and no online training courses. Internet access was not easy to come by but every chance there was I spent web surfing, researching, self-training and coding.</p>
				  
				  <p>A quote by <a href="https://en.wikipedia.org/wiki/Jason_Calacanis" title="WikiPedia: Jason Calacanis">Jason Calacanis</a> I feel also fits my experience quite nicely.</p>
				  
				  <blockquote><em>You have to have a big vision and take very small steps to get there. You have to be humble as you execute but visionary and gigantic in terms of your aspiration. In the Internet industry, it's not about grand innovation, it's about a lot of little innovations: every day, every week, every month, making something a little bit better.</em></blockquote>
				  
				  <p>This has been my journey and what still excites me about what I do is that as I try to work on small innovations every day, week and month to make what I'm working on just a little better, that same process is making me just a little better as well.</p>
                </li>
              </ul><!-- end resume list-->
 
			  <?php if (isset($dispDetails)): ?>
              <!-- skills -->
              <h3 class="title-2"><span>Varying knowledge, skills, or expertise in...</span></h2>
              <div id="skills" class="clearfix br-t br-r " >
                <?php echo skills(); ?>
              </div>
			  <?php endif ?>

            </div>
          </div>
        </section><!-- end resume section-->

        <!-- start portfolio section-->
		<?php if (isset($dispDetails)): ?>
        <section id="portfolio">

          <!-- filter portfolio -->
          <div class="section-padd br-t bg2" >
            <div class="container-body clearfix">
              <h2 class="title dark"><span>Some Works</span></h2>
              <ul class="list-inline list-filter-galery">
                <li class="active" data-filter="*"><a href="#">All</a></li>
                <li data-filter=".fed"><a href="#">Frontend</a></li>
                <li data-filter=".bed"><a href="#">Backend</a></li>
                <li data-filter=".cms"><a href="#">CMS</a></li>
                <li data-filter=".other"><a href="#">Other</a></li>
              </ul>
            </div>
          </div>

          <!-- grid portfolio -->
          <div class="galery-box clearfix bg2">
            <div class="col-sm-3 col-xs-6 item-box fed cms">
              <div class="hover-area">
                <div class="text-vcenter-area hilite">
                  <div class="text-vcenter">
                    <h3><a href="works/teleflora.html" class="link-work">Teleflora <i class="fa fa-link"></i></a></h3>
					<span>Frontend, ATG</span>
                  </div>  
                </div>
              </div>
              <div id="bs-gslider1" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="assets/theme/img/thumb/teleflora1.jpg" alt="Teleflora - Home Page">
                  </div>
                  <div class="item">
                    <img src="assets/theme/img/thumb/teleflora2.jpg" alt="Teleflora - Collection">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-6 item-box fed other">
              <div class="hover-area">
                <div class="text-vcenter-area hilite">
                  <div class="text-vcenter">
                    <h3><a href="works/email.html" class="link-work">Email Generator <i class="fa fa-link"></i></a></h3>
					<span>Frontend, Backend, Other</span>
                  </div>  
                </div>
              </div>
              <div id="bs-gslider1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4010">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="assets/theme/img/thumb/email1.jpg" alt="Responsive Emails">
                  </div>
                  <div class="item">
                    <img src="assets/theme/img/thumb/email2.jpg" alt="Design View">
                  </div>
                  <div class="item">
                    <img src="assets/theme/img/thumb/email3.jpg" alt="Code View">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-6 item-box other">
              <div class="hover-area">
                <div class="text-vcenter-area hilite">
                  <div class="text-vcenter">
                    <h3><a href="works/spec.html" class="link-work">Sample Spec Doc <i class="fa fa-link"></i></a></h3>
					<span>Technical Writing</span>
                  </div>
                </div>
              </div>
              <img src="assets/theme/img/thumb/spec.png" alt="Sample Spec Doc">
            </div>
            <div class="col-sm-3 col-xs-6 item-box fed bed other">
              <div class="hover-area">
                <div class="text-vcenter-area hilite">
                  <div class="text-vcenter">
                    <h3><a href="works/ibjac.html" class="link-work">I Be J.A.C. <i class="fa fa-link"></i></a></h3>
					<span>HTML5, CSS3, jQuery, PHP, MySQL, more...</span>
                  </div>  
                </div>
              </div>
              <div id="bs-gslider1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3010">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="assets/theme/img/thumb/ibjac1.png" alt="I Be J.A.C.">
                  </div>
                  <div class="item">
                    <img src="assets/theme/img/thumb/ibjac2.jpg" alt="I Be J.A.C.">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-6 item-box fed cms">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://la.com" target="_blank">LA.com <i class="fa fa-link"></i></a></h3>
					<span>Frontend, cmPublish</span>
                  </div>  
                </div>
              </div>
              <img src="assets/theme/img/thumb/lacom.jpg" alt="LA.com">
            </div>
            <div class="col-sm-3 col-xs-6 item-box cms fed bed">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://www.cr8rec.com/" target="_blank">Creative Recreation <i class="fa fa-link"></i></a></h3>
					<span>Frontend, Backend, Magento</span>
                  </div>
                </div>
              </div>
              <img src="assets/theme/img/thumb/cre8rec.jpg" alt="Creative Recreation">
            </div>
            <div class="col-sm-3 col-xs-6 item-box fed cms bed">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://omgglobal.com" target="_blank">OMG Global <i class="fa fa-link"></i></a></h3>
					<span>Frontend, Drupal</span>
                  </div>  
                </div>
              </div>
              <img src="assets/theme/img/thumb/omgglobal.jpg" alt="OMG Global">
            </div>
            <div class="col-sm-3 col-xs-6 item-box cms">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://tsovet.com" target="_blank">TSOVET <i class="fa fa-link"></i></a></h3>
					<span>3D Cart</span>
                  </div>  
                </div>
              </div>
              <img src="assets/theme/img/thumb/tsovet.jpg" alt="TSOVET">
            </div>
            <div class="col-sm-3 col-xs-6 item-box bed">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://nartools.com/" target="_blank">National Association of Realtors <i class="fa fa-link"></i></a></h3>
					<span>Backend</span>
                  </div>  
                </div>
              </div>
              <img src="assets/theme/img/thumb/nar.jpg" alt="NARTools">
            </div>
            <div class="col-sm-3 col-xs-6 item-box cms">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://pvartcenter.org" target="_blank">Palos Verdes Art Center <i class="fa fa-link"></i></a></h3>
					<span>Business Catalyst</span>
                  </div>
                </div>
              </div>
              <img src="assets/theme/img/thumb/pvac.jpg" alt="P.V. Art Center">
            </div>
            <div class="col-sm-3 col-xs-6 item-box fed bed cms">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a class="nolink">NightLifeConnect</a></h3>
					<span>Frontend, Backend, PHPfox</span>
                  </div>
                </div>
              </div>
              <img src="assets/theme/img/thumb/nlc.jpg" alt="NightLifeConnect">
            </div>
            <div class="col-sm-3 col-xs-6 item-box cms">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://www.thompsonchemists.com/" target="_blank">Thompson Chemists <i class="fa fa-link"></i></a></h3>
					<span>Magento</span>
                  </div>
                </div>
              </div>
              <img src="assets/theme/img/thumb/thompson.jpg" alt="Thompson Chemists">
            </div>
            <div class="col-sm-3 col-xs-6 item-box bed">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://www.sigulerguff.com/" target="_blank">Siguler Guff <i class="fa fa-link"></i></a></h3>
					<span>Backend</span>
                  </div>
                </div>
              </div>
              <img src="assets/theme/img/thumb/sigulerguff.jpg" alt="Siguler Guff">
            </div>
            <div class="col-sm-3 col-xs-6 item-box bed">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a class="nolink">Game Show Network</a></h3>
					<span>Backend</span>
                  </div>  
                </div>
              </div>
              <img src="assets/theme/img/thumb/gsn.jpg" alt="Play It Back - GSN">
            </div>
            <div class="col-sm-3 col-xs-6 item-box cms">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://www.help4srs.org/" target="_blank">H.E.L.P. <i class="fa fa-link"></i></a></h3>
					<span>WordPress</span>
                  </div>  
                </div>
              </div>
              <img src="assets/theme/img/thumb/help.jpg" alt="H.E.L.P.">
            </div>
            <div class="col-sm-3 col-xs-6 item-box cms">
              <div class="hover-area">
                <div class="text-vcenter-area">
                  <div class="text-vcenter">
                    <h3><a href="http://drmarion.com/" target="_blank">Dr. Marion <i class="fa fa-link"></i></a></h3>
					<span>Drupal</span>
                  </div>
                </div>
              </div>
              <img src="assets/theme/img/thumb/drmarion.jpg" alt="Dr. Marion">
            </div>
			
            <div class="item-box fed bed cms other" style="width:100%; height:10px;">&nbsp;</div>
          </div>
		  <!-- end grid portfolio -->

          <!-- logos -->  
          <div class="section-padd">
            <div class="container-body clearfix">
              <h2 class="title"><span>Past Projects/Clients</span></h2>
              <div class="white-space-10"></div>
              <ul class="list-inline text-center list-force-img clearfix">
                <li><a href="http://www.teleflora.com" target="_blank"><img src="assets/theme/img/patner/teleflora.png" alt="Teleflora"></a></li>
                <li><a href="http://belkin.com" target="_blank"><img src="assets/theme/img/patner/belkin.png" alt="Belkin"></a></li>
                <li><a href="http://neutrogena.com" target="_blank"><img src="assets/theme/img/patner/neutrogena.png" alt="Neutrogena"></a></li>
                <li><a href="http://samsung.com" target="_blank"><img src="assets/theme/img/patner/samsung.png" alt="Samsung"></a></li>
                <li><a href="http://mazdausa.com" target="_blank"><img src="assets/theme/img/patner/mazda.png" alt="Mazda"></a></li>
                <li><img src="assets/theme/img/patner/isuzu.png" alt="Isuzu"></li>
                <li><a href="http://olympusamerica.com/" target="_blank"><img src="assets/theme/img/patner/olympus.png" alt="Olympus"></a></li>
              </ul><!-- end logos -->
            </div>
          </div>
		</section>
		<?php endif ?>
		
        <!-- start contact section -->
        <section id='contact'>

          <!-- map -->
          <div class="map-area  br-t br-b">
            <!-- change data-lat="48.856318" data-lng="2.351866" with your location-->
            <div class="map" id="map" data-lat="34.10" data-lng="-118.13"></div>
            <div class="map-scroll-space"></div>
            <div class="map-wait-msg">Please Wait...</div>
            <div class="map-detail-location">
              <h4>Location:</h4>
              <p>Alhambra, CA<br />U.S.A.</p>
            </div>
          </div><!-- end map -->

          <!-- contact form -->
          <div class="section-padd">
            <div class="container-body clearfix">
              <h2 class="title dark"><span>Tell Me About: <small id='show-subject'>...</small> <small><a href="#" class="fire-toogle-subject mini-arrow"><i class="fa fa-angle-down"></i></a></small></span></h2><div><em>Note: I'm not currently available for work or projects.</em></div>
              <div class="dropdown top-min">
                <a href="#" data-toggle="dropdown" id='toogle-subject'></a>
                <ul class="dropdown-menu" id="option_subject" >
                  <li><a href="#">Your Next Project</a></li>
                  <li><a href="#">Your Upcoming Conference</a></li>
                  <li><a href="#">Your Dev Training Program</a></li>
                  <li><a href="#">How We Met</a></li>
                </ul>
              </div>
              <div class="white-space-10"></div>
              <form method="post" id="ContactForm" name="contactForm" class="validate-form">
                <input type="hidden" name="subject" value="" id='subject_contact'>
                <input type="hidden" name="file" id="file-att" value="">
                <div class="form-group">
                  <label>Your Name (*)</label>
                  <input type="text" class="form-control form-flat" name="fullname" required>
                </div>
                <div class="form-group">
                  <label>Email (*)</label>
                  <input type="email" class="form-control form-flat" name="email" required>
                </div>
                <div class="form-group">
                  <label>Your Message (*)</label>
                  <textarea class="form-control form-flat" name="message" rows="8"  required></textarea>
                </div>

                <div class="hold-feature uploader-hold">
                  <div class="form-group">
                    <label>Attach Your Document (Optional) <span class="display-block ">(only .pdf  allowed , max size 2Mb)</span></label>
                    <div class="clearfix">						
                      <input type="button" id="upload-btn" class="btn  btn-file btn-xs btn-default clearfix" value="Choose file">
                      <div id="errormsg" class="clearfix error"></div>	              
                      <div id="pic-progress-wrap" class="progress-wrap"></div>	
                      <div id="picbox" class="attbox "></div>
                    </div>
                  </div>  
                </div>

                <div class="hold-feature captcha-hold">
                  <div class="form-group">
                    <!-- generate captcha -->
                    <div id="mycaptcha-wrap" class="mycaptcha1">
                      <div id="mycaptcha" class="mycaptcha1"></div>
                    </div>
                  </div>  
                </div>


                <div class="form-group">
                  <button type="submit" class="btn btnc2 with-br "><span>Send This Message</span></button>
                </div>

                <div class="form-group">
                  <!-- aja msg -->
                  <div class="preload-submit hidden"><hr/> <i class="fa fa-spinner fa-spin"></i> Please Wait ...</div>
                  <div class="message-submit error hidden"></div>
                </div>
              </form>
            </div>
          </div><!-- end contact form -->

        </section><!-- end contact section -->
      </div><!-- end Content body -->

      <!-- footer -->
      <footer class="main-footer">
        &COPY; <?=date('Y');?> I be J.A.C.
      </footer><!-- footer -->
    </div><!-- body-area -->


    <!-- portfolio details ajax -->
    <div class="over-fly-area" id="load-works">
      <div class="inner-overfly" id="work-wait-msg">
        <div class="middle-overfly">
          <h2 class="title-over">PLEASE WAIT...</h2>
        </div>
      </div>
      <div class="work-close"><a href="#" class="close-panel-work btn btn-xs btn-default">Close</a></div>
      <div id="load-work-html" ></div>
    </div>
    <!-- Modal Example-->
    <div class="modal fade" id="modal-example" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Extra Pages</h4>
          </div>
          <div class="modal-body">
            <ul class="list-boxpage">
              <li><a href="blog-list-posts.html" class="open-link">Blog List Post</a></li>
              <li><a href="blog-single-post.html" class="open-link">Blog Single Post</a></li>
              <li><a href="404.html" class="open-link">404 error</a></li>
              <li><a href="cooming-soon.html" class="open-link">Cooming Soon</a></li>
              <li><a href="theme-element.html" class="open-link">Theme Element</a></li>
            </ul>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div><!-- end  Modal Example-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/external/jquery.min.js"></script>
    <script src="assets/external/jquery.easing-1.3.pack.js"></script>

    <!-- Include all compiled plugins (below)-->
    <script src="assets/external/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/external/jquery.easypiechart.min.js"></script>
    <script src="assets/external/isotope.pkgd.min.js"></script>
    <script src="assets/external/validator/jquery.validate.min.js"></script>
    <script src="assets/external/simpleCaptcha/jquery.simpleCaptcha.js"></script>
    <script src="assets/external/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/external/metisMenu/metisMenu.js"></script>

    <!-- theme config --> 
    <script src="assets/theme/js/theme.js"></script>
    <script src="assets/theme/js/theme-custom.js"></script>

    <!-- map --> 
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> 
    <script src="assets/external/gmap3.min.js"></script>
    <script src="assets/theme/js/map.js"></script>
  </body>
</html>