
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Lifeguard Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="loginbtn.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
   <nav class="navbar navbar-default navbar-fixed-top">
         <a class="navbar-brand"><span><img src="img/128x128.png" id="logo"  alt="Lifesaver logo"></span>Lifeguard Search &amp; Rescue</a>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="navs"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="safety.php">Safety Information</a></li>
            <li><a href="lifeguards.php">Our Lifeguards</a></li>
            <li><a href="app.php">Our App</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
                 <li class="navs" ><a href="#" role="button" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
                </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 <div class="content">
<div class="safety-nav">
  <button class="safetybtn" onclick="openCity('tides')">Tides and Waves</button>
  <button class="safetybtn" onclick="openCity('wildlife')">Wildlife</button>
  <button class="safetybtn" onclick="openCity('sun')">Sun Safety</button>
  <button class="safetybtn" onclick="openCity('signs')">Signs &amp; Flags</button>
</div>
     
      <div id="main">
        <div id="tides" class="tabcontent city" style="display:inline-block">
        <div id="content-main1">
          <h3>Tides and Waves</h3>
          <p4>Always watch for signs of rip currents (also known as riptide). A rip current is water that is:</p4>
               <ul class="bullet">
                  <li>discoloured</li>
                  <li>choppy</li>
                  <li> foamy</li>
                  <li>filled with debris</li>
               </ul>
            
           <p4>What to do in a rip current:
            If you are caught in a rip current, remember the three Rs:</p4>
            
            <ul class="bullet">
            <li>relax - stay calm and float (don't swim against the current as you will get exhausted)</li>
            <li>raise - raise an arm to signal for help and if possible shout to shore</li>
            <li>rescue - float, wait for help and don't panic (people drown in rips because they panic)</li>
            </ul>
            <hr>
            <p4>When swimming, surfing or bodyboarding, it's helpful to understand the different types of waves so you can decide whether to go out or stay ashore.</p4>
            <br>
            <br>
            <p4>Spilling waves -</p4>
            <p5>Spilling waves are the safest to swim in - they appear when the top of the wave falls down the front of itself.</p5>
            <br> <br>
            <p4>Surging waves -</p4>
            <p5>Surging waves don't break and can easily knock someone over, dragging them out to sea.</p5>
            <br>  <br>  
            <p4>Dumping waves -</p4>
            <p5>Dumping waves break with great force in shallow water. They are powerful and dangerous and normally occur at low tide. Avoid going into the sea when you see dumping waves.</p5>
            <br>  <br>
            
            <p5>Know the tide times
            It's important to check the tide times for the beach you're visiting. The tide comes in and out twice a day. This means the beach that you arrived at in the morning can be a very different place only a few hours later. For example, if you walk out at low tide, you may not be able to return if the tide comes in and the water rises.

            If you're at the beach with children, make sure they are not playing somewhere that could be cut off if the tide comes in.</p5>
            <hr>
            <div id=foot1>
            <p4>More Useful Links:</p4> <br>
                <p5><a href="https://rnli.org/safety/know-the-risks/rip-currents" class="links1">For more Information about rip currents click here!</a></p5>
                <p5><a href="https://rnli.org/safety/know-the-risks/waves" class="links1">For more Information about wave safety click here!</a></p5>
             </div>
        </div>
      </div>
        
        <div id="wildlife" class="tabcontent city" style="display:none">
        <div id="content-main2">
          <h3>Wildlife</h3>
            <p4>Types of jellyfish you might see on a British beach:</p4> <br>
            <hr>
            <p4>Moon Jellyfish</p4>
            <br>
            <div id="moon-jellyfish"></div>
            <br>
            <p5>Moon jellyfishes look great in their transparent circular bell. It seems impossible to believe that these creatures can sting. But make no mistake, Moon Jellyfish stings and that hurts.
            Moon jellyfish stings are not fatal to humans. Infarct, their mild venom is not enough to seriously injure a full grown human being. The result of such stings is normally some pains and a small swollen spot.</p5>
            <br><br>
            <hr>
             <p4>Compass Jellyfish</p4>
            <br>
            <div id="compass-jellyfish"></div>
            <br>
            <p5>Compass jellyfish are easy to recognise by the brown v-shaped markings found running from the center of the jellyfish down to the outer edge. This jellyfish has long stinging tentacles hanging from the rim. These jellyfish also have long, trailing tentacles, which can provide a painful, but rarely dangerous, sting. They live across a number of cold and temperate areas of the Atlantic Ocean. </p5>
            <br><br>
            <hr>
            <p4>Lion’s Mane Jellyfish</p4>
            <br>
            <div id="lion-mane-jellyfish"></div>
            <br>
            <p5>The lion’s mane jellyfish cannot be missed in the open ocean where it prefers to float about, although they are rare in the UK. With tentacles up to 190 feet long and a bell diameter of almost 7 feet wide, some individuals even rival in size the blue whale.  A lion's mane jellyfish sting usually results in pain and redness in the area of the sting. The sticky tentacles of a lion's mane jellyfish can sting even when the jellyfish is dead, so give lion's mane jellyfish on the beach a wide berth</p5>
            <br><br>
            <hr>
            <p4>Barrel Jellyfish</p4>
            <br>
            <div id="dustbin-jellyfish"></div>
            <br>
            <p5>Barrel jellyfish along with moon jellyfish are the most common amongst the Uk. This is a large jellyfish, that feeds on plankton and it has no stinging nettles, and gives no painful sting. They are the largest species of jellyfish in the Northsea and are most likely to be seen either washed up dead on beaches or swimming out in deeper water. </p5>
            <br><br>
            <hr>
            <p4> Blue jellyfish</p4>
            <br>
            <div id="blue-jellyfish"></div>
            <br>
            <p5>The blue jellyfish is found as far away as Japan and Australia, but in Britain its distribution is limited to off the coast of the south west and Wales, with sightings elsewhere in the UK being rare. They can be up to 30cm across, but are typically half this size. It has a thicker umbrella than the common jellyfish, and is often a dark blue in colour. It has a mass of tentacles trailing below it, many of which have stinging cells present, they will sting but it is very mild.</p5>
            <br><br>
            <hr>
            <p4>Mauve stinger</p4>
            <br>
            <div id="mauve-jellyfish"></div>
            <br>
            <p5>A rare visitor to the UK, the mauve stinger jellyfish is generally found in deeper waters in the Atlantic Ocean. For this reason when it is found around the UK and Ireland it is most likely to turn up on the western coasts. The mauve stinger, however, does seem to be becoming more common in British and Irish waters, possible as a result of global warming. As the name implies the colour is usually mauve, pinkish or purple and bioluminescent light can be produced by this species. The mauve stinger contains powerful stinging cells on its tentacles and can be a considerable problems for bathers in areas such as the Mediterranean.</p5>
            <br>
            <hr>
            <p4>Treating Stings</p4>
            <br><br>
            <p5>When treating jellyfish stings there is a 3 step method recommended:</p5>
            <br><br>
            
                  <p5>1 - Douse the area with vinegar, to rinse away the tentacles and deactivate the stinging cells. If you do this first, you won’t spread the sting to other areas when you attempt to remove the tentacles.</p5>
            <br><br> 
                  <p5>2 - Pluck off the tentacles with tweezers. Scraping them off or rubbing with sand (another recommended approach) triggers any active stingers to release more venom, so you want to delicately lift the tentacles off the skin.</p5>
            <br><br>
                  <p5>3 - Soak the skin in hot water. Use water that's 110 to 113 F (43 to 45 C). If a thermometer isn't available, test the water on an uninjured person's hand or elbow — it should feel hot, not scalding. Keep the affected skin immersed or in a hot shower for 20 to 45 minutes.</p5>
              
            <hr>
            <div id=foot1>
            <p4>More Useful Links:</p4> <br>
                <p5><a href="https://www.nhs.uk/conditions/jellyfish-and-other-sea-creature-stings/treatment/#jellyfish-and-portuguese-man-of-war-stings" class="links1">For more Information about jellyfish click here!</a></p5><br>
             </div>
            </div>
        </div>
        <div id="sun" class="tabcontent city" style="display:none">
            <div id="content-main2">
            <h3>Sun Safety</h3>
            <p4>5 Family tips for Keeping Sun Safe:</p4>
            <br><br>
            <p4>1. Limit outdoor playtime between 10a.m. and 4p.m -</p4><p5> Avoid unnecessary exposure when the sun's rays are at their strongest. Even on cloudy or cooler days, ultraviolet (UV) rays remain strong. Shady spots can be just as tricky because of reflected light. If your child is playing outdoors during these hours, make sure to apply sufficient sunscreen.</p5>
            <br><br>
            <p4>2. Apply sunscreen properly -</p4><p5> Generously apply sunscreen 30 minutes before your child goes out in the sun. Choose a sunscreen with SPF (Sun Protection Factor) 15 or higher. Scented and colorful sunscreens appeal to some kids and make it easier to see which areas have been covered well. Don't forget nose, ears, hands, feet, shoulders, and behind the neck; lips can also burn, so apply a lip balm with SPF protection. Reapply sunscreen every 2 to 3 hours, or after sweating or swimming.</p5>
            <br><br>
            <p4>3. Cover up -</p4><p5> Wearing protective clothing and hats is one of the most important ways of warding off UV damage. When wet, light-colored clothing transmits just as much sunlight as bare skin. Keep your kids covered with dark colors, long sleeves, and pants whenever possible. And don't forget the accessories: sunglasses with UV protection to guard against burned corneas, and hats to prevent sunburned scalps and faces. Protective clothing, hats with brims, and sunglasses are just as important for babies. At the beach, bring along a large umbrella.</p5>
            <br><br>  
            <p4>4. Keep watch on medications -</p4><p5> Some medications increase the skin's sensitivity to the sun, so make sure to ask your doctor whether your child may be at risk. Prescription antibiotics and acne medications are the most notorious culprits, but when in doubt, ask.</p5>
            <br><br>
            <p4>5. Set a good example for your kids -</p4><p5> If your child sees you following sun-safety rules, he'll take them for granted and follow suit. Skin protection is important for every member of the family, so team up with your children to stay protected when venturing out in the sun.</p5>
            <hr>
            <p4>Sunscreen and its use:</p4> <br>
            <p5>Even in the UK the sun can be strong, especially by the coast, therefore it is essential to use a atleast a factor 15 sunscreen for adults and with children take extra care and use a higher spf. Cover exposed parts of your child's skin with sunscreen, even on cloudy or overcast days. Use one that has a sun protection factor (SPF) of 15 or above. Don't forget to apply it to their shoulders, nose, ears, cheeks, and the tops of their feet. Reapply often throughout the day. Always ensure your sunscreen has at least four-star UVA protection.
            <div id="sunscreen"></div>
            </p5>
        
            <hr>
            <div id=foot1>
            <p4>More Useful Links:</p4> <br>
                <p5><a href="https://www.nhs.uk/Livewell/skin/Pages/Sunsafe.aspx#safety" class="links1">For further sun safety information click here!</a></p5><br>
             </div>
            </div>
        </div>
        <div id="signs" class="tabcontent city" style="display:none">
          <div id="content-main2">
            <h3>Signs &amp; Flags</h3>
            <p4>When you're on the beach, pay attention to the flags and signs. They give important safety information about the area you are in, like whether: it's safe to swim or if the beach is good for surfing or other water sports. Also there will be flags indicating of any hazards in the area.</p4>
            <br>
            <hr>
            <p4>Red &amp; yellow flags</p4><br>
            <div id="red-yellow-flag"></div>
            <br><p5>This flag is flown above the lifeguard hut to show a lifeguard and first aid service is running. They are also used to mark out the safest area to swim, bodyboard and use inflatables.</p5><br><br>
            <hr>
            <p4>Red flags</p4><br>
            <div id="red-flag"></div>
            <br><br><p5>The red flag means it is dangerous to bathe or swim and you should not go into the water.</p5><br><br>
            <hr>
            <p4>Black &amp; White chequered flags</p4><br>
            <div id="black-white-flag"></div>
            <br><br><p5>For surfboards, stand-up paddleboards, kayaks and other non-powered craft. Launch and recovery area for kitesurfers and windsurfers. Never swim or bodyboard here.</p5><br><br>
            <hr>
            <p4>Orange windsocks</p4><br>
            <div id="orange-windsock"></div>
            <br><br><p5>Indicates offshore or strong wind conditions. Never use inflatables when the windsock is flying.</p5><br><br>
            <hr>
            <div id=foot1>
            <p4>More Useful Links:</p4> <br>
                <p5><a href="https://www.nidirect.gov.uk/articles/lifeguards-and-safety-flags" class="links1">For extra lifeguard and beach sign information click here!</a></p5><br>
             </div>
            </div>
        </div>
        </div>
      </div>
<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "inline-block";  
}
</script>
    <footer class="footer">
   
         <div>
         	<p3>Copyright © 2018 All rights reserved</p3>
         </div>
   
</footer>
      
      
<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img  id="img_logo" src="img/128x128.png">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
		                <div class="modal-body">
				    		<input id="login_username" class="form-control" type="text" placeholder="Email" required>
				    		<input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Type your e-mail.</span>
                            </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
            		    <div class="modal-body">
		    				<div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register an account.</span>
                            </div>
		    				<input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
			</div>
		</div>
	</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>


