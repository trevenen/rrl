
<?php
 

 
try {
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

  $charge = \Stripe\Charge::create(array(
  "amount" => "3125",
  "currency" => "usd",
  "source" => $_POST['stripeToken'],
  "description" => "Charge for Slim"
));
	//send the file, this line will be reached if no error was thrown above
	print "<meta http-equiv=\"refresh\" content=\"0;URL=success.php\">";
 
 
//you can send the file to this email:
echo $_POST['stripeEmail'];
}
//catch the errors in any way you like
 
catch(Stripe_CardError $e) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=failed.php\">";
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
</html>