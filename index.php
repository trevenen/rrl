<!DOCTYPE HTML>
<html>
	<head>
		<?php include 'header.php';
        
		?>

				
				<!-- Nav -->
			<?php include 'menu.php';
        
		?>

			</div>
			
		<!-- Banner -->
	<section id="banner">
				<header class="homepage">
                </br>
					<h2>Red Rock Life</h2>
		</header>
	  </section>


		<!-- Carousel -->
			<section class="backk">
			<div class="carousel">
<?php
 
//let's say each article costs 15.00 bucks


require_once('stripe/init.php');
require_once ('stripe/lib/Stripe.php') ;
require_once ('stripe/lib/Util/Set.php') ;
require_once ('stripe/lib/Util/RequestOptions.php') ;
require_once ('stripe/lib/Util/Util.php') ;
require_once ('stripe/lib/Error/Base.php') ;
require_once ('stripe/lib/Error/InvalidRequest.php') ;
require_once ('stripe/lib/Object.php') ;
require_once ('stripe/lib/ApiRequestor.php') ;
require_once ('stripe/lib/ApiResource.php') ;
require_once ('stripe/lib/SingletonApiResource.php') ;
require_once ('stripe/lib/Charge.php') ;

$files = glob('stripe/lib/*.php');
foreach ($files as $file) {
    require_once($file);   
}

$files = glob('stripe/lib/Error/*.php');
foreach ($files as $file) {
    require_once($file);   
}

$files = glob('stripe/lib/Util/*.php');
foreach ($files as $file) {
    require_once($file);   
}

  \Stripe\Stripe::setApiKey("sk_test_I4MGG2z032hyx5qLcZO9vtKW"); //Replace with your Secret Key
  $token = $_POST['stripeToken'];
 try { $charge = \Stripe\Charge::create(array(
  "amount" => "2000",
  "currency" => "usd",
  "source" => $token,
  "description" => "Charge for Facebook Login code."
));

	//send the file, this line will be reached if no error was thrown above
echo "Payment charged successfully";
 
 
//you can send the file to this email:
echo $_POST['$charge->id'];
}
//catch the errors in any way you like
 
catch(Stripe_CardError $e) {
	
}
 
 
catch (Stripe_InvalidRequestError $e) {
// Invalid parameters were supplied to Stripe's API
 
} catch (Stripe_AuthenticationError $e) {
// Authentication with Stripe's API failed
// (maybe you changed API keys recently)
 
} catch (Stripe_ApiConnectionError $e) {
// Network communication with Stripe failed
} catch (Stripe_Error $e) {
 
// Display a very generic error to the user, and maybe send
// yourself an email
} catch (Exception $e) {
 
// Something else happened, completely unrelated to Stripe
}
?>
				
				<div class="reel">

				  <article>
				    <a href="#"   class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>$31.25</strong><br />
        
    </span>
					</a>				   			    		
					<header>
							<h3><a href="#">Life</a></h3>
							<h3 class="sm"><a  href="#"   class=" tooltips">Whats in me?
									<span>
        <strong>Cayenne, Cinnamon, Ginger, Ginseng, Milk Thistle, Lecithin</strong><br />
        
    </span>
							</a></h3>
	<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_susTNzSGffUsTxg1QEZe9eoK"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5"
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										StripeCheckout.open(.opn);
									});
								});
								</script>
						</form>
					  </header>
					</article>

					<article>
					  <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					  <span>
        <strong>$31.25</strong><br />
        
    </span>
					  </a>
					  <header>
							<h3><a href="#">Energy</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne, Cinnamon, Ginger, Ginseng, Moringa, Milk Thistle, Lecithin</strong><br />
        
    </span>
							</a></h3>
						<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_susTNzSGffUsTxg1QEZe9eoK"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5"
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										StripeCheckout.open(.opn);
									});
								});
								</script>
						</form>
					
					  </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>$31.25</strong><br />
        
    </span>
					</a>
					<header>
                    		<h3><a href="#">Fire</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>90K cayenne, Ginseng, Ginger, 40K Cayenne, Milk Thistle</strong><br />
        
    </span>
							</a></h3>
						
							
	<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_susTNzSGffUsTxg1QEZe9eoK"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5"
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										StripeCheckout.open(.opn);
									});
								});
								</script>
						</form>


                    </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>$31.25</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">ZZZ</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne, Cinnamon, Ginger, Valerian , Milk Thistle, Lecithin</strong><br />
        
    </span>
							</a></h3>
					<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_susTNzSGffUsTxg1QEZe9eoK"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5  "
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										 StripeCheckout.open(opts);
									});
								});
								</script>
						</form>
					  </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>$31.25</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">Smile</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne, St Johns Wort, Mugwort, Milk Thistle, Lecithin</strong><br />
        
    </span>
							
							</a>
							
							</h3>
	
						
	<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_susTNzSGffUsTxg1QEZe9eoK"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5"
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										StripeCheckout.open(.opn);
									});
								});
								</script>
						</form>

						
					  </header>
					</article>

				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>$31.25</strong><br />
        
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
		
						
	<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_susTNzSGffUsTxg1QEZe9eoK"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5"
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										StripeCheckout.open(.opn);
									});
								});
								</script>
						</form>
			
					  </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>$31.25</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">Peace</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>Cayenne, Cinnamon, Ginger, St Johns Wort , Milk Thistle, Lecithin</strong><br />
        
    </span>
							</a></h3>
							
	<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_susTNzSGffUsTxg1QEZe9eoK"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5"
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										StripeCheckout.open(.opn);
									});
								});
								</script>
						</form>

							
				    </header>
				  </article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" /><span>
        <strong>$37.75</strong><br />
        
    </span>
					
					
					</a>
					<header>
							<h3><a href="#">Breeze / Calm</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
												<span>
        <strong>90K Cayenne, Ginger, Milk Thiste, Oregeno Oil, Lecithin</strong><br />
        
    </span>
							</a>
		
							</h3>
									
	<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_EfZEbqvejyNgQvtRl20zSmOZ"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5"
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										StripeCheckout.open(.opn);
									});
								});
								</script>
						</form>
						

						
				    </header>
				  </article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>$37.75</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">Zombie</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?<span>
        <strong>90K Cayenne, Cinnamon, Ginger, Ginseng, Guarana, Milk Thiste</strong><br />
        
    </span>
							</a>
							
							</h3>
							
	<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_susTNzSGffUsTxg1QEZe9eoK"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5"
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										StripeCheckout.open(.opn);
									});
								});
								</script>
						</form>
								

							
					  </header>
					</article>
				
				  <article>
				    <a href="#" class="image pill tooltip"><img src="images/16.png" alt="" />
					<span>
        <strong>$31.25</strong><br />
        
    </span>
					</a>
					<header>
							<h3><a href="#">Sunshine</a></h3>
							<h3 class="sm"><a class="tooltips" href="#">Whats in me?
							<span>
        <strong>90 K Cayenne, Cinnamon, Ginger, Milk Thistle, Lecithin</strong><br />
        
    </span>
							</a>
							</h3>
									

									<form class="opn" action="index.php" method="post">
			 
								<input 
									type="submit" 
									value="Buy"
									data-key="pk_test_susTNzSGffUsTxg1QEZe9eoK"
									data-amount="2000"
									data-currency="usd"
									data-name="Red Rock Life"
									data-description="Stripe payment for $5"
									data-image="images/17.png"
								/>
						 
								<script src="https://checkout.stripe.com/v2/checkout.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
								<script>
								$(document).ready(function() {
									$(':submit').on('click', function(event) {
										event.preventDefault();

										var $button = $(this),
											$form = $button.parents('form');

										var opts = $.extend({}, $button.data(), {
											token: function(result) {
												$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
											}
										});

										StripeCheckout.open(.opn);
									});
								});
								</script>
						</form>

							
					  </header>
					</article>

				</div>
			
				
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
	<?php include 'footer.php';
        
		?>

	</body>
</html>
