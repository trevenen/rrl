

<!DOCTYPE HTML>

<html>

   <head>
      <?php include 'header.php'
	?>
		<?php include 'menu.php'
	?>
		
      </div>
      <!-- Main -->
	 

      <div class="wrapper style1">
         <div class="container">
            <div class="row 200%">
               <div class="8u" id="content">
                  <div class="page-wrapper">
                     <main role="main" class="page-content">
                        <section class="section">
                           <div class="">
                              <header class="text-center">
                                 <h1 class="giga heading-font sal ">Sign Up</h1>
                              </header>
                              <div class="wpcf7" id="wpcf7-f133-o1" dir="ltr">
                                 <div class="screen-reader-response"></div>
                              			<form class="form-lists flat white vertical corporate-lead-form" method="POST" action="sign_up.php" id="" data-lead="Residential">
<?php

    
	if (isset($_post["submit"])){
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Password = $_POST['Password']; 
    $from = 'From:shuvo '; 
    $to = 'kamrulhasanshuvo@outlook.com'; 
    $subject = 'Sign Up';
    
			
    $body = "From: $Name\n E-Mail: $Email\n  Password:\n $Password Phone:\n $Phone";
				
  if ($_POST['submit'] ) {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
	}
?>
   				<label class="sighhh"  for="name">Full Name</label>
   				<input type="text" name="Name" id="Name" required="required" />
   				<label class="sighhh"  for="phone">Phone</label>
   				<input type="text" name="Phone" id="Phone" required="required" />
   				<label class="sighhh"  for="email">Email</label>
   				<input  type="email" name="Email" id="email" required="required" />
   				<!--<label for="location">City</label>
   				<select id="location" name="location" required="required"><option value=""></option>
<option value="Atlanta">Atlanta, GA</option>
<option value="Boston">Boston, MA</option>
<option value="Chicago">Chicago, IL</option>
<option value="Costa Mesa">Costa Mesa, CA</option>
<option value="Dallas">Dallas, TX</option>
<option value="Fort Lauderdale">Fort Lauderdale, FL</option>
<option value="Las Vegas">Las Vegas, NV</option>
<option value="Los Angeles">Los Angeles, CA</option>
<option value="Miami">Miami, FL</option>
<option value="New York">New York, NY</option>
<option value="Philadelphia">Philadelphia, PA</option>
<option value="San Diego">San Diego, CA</option>
<option value="San Francisco">San Francisco, CA</option>
<option value="Silicon Valley">Silicon Valley, CA</option>
<option value="Washington">Washington, DC</option>
<option value="West Palm Beach">West Palm Beach, FL</option>
<option value="USA">Other</option>
</select>-->
   				<label class="sighhh" for="phone">Password</label>
   				<input type="Password" name="Password" id="Password" required="required" />
   				<label class="sighhh"  for="phone">Re-type Password</label>
   				<input type="Password" name="password" id="Password" required="required" />
   				<input class="sighhh" type="submit" name="submit" value="Submit" class="submit-button" />
   			</form>
			
                              </div>
                           </div>
                        </section>
                     </main>
                  </div>
               </div>
               <div class="4u" id="sidebar">
                  <hr class="first" />
                  <section>
                     <header>
                        <h3><a href="#">About US</a></h3>
                     </header>
                     <p>
                       RedRock Life has been around since 2010 in one form or an other, it all started when Mr. Red's wife was feelling sick and tired. Not a normal sick and tired, but throuroughly tired, tired to the core. Well Mr. Red started researching chinese medicens and found out that when peoples bodys are tired they are not in harmony with life, energy, and God.
                     </p>
                     <footer>
                        <a href="about-us.php" class="button">Learn More</a>
                     </footer>
                  </section>
                  <hr />
                  <section>
                     <header>
                        <h3><a href="#">Latest Products</a></h3>
                     </header>
                   <!--  <p>
                        Tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                     </p>
                    <!-- <div class="row 50% no-collapse">
                        <div class="4u">
                           <a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
                        </div>
                        <div class="8u">
                           <h4>Nibh sed cubilia</h4>
                           <p>
                              Amet nullam fringilla nibh nulla convallis tique ante proin.
                           </p>
                        </div>
                     </div>-->
                    <!-- <div class="row 50% no-collapse">
                        <div class="4u">
                           <a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
                        </div>
                        <div class="8u">
                           <h4>Proin sed adipiscing</h4>
                           <p>
                              Amet nullam fringilla nibh nulla convallis tique ante proin.
                           </p>
                        </div>
                     </div>-->
                     <div class="row 50% no-collapse">
                        <div class="4u">
                           <a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
                        </div>
                        <div class="8u">
                           <h4>Cayenne</h4>
                           
                        </div>
                     </div>
                     <div class="row 50% no-collapse">
                        <div class="4u">
                           <a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
                        </div>
                        <div class="8u">
                           <h4>Ginseng</h4>
                         
                        </div>
                     </div>
                     <div class="row 50% no-collapse">
                        <div class="4u">
                           <a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
                        </div>
                        <div class="8u">
                           <h4>Ginger</h4>
                          
                        </div>
                     </div>
                     <footer>
                        <a href="shop.php" class="button">See more</a>
                     </footer>
                  </section>
               </div>
            </div>
            <hr />
            <div class="row">
               <article class="4u special">
                  <a href="#" class="image featured"><img src="images/g1.jpg" alt="" /></a>
                  <header>
                     <h3><a href="#">Ginseng</a></h3>
                  </header>
                 
               </article>
               <article class="4u special">
                  <a href="#" class="image featured"><img src="images/p1.jpg" alt="" /></a>
                  <header>
                     <h3><a href="#">Cayenne</a></h3>
                  </header>
                
               </article>
               <article class="4u special">
                  <a href="#" class="image featured"><img src="images/g.jpg" alt="" /></a>
                  <header>
                     <h3><a href="#">Ginger</a></h3>
                  </header>
                 
               </article>
            </div>
         </div>
      </div>
      <!-- Footer -->
<?php include 'footer.php'
	?>
		
	
   </body>
</html>
