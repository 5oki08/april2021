<?php 
session_start() ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>GreenSeasons-OurBlog</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/styleresponsive.css">	
</head>
<body>

<div class="container" id="navigation">
	<div class="nav nav-expand">
		<li class="nav-item">
			<a href="dashboard.php" class="nav-link">HOME</a>
		</li>
		<li class="nav-item">
			<a href="blog.php" class="nav-link active">BLOG</a>
		</li>
		<li class="nav-item">
			<a href="gallery.php" class="nav-link">GALLERY</a>
		</li>
		<li class="nav-item">
			<a href="about.php" class="nav-link">ABOUT</a>
		</li>
		<div class="container nav nav-expand" id="credsinput">
			<li>
				<a href="../authentication/logout.php" class="credinput">Log Out</a>
			</li>
		</div>	
	</div>
</div>
<br/>
<div class="container-fluid">
	<div class="container">
		<p class="alert alert-<?php
						if ( isset($_GET['hireDetailsSuccess']) ) {
						echo $_SESSION['classTypeSuccess'];
						session_unset();
						session_destroy();
					}
					if ( isset($_GET['hireDetailsFail']) ) {
						echo $_SESSION['classTypeError'];
						session_unset();
						session_destroy();
					}	
					?>">
						<?php
							if ( isset($_GET['hireDetailsSuccess']) ) {
								if ( isset($_SESSION['detailsApprove']) ) {
									echo $_SESSION['detailsApprove'];
									session_unset();
									session_destroy();
								} else {
									echo "Hire Details Submitted. Our team will get back to you in due time." ;
								}
							}
							if ( isset($_GET['hireDetailsFail']) ) {
								if ( isset($_SESSION['detailsFail']) ) {
									echo $_SESSION['detailsFail'];
									session_unset();
									session_destroy();
								} else {
									echo "Hire Details Denied." ;
								}
							}
						?>
					</p>
	</div>
	<div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#blogOne" style="font-weight:700; font-size:21px;">
          Help Us Welcome Our Latest Fleet
        </a>
      </div>
      <div id="blogOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
        	<div class="container-fluid">
        		<div class="card-columns">
        			<div class="card" class="newfleetcard">
        				<img src="../images/images2/tata2.jpg" alt="" width="" height="" class="card-img-top" id="newfleetcardimg">
        				<div class="card-body">
        					<p class="card-text">
			        			With the new P-series trucks you get a low weight cab with great visibility and driveability that is well balanced to suit your specific needs. The P-series is our most versatile cab range, ideal for urban and regional operations and well-proven for construction and other demanding conditions.
			        		</p>
        				</div>
        			</div>
        			<div class="card" class="newfleetcard">
        				<img src="../images/images2/tata3.jpg" alt="" width="" height="" class="card-img-top" id="newfleetcardimg">
        				<div class="card-body">
        					<p class="card-text">
			        			With deep traffic planning and infrastructure expertise we can provide our customers with consultancy services, analysing and optimising the bus system. We support in defining ticketing system and giving advice on concept and supplier. We also offer financing solutions that suits your specific business.
			        		</p>
        				</div>
        			</div>
        			<div class="card" class="newfleetcard">
        				<img src="../images/images2/tata4.jpg" alt="" width="" height="" class="card-img-top" id="newfleetcardimg">
        				<div class="card-body">
        					<p class="card-text">
			        			The new G-series trucks are highly adaptable with great driveability and visibility. It's a well-balanced all round premium cab, and with an enlarged set of options you can now tailor make your G-series to perfection, to suite your business specific needs.
			        		</p>
        				</div>
        			</div>
        			<div class="card" class="newfleetcard">
        				<img src="../images/images2/tata5.jpg" alt="" width="" height="" class="card-img-top" id="newfleetcardimg">
        				<div class="card-body">
        					<p class="card-text">
			        			It’s no contradiction – the distinct R-cab is sturdier yet sharper than ever. Get ready to turn heads with the athletic body that redefines premium in long haulage. Persistent and versatile, the new R-series perfectly fits your life on the road.
			        		</p>
        				</div>
        			</div>
        			<div class="card" class="newfleetcard">
        				<img src="../images/images2/tata6.jpg" alt="" width="" height="" class="card-img-top" id="newfleetcardimg">
        				<div class="card-body">
        					<p class="card-text">
			        			The new S-series raises the stakes in long-distance driver comfort. Discover an interior that’s a haven of luxury, designed for spacious living. The flat floor, extended storage facilities and exceptional view from the driver position all add to its unique appeal.
			        		</p>
        				</div>
        			</div>
        			<div class="card" class="newfleetcard">
        				<img src="../images/images2/tata7.jpg" alt="" width="" height="" class="card-img-top" id="newfleetcardimg">
        				<div class="card-body">
        					<p class="card-text">
			        			Our Plug-In Hybrid truck takes the strengths of both the electric powertrain and the traditional combustion engine powertrain, to provide you with a vehicle that can run emission-free when needed, while still retaining the extended range possible when running on HVO or Biodiesel. Coupled with our connected services you also get fully automated switching between combustion engine and electric operation based on both geographic zones and time schedules.
			        		</p>
        				</div>
        			</div>
        			<div class="card" class="newfleetcard">
        				<img src="../images/images2/tata8.jpg" alt="" width="" height="" class="card-img-top" id="newfleetcardimg">
        				<div class="card-body">
        					<p class="card-text">
			        			The battery electric truck enables 100% emissions free operation 100% of the time, which may not only be a zone restriction in many cities very soon – but as our world strives for a sustainable future it's an increasingly common requirement to secure new contracts. And quiet, zero emission transports within cities isn't only needed to get goods delivered to stores, but also waste removed, new buildings constructed, and infrastructure maintained.
			        		</p>
        				</div>
        			</div>
        			<div class="card" class="newfleetcard">
        				<img src="../images/images2/tata9.jpg" alt="" width="" height="" class="card-img-top" id="newfleetcardimg">
        				<div class="card-body">
        					<p class="card-text">
			        			Every city lives and breathes differently, and you know the heartbeat of your streets best. We’ll work with you to establish fully customised metropolitan truck services that offer smooth journeys to drivers and "goods" alike, anywhere in the world.
			        		</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#blogTwo" style="font-weight:700; font-size:21px;">
        Tips And Tricks Of Truck Maintenance
      </a>
      </div>
      <div id="blogTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="row">
          	<div class="col-md-1"></div>
          	<div class="col">
          		<ol style="list-style-type: binary;">
          			<h4><li>HAVE A PLAN TO COMBAT BRAKE WEAR AND FAILURE</li></h4>
          			<p>Brake failure is a common cause for accidents, which often result in vehicle damage, third-party injury and lawsuits. To avoid these potentially catastrophic results, be sure to establish a plan for having a professional service your brakes as part of your truck maintenance routine. The distance a truck can travel between brake service depends on the driving habits of the driver, but it's safest to have them inspected and maintained during every oil change.</p> 
          			<img src="../images/images2/rustedBrake.jpg" alt="" width="350px" height="330px"><br/> <br/>
          			<h4><li>DO TESTS TO AVOID ENGINE PROBLEMS</li></h4>
          			<p>
          				Engine and drivetrain problems will take your truck off the road faster than you can say “downtime,” so be on the lookout for signs such as excessive smoking, loss of oil pressure or a decrease in power. These are symptoms of an unhealthy engine and should be dealt with immediately, preferably by a professional such as Empire Truck & Trailer that can properly diagnosis the problem and make the appropriate repairs. <br/> <br/>
          				<strong>Maintenace Tips: </strong>For the engine, arrange to have your maintenance provider conduct periodic compression tests, which will provide a sense of how long the engine will last. Other maintenance checks include monitoring engine coolant and exhaust temperature and keeping an eye on oil and boost pressures. Have all rubber parts under the hood and the wheel alignment checked on a regular basis.
          			</p>
          			<h4><li>PREVENT BODY PROBLEMS</li></h4>
          			<p>
          				Body corrosion is a major reason why some trucks are retired earlier than others. Salt and other chemicals are common causes of rust. If you happen to drive in areas where winter roads are treated for snow and ice, the chances are high your truck’s body will corrode over time. You can’t prevent rust, but you can slow it down and extend the life of the vehicle by embracing these truck maintenance tips. <br/>
          				<strong>Maintenace Tips: </strong>
          				<ul>
          					<li>This is a tough one, but it’s best to avoid driving through large puddles on roads and in parking lots. They collect contaminants along with abrasive dirt and grime, which can inflict heavy corrosion on your vehicle’s body and undercarriage</li>
          					<li>Wash your truck immediately following snow, sleet or rain. Snow and sleet mixed with road salt will corrode the chassis. Rain collects pollutants and deposits them as “acid rain,” which damages the protective finish.</li>
          					<li>Spray door locks with a lubricant such as WD-40 in colder weather before stowing your truck for the evening. This will protect the lock from moisture, which causes rust.</li>
          					<li>Wash your truck every 10 days. Washing keeps contaminants from eating through the clear coat, paint, primer and bare metal. Also be sure to keep any drains clear of debris and wipe down the doorjams</li>
          					<li>Paint chips bigger than the tip of a pen are perfect places for rust to begin and should be dealt with immediately. If your regular maintenance company doesn’t provide this service, find a reputable paint shop that will warrant its work.</li>
          				</ul>
          			</p>
          			<h4><li>KEEP ABREAST OF ELECTRICAL SYSTEM ISSUES</li></h4>
          			<p>
          				Newer trucks are more reliant on electrical systems to keep the engines running at peak efficiency or at all, for that matter. These newer vehicles use bundles of wires and many sensors to communicate with an onboard computer to keep their engines turning.<br/>
          				<strong>Maintenace Tips: </strong>Companies, such as Empire Truck & Trailer, that specialize in truck maintenance know how to diagnose and maintain the electrical components of your truck. Some things are best left to the pros — and maintaining and repairing electronics under the hood is one of them.
          				<img src="../images/images2/blog4.jpg" alt="" width="" height="">
          			</p>
          			<h4><li>REPLACE PARTS THAT ARE SUBJECT TO WEAR AND TEAR</li></h4>
          			<p>
          				Parts wear out and you replace them, right? Well, maybe not. Truck manufacturers eventually stop making parts for older models, and then you may be out of luck.<br/>
          				<strong>Maintenace Tips: </strong>Stockpile parts you know you will need, and buy parts with lifetime warranties. Here’s another tip. Some parts you might think don’t come with lifetime warranties actually do. Most brake pads, alternators, starters, and even oil seals come with warranties, so be sure to include them when making your parts list. Stockpiling may cost more in the long run, but the peace of mind that comes with knowing you’ll have them when you need them is priceless.
          			</p>
          			<h4><li>MAINTAIN LUBRICATION</li></h4>
          			<p>
          				Keep your truck lubed, using only high-quality grease on the suspension, steering, and drivetrain zerks. Failure to do so can lead to premature wear and costly breakdowns.
          				<strong>Maintenace Tips: </strong>Make sure that checking for leaks and slop in drivetrain parts is on your routine truck maintenance checklist. As a best practice, you should lube all applicable parts and fittings before each haul.
          			</p>
          			<h4><li>BE WARY OF SHORT TRIPS AND EXTENDED IDLING</li></h4>
          			<p>
          				Short trips and city driving are engine killers, and if you can’t avoid them be sure to prepare for them.
          				<strong>Maintenace Tips: </strong>Consider asking your maintenance provider to install a pre-luber system, which uses an electric pump to deliver oil to critical parts before the engine is cranked. Also consider a turbo timer, which senses how hot the engine is and keeps the engine running until it cools enough to shut down safely. Check this out for yourself by checking out the engine coolant temperature gauge the next time you turn off your truck. It’ll rise since the flow of cooling fluids has stopped.
          			</p>
          		</ol>
          	</div>
          	<div class="col-md-1"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#blogThree" style="font-weight:700; font-size:21px; color:tomato;">
          Check Out the available trucks for hire here. 
        </a>
      </div>
      <div id="blogThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="container-fluid">
          	<div class="card-columns">
          		<div class="card">
          			<img src="../images/images2/tata4.jpg" alt="" width="" height="" class="card-img-top">
          			<div class="card-body">
          				<p class="card-text">
          					At 37% off, available for hire between 08/04/2021 and 10/04/2021.
          				</p>
          			</div>
          			<div class="card-footer">
          				<a href="hire.php" class="hirelink stretched-link btn btn-info btn-block">Hire</a>
          			</div>
          		</div>
          		<div class="card">
          			<img src="../images/images2/tata6.jpg" alt="" width="" height="" class="card-img-top">
          			<div class="card-body">
          				<p class="card-text">
          					At 37% off, available for hire between 08/04/2021 and 10/04/2021.
          				</p>
          			</div>
          			<div class="card-footer">
          				<a href="hire.php" class="hirelink stretched-link btn btn-info btn-block">Hire</a>
          			</div>
          		</div>
          		<div class="card">
          			<img src="../images/images2/tata8.jpg" alt="" width="" height="" class="card-img-top">
          			<div class="card-body">
          				<p class="card-text">
          					At 37% off, available for hire between 08/04/2021 and 10/04/2021.
          				</p>
          			</div>
          			<div class="card-footer">
          				<a href="hire.php" class="hirelink stretched-link btn btn-info btn-block">Hire</a>
          			</div>
          		</div>
          	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
    <div class="container-fluid" style="background-color:#da90aa; padding:20px; border-radius:8px;">
      <div class="row">
        <div class="col-md" id="footercol1">
          <div class="container-fluid" style="display:block;">
            <h5 style="text-decoration:underline;">Quick Links</h5> 
            <nav class="nav nav-expand" id="footerquicklinks">
              <li class="quickitem">
                <a href="dashboard.php" class="quicklink">Home</a>
              </li> 
              <li class="quickitem">
                <a href="blog.php" class="quicklink">Blog</a>
              </li> 
              <li class="quickitem">
                <a href="gallery.php" class="quicklink">Gallery</a>
              </li> 
              <li class="quickitem" style="margin-bottom:10px;">
                <a href="about.php" class="quicklink">About</a>
              </li>
            </nav>
          </div>
        </div>
        <div class="col-md" id="footercol2">
          <a href="https://www.instagram.com/f1" class="footersocials" target="_blank">
            <img src="../images/instagrambnw.png" alt="GreenSeasons Instagram" width="50px" height="50px" id="imagessocial">
          </a>
          <a href="https://www.facebook.com/login" class="footersocials" target="_blank">
            <img src="../images/facebookbnw.png" alt="GreenSeasons Facebook" width="50px" height="50px" id="imagessocial">
          </a>
          <a href="https://www.twitter.com/i/trends" class="footersocials" target="_blank">
            <img src="../images/twitterbnw.png" alt="GreenSeasons Twitter" width="50px" height="50px" id="imagessocial">
          </a> <br/><br/>
          <div class="container">
            <a href="../authentication/emailsend.php" class="footersocials">
              <img src="../images/email.png" alt="GreenSeasons Instagram" width="50px" height="50px" id="imagessocial">
            </a>
            <a href="#" class="footersocials">
              <img src="../images/whatsapp.png" alt="GreenSeasons Facebook" width="50px" height="50px" id="imagessocial" data-toggle="tooltip" data-placement="left" title="+254 748 304 696">
            </a>
          </div>  
        </div>
        <div class="col-md" id="footercol3">
          <span style="font-weight:600;">All Rights Reserved ©<br/>2021</span>
        </div>
      </div>
    </div>
  </footer> 

</body>
</html>