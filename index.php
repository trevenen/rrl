<!DOCTYPE HTML>
<html>
	<head>
		<title>RedRock-Life.com Life Spicy!</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.onvisible.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/hover.js"></script> 
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		  <script type="text/javascript">
$(document).ready(function() {	

	if (once_per_session==0)
		loadpopunder()
	else
	{
	if (get_cookie('popunder')==''){
		loadpopunder()
		document.cookie="popunder=yes"
	}
	}

	

});
</script>

<script type="text/javascript">

//Pop-under window II- By JavaScript
//Credit notice must stay intact for use
//Visit http://javascriptkit.com for this script

//Pop-under only once per browser session? (0=no, 1=yes)
//Specifying 0 will cause popunder to load every time page is loaded
var once_per_session=1

///No editing beyond here required/////

function get_cookie(Name) {
  var search = Name + "="
  var returnvalue = "";
  if (document.cookie.length > 0) {
    offset = document.cookie.indexOf(search)
    if (offset != -1) { // if cookie exists
      offset += search.length
      // set index of beginning of value
      end = document.cookie.indexOf(";", offset);
      // set index of end of cookie value
      if (end == -1)
         end = document.cookie.length;
      returnvalue=unescape(document.cookie.substring(offset, end))
      }
   }
  return returnvalue;
}

function loadornot(){
if (get_cookie('popunder')==''){
loadpopunder()
document.cookie="popunder=yes"
}
}
function loadpopunder(){
var id = '#dialog';
			
		
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000);
		
			
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});	
}

</script>

		<style type="text/css">
      body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #000000;
}
        </style>
	<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/bootstrap.min.css" />
			<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">
	<div id="boxes">
<div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
<a href="#" class="close">X</a>

<div class="popuphead">
<h2>Red Rock Life</h2>
</div>
<div class="popbody">
<p>Be the the first to create <br> <span> an account</span></p>

</div>
<div class="popbutton">
<a class="buttonssssss floatleft" href="sign_up.php ">Sign Up</a>
<a class="buttonssssss floatright close" href="#">No!Thanks</a>
</div>


</div>
<!-- Mask to cover the whole screen -->
<div style="width: 1478px; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>

				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<!--<li>
								<a href="">Herbs</a>
								<ul>
									<li><a href="cayenne.html">Cayenne</a></li>
									<li><a href="cinnamon.html">Cinnamon</a></li>
									<li><a href="ginger.html">Ginger</a></li>
				                                        <li><a href="ginseng.html">Ginseng</a></li>
									<li><a href="milkthistle.html">Milk Thistle</a></li>
									<li><a href="lecithin.html">Lecithin</a></li>
								</ul>
							</li>-->
							<li><a href="cart.php">Cart</a></li>
							<li><a href="soap.php">Soap</a></li>
							<li><a href="necklace.php">Oil Necklace</a></li>
							<li><a href="contact-us.php">Contact</a></li>


						</ul>
						</ul>
					</nav>

			</div>
			
		<!-- Banner -->
	<section id="banner">
				<header class="homepage">
                </br>
					<h2>Red Rock Life</h2>
		</header>
	  </section>


		<!-- Carousel -->
			<section class="carousel">
				<div class="reel">

				  <article>
				    <a href="#"   class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>The original, the first</strong><br />
        
    </span>
					</a>				   			    		
					<header>
							<h3><a href="#">Life</a></h3>
							<h3 class="sm"><a  href="#"   class=" tooltips">Whats in me?
									<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							</a></h3>
							<a class="buttonssss" href="#">Buy</a>
					  </header>
					</article>

					<article>
					  <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					  <span>
        <strong>The original, the first</strong><br />
        
    </span>
					  </a>
					  <header>
							<h3><a href="#">Energy</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							</a></h3>
							<a class="buttonssss" href="#">Buy</a>
					  </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>The original, the first</strong><br />
        
    </span>
					</a>
					<header>
                    		<h3><a href="#">Fire</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							</a></h3>
							<a class="buttonssss" href="#">Buy</a>              
                    </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>The original, the first</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">ZZZ</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							</a></h3>
							<a class="buttonssss" href="#">Buy</a>
					  </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>The original, the first</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">Smile</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							
							</a>
							
							</h3>
							<a class="buttonssss" href="#">Buy</a>
					  </header>
					</article>

				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>The original, the first</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">Relief</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
														<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							</a>

							</h3>
							<a class="buttonssss" href="#">Buy</a>
					  </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>The original, the first</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">Peace</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							</a></h3>
							<a class="buttonssss" href="#">Buy</a>
				    </header>
				  </article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" /><span>
        <strong>The original, the first</strong><br />
        
    </span>
					
					
					</a>
					<header>
							<h3><a href="#">Breeze / Calm</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
												<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							</a>
		
							</h3>
							<a class="buttonssss" href="#">Buy</a>
				    </header>
				  </article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>The original, the first</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">Zombie</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							</a>
							
							</h3>
							<a class="buttonssss" href="#">Buy</a>
					  </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>The original, the first</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">Sunshine</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne Cinnamon Ginger Ginseng Milk Thisle Lecithin</strong><br />
        
    </span>
							</a>
							</h3>
							<a class="buttonssss" href="#">Buy</a>
					  </header>
					</article>

				</div>
			</section>
			
		<!-- Main -->
			<div class="wrapper style2">

				<article id="main" class="container special">
				  <header>
                  
                  
					
                    <h2><a href="#">About us</a></h2>
					  <p>RedRock-Life.com brings high quality organic  herb capsules that have been tested to provide a low dose of vital herbs for daily use. We are planning on offering gourmet spices, loose leaf teas, essential oils, herbal extracts, and natural body care ingredients. Our  selection focuses on certified organic, fair trade, ethically wild harvested, &amp; Kosher certified botanical products.<br>
					  </p>
					</header>
				  <footer>
					  <a href="#" class="button">Continue Reading</a>
					</footer>
				</article>

			</div>

		<!-- Features -->
			<div class="wrapper style1">
				
				<section id="features" class="container special">
					<header>
						<h2>Product </h2>
						<p>This Months Herbal Highlight</p>
					</header>
					<div class="row">
					  <article class="4u special">
							<a href="#" class="image featured"><img src="images/g1.jpg" alt="" /></a>
						<header>
								<h3><a href="#">Ginseng</a></h3>
						  </header>
						<!--<p>
                        Plant Family: Araliaceae </br>
                        What's it good for?  </br> 
                        <ul>
                        	<li><a href="">Increases string1</a></li>
							<li><a href="">Decreases string2</a></li>
							<li><a href="">Helps with string3</a></li>
						</ul>
                        
                        
                        More </br>
                        There are actually three different herbs commonly called ginseng: Asian or Korean ginseng (Panax ginseng), American ginseng (Panax quinquefolius), and Siberian “ginseng” (Eleutherococcus senticosus), the latter herb having many of the same effects as the first two even though it is in a different plant family. American ginseng is grown in the Eastern portion of North America, along the entire eastern seaboard, from Quebec to Florida. Unlike Asian ginseng, which has “warming” properties, American ginseng has “cooling” properties and is noted for its thirst quenching effects. Native Americans in North America used it in the exact same way as the Chinese, as a preventative.
						</p>
						<p>
                        The use of any ginseng may reduce the efficacy of certain precription drugs, please talk to your doctor or healthcare professional.
						</p>-->
						</article>
					  
						<article class="4u special">
							<a href="#" class="image featured"><img src="images/p1.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Cayenne</a></h3>
							</header>
							<!--<p>
								Plant Family: Solanaceae. </br>
                                It has been used both as a food and a medicine by Native Americans for over 9000 years. The Capsicum family includes bell peppers, red peppers, paprika, and pimento, but the most famous medicinal members of the family are cayenne and chile. The tasty hot peppers have long been used in many of the world’s cuisines, but their greatest use in health comes from, surprisingly, conventional medicine. </p>
                          <p>
                                Pepper in any form may be an irritant to the mucous membranes and caution should be exercised when handling. Don’t touch your eyes with your hands after you have handled capsaicin in any form as painful burning may occur. Excessive use internally may result in gastro-intestinal upset.

For educational purposes only This information has not been evaluated by the Food and Drug Administration.

This information is not intended to diagnose, treat, cure, or prevent any disease.
						  </p>-->
						</article>
						<article class="4u special">
							<a href="#" class="image featured"><img src="images/g.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Ginger</a></h3>
							</header>
							<!--<p>
                            Plant Family: Zingiberaceae </br>
                            Ginger is the most widely used and available herbal remedy on the planet, with billions of people using it every day as both food and medicine. A tropical perennial growing to a height of two feet, ginger has lance-shaped leaves and bears stalks of white or yellow flowers.

Ginger has long been the subject of fable and literature. For centuries, Europeans obtained ginger form Arab spice traders, who protected their sources by inviting stories of ginger field located in lands stalked by a fierce people called troglodytes. And Shakespeare wrote in Love’s Labour Lost, “had I but one penny in the world thou shouldst have it to buy ginger-bread.”

Ginger is used either fresh or dried in nearly two thirds of all traditional Chinese and Japanese herbal formulas. Fresh ginger is used to relieve dryness and heat, while dried ginger is used to relieve dampness and chill.
</p>
<p>
Although there are warnings in both Traditional Chinese Medicine and some medical texts about using ginger during pregnancy, ginger used in moderation, that is 3/4 teaspoon up to three times a day, poses no risk to mother’s or baby’s health. Studies in the late 1990’s found that eating as much as 2 to 3 tablespoons of raw ginger or 5 to 8 tablespoons of dried ginger daily will not stimulate uterine contraction. Excessive use may cause gastro-intestinal upset.
                            
                          </p>-->
						</article>
					</div>
				</section>

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						
						<!-- Tweets -->
							<section class="4u">
								<header>
									<h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
								</header>
								<ul class="divided">
									<li>
										<article class="tweet">
											American Diet, fast track to illness and disease!
											<span class="timestamp">5 minutes ago</span>
										</article>
									</li>
									<li>
										<article class="tweet">
											Fat Sick and Nearly Dead.
											<span class="timestamp">30 minutes ago</span>
										</article>
									</li>
									<li>
										<article class="tweet">
											Juicing - One of Natures best healers.
											<span class="timestamp">3 hours ago</span>
										</article>
									</li>
									<li>
										<article class="tweet">
											Raw Food, Hype or Honest Bliss?
											<span class="timestamp">5 hours ago</span>
										</article>
									</li>
								</ul>
							</section>

						<!-- Posts -->
							<section class="4u">
								<header>
									<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
								</header>
								<ul class="divided">
									<li>
										<article class="post stub">
											<header>
												<h3><a href="#">Cayenne Master Herb</a></h3>
											</header>
											<span class="timestamp">3 hours ago</span>
										</article>
									</li>
									<li>
										<article class="post stub">
											<header>
												<h3><a href="#">Benifits of Herbs</a></h3>
											</header>
											<span class="timestamp">6 hours ago</span>
										</article>
									</li>
									<li>
										<article class="post stub">
											<header>
												<h3><a href="#">Soap: Use Goat Milk?</a></h3>
											</header>
											<span class="timestamp">Yesterday</span>
										</article>
									</li>
									<li>
										<article class="post stub">
											<header>
												<h3><a href="#">Feeling Sick?</a></h3>
											</header>
											<span class="timestamp">2 days ago</span>
										</article>
									</li>
								</ul>
							</section>

						<!-- Photos -->
							<section class="4u">
								<header>
									<h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
								</header>
								<div class="row 25% no-collapse">
									<div class="6u">
										<a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
									</div>
									<div class="6u">
										<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
									</div>
								</div>
								<div class="row 25% no-collapse">
									<div class="6u">
										<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
									</div>
									<div class="6u">
										<a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
									</div>
								</div>
								<div class="row 25% no-collapse">
									<div class="6u">
										<a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
									</div>
									<div class="6u">
										<a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
									</div>
								</div>
							</section>

					</div>
					<hr />
					<div class="row">
						<div class="12u">
							
							<!-- Contact -->
								<section class="contact">
									<header>
										<h3>RedRock-Life.com </h3>
									</header>
									<p>Providing a place to learn how to a long and well enjoyed life. </p>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
										<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
									</ul>
								</section>
							
							<!-- Copyright -->
								<div class="copyright">
									<ul class="menu">
										<li>&copy; RedRock-Life.com. All rights reserved.</li>
										<li>Design: <a href="http://opensailsdev.com">Opensailsdev.com</a></li>
										<li>Updated: May 4th 2015</a></li>
									</ul>
								</div>
							
						</div>
					
					</div>
				</div>
			</div>

	</body>
</html>
