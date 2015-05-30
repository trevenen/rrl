<!DOCTYPE HTML>
<html>
	<head>
		<?php include 'header.php'
	?>
		<?php include 'menu.php'
	?>
		
			</div>
			
		<!-- Main -->
<div class="bodys">
			<div class="wrapper style">

				<div class="container">
					      <div class="row">


        <!-- begin:content -->
        <div class=" ">
          <div class="row">
           <!-- <div class="col-md-12">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Girl</a></li>
                  <li><a href="#">Pants</a></li>
                  <li class="active">Blackbox</li>
                </ol>
            </div>-->
          </div>
		  <h2 class="headst"> <span>RedRock Life</span> <span class="text-yellow">.</span></h2>
          <div class="row">
		
                
              
            <div class="col-md-12">
              
              <div class="row balsala">
                <!-- begin:product-image-slider -->
                <div class="col-md-6 col-sm-6 balerc">
                  <div id="product-single" >
                    <div class="carousel-inner">
                      <div class="item active">
                        <div class="product-single">
                          <img src="images/16.png" class="img-responsive">
                        </div>
                      </div>
                    <!--  <div class="item">
                        <div class="product-single">
                          <img src="images/16.png" class="img-responsive">
                        </div>
                      </div>
                      <div class="item">
                        <div class="product-single">
                          <img src="images/16.png" class="img-responsive">
                        </div>
                      </div>-->
                    </div>

                    <!--<a class="left carousel-control" href="#product-single" data-slide="prev">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#product-single" data-slide="next">
                      <i class="fa fa-angle-right"></i>
                    </a>-->
                  </div>
                </div>
                <!-- end:product-image-slider -->

                <!-- begin:product-spesification -->
                <div class="col-md-6 col-sm-6 ">
                  <div class="single-desc">
                    <form>
                     <!-- <span class="visible-xs">
                          <strong>Blackbox / AF0012 / In Stock</strong>
                      </span>

                      <table>
                        <tbody>
                          <tr class="hidden-xs">
                              <td><strong>Name</strong></td>
                              <td>:</td>
                              <td></td>
                          </tr>
                          <!--<tr class="hidden-xs">
                              <td><strong>Product Code</strong></td>
                              <td>:</td>
                              <td>AF0012</td>
                          </tr>
                          <tr class="hidden-xs">
                              <td><strong>Availability</strong></td>
                              <td>:</td>
                              <td>In Stock</td>
                          </tr>
                          <tr>
                              <td colspan="3"><!--<span class="price-old">$32.91</span> <span class="price">$21.42</span></td>
                          </tr>-->
                          <tr >
                              <td><strong class="version2">Ginseng ($21.42) <span>QTY</span></strong></td>
                              <td>:</td>
                              <td >
                                <select class="form-control ccccc"">
                                  <option>10</option>
                                  <option>30</option>
                                  <option>60</option>
                                  
                                </select>
                            </td>   
                          </tr>
                          <tr >
                              <!--<td><strong>Size</strong></td>
                              <td>:</td>
                              <td>
                                <select class="form-control ccccc"">
                                  <option>XS</option>
                                  <option>S</option>
                                  <option>M</option>
                                  <option>L</option>
                                  <option>XL</option>
                                </select>
                              </td>
                          </tr>
                          <tr>
                              <td><strong>Quantity</strong></td>
                              <td>:</td>
                              <td class="">
                                <input type="text" class="form-control cccccc " value="1">
                              </td>
                          </tr>-->
                          <tr>
                              <td colspan="3">
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

  \Stripe\Stripe::setApiKey("sk_test_d7m70r7GBMBg1HDDYLafeOkZ"); //Replace with your Secret Key
  $token = $_POST['stripeToken'];
 try { $charge = \Stripe\Charge::create(array(
  "amount" => "1500",
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
	<form class="opn" action="cart.php" method="post">
			 
								<script src="https://checkout.stripe.com/checkout.js"></script>

<button class="buttonssss" id="customButton">Buy</button>

<script>
  var handler = StripeCheckout.configure({
    key: 'pk_test_EfZEbqvejyNgQvtRl20zSmOZ',
    image: 'images/17.png',
    token: function(token) {
      // Use the token to create the charge with a server-side script.
      // You can access the token ID with `token.id`
    }
  });

  $('#customButton').on('click', function(e) {
    // Open Checkout with further options
    handler.open({
      name: 'Red Rock Life',
      description: '',
      amount: 2000
    });
    e.preventDefault();
  });

  // Close Checkout on page navigation
  $(window).on('popstate', function() {
    handler.close();
  });
</script>
						</form>
                              </td>  
                          </tr>
                        </tbody>
                      </table>
                    </form>
                  </div>
                </div>
                <!-- end:product-spesification -->
              </div>
              <!-- break -->
              <!-- begin:product-detail -->
              <div class="row">
                <div class="col-md-12 content-detail">
                    <ul id="myTab" class="nav nav-tabs">
                      <li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
                      <!--<li class=""><a href="#care" data-toggle="tab">Care</a></li>
                      <li class=""><a href="#size" data-toggle="tab">Sizing</a></li>-->
                    </ul>

                    <div id="myTabContent" class="tab-content">
                      <div class="tab-pane fade active in" id="desc">
                        <p>RedRock Life, the perfect cobination of Cayanne, Cinnamon, Ginger, Ginseng, Milk Thistle, and Lecithin. 
  Our ingredients are only the highest quality, and after taking 10 you will feel the differnce. Try some today.</p>
                      </div>
                     
             
                    </div>
                </div>
              </div>
              <!-- end:product-detail -->

              <!-- begin:related-product -->
             
              <!-- end:related-product -->

            </div>
          </div>
        </div>
		        <!-- begin:sidebar -->

        <!-- end:sidebar -->
        <!-- end:content -->
      </div>
					</div>
				</div>
       		<section class="products-list">			
			<div class="container">
			<!-- Heading Starts -->
				<h2 class="product-head">Related Products</h2>
			<!-- Heading Ends -->
			<!-- Products Row Starts -->
				<div class="row">
				<!-- Product #1 Starts -->
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/16.png" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product.html">Pills</a></h4>
								<div class="description">
									This pill has cayanne as the main ingredient, it also contains cinnamon, milk thistle, and lecithin
								</div>
								<div class="price">
									<span class="price-new">$27.95</span> 
									<!--<span class="price-old">$249.50</span>-->
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
										<i class="fa fa-bar-chart-o"></i>
									</button>
									<button type="button" class="btn btn-cart">
										Add to cart
										<i class="fa fa-shopping-cart"></i> 
									</button>									
								</div>
							</div>
						</div>
					</div>
				<!-- Product #1 Ends -->
				<!-- Product #2 Starts -->
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/16.png" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product.html">Pills</a></h4>
								<div class="description">
									This pill has cayanne as the main ingredient, it also contains cinnamon, milk thistle, and lecithin
								</div>
								<div class="price">
									<span class="price-new">$27.95</span> 
									<!--<span class="price-old">$249.50</span>-->
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
										<i class="fa fa-bar-chart-o"></i>
									</button>
									<button type="button" class="btn btn-cart">
										Add to cart
										<i class="fa fa-shopping-cart"></i> 
									</button>									
								</div>
							</div>
						</div>
					</div>
				<!-- Product #2 Ends -->
				<!-- Product #3 Starts -->
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="images">
								<img src="images/fun.jpg" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product.html">necklace</a></h4>
								<div class="description">
									This pill has cayanne as the main ingredient, it also contains cinnamon, milk thistle, and lecithin
								</div>
								<div class="price">
									<span class="price-new">$27.95</span> 
									<!--<span class="price-old">$249.50</span>-->
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
										<i class="fa fa-bar-chart-o"></i>
									</button>
									<button type="button" class="btn btn-cart">
										Add to cart
										<i class="fa fa-shopping-cart"></i> 
									</button>									
								</div>
							</div>
						</div>
					</div>
				<!-- Product #3 Ends -->
				<!-- Product #4 Starts -->
					<div class="col-md-3 col-sm-6">
						<div class="product-col">
							<div class="image">
								<img src="images/1.jpg" alt="product" class="img-responsive" />
							</div>
							<div class="caption">
								<h4><a href="product.html">goat milk soap</a></h4>
								<div class="description">
									This pill has cayanne as the main ingredient, it also contains cinnamon, milk thistle, and lecithin
								</div>
								<div class="price">
									<span class="price-new">$27.95</span> 
									<!--<span class="price-old">$249.50</span>-->
								</div>
								<div class="cart-button button-group">
									<button type="button" title="Wishlist" class="btn btn-wishlist">
										<i class="fa fa-heart"></i>
									</button>
									<button type="button" title="Compare" class="btn btn-compare">
										<i class="fa fa-bar-chart-o"></i>
									</button>
									<button type="button" class="btn btn-cart">
										Add to cart
										<i class="fa fa-shopping-cart"></i> 
									</button>									
								</div>
							</div>
						</div>
					</div>
				<!-- Product #4 Ends -->
				</div>
			<!-- Products Row Ends -->
			</div>
		</section>

</div>

		<!-- Footer -->
<?php include 'footer.php'
	?>
		

	</body>
</html>
