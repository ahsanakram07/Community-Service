<!-- Footer -->
<section id="contact" class="backsetft hgtres">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-sm-12 col-lg-4">
				<h2 class="fclr">
					CONTACT INFO
				</h2>
				<div class="row contact-icon setloc">
					<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
						<span class="fa fa-home fa-lg clrseta" aria-hidden="true"></span>
					</div>
					<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
						<p class="pclr">SM-Office-E1-26C007 Ajman Free Zone, Amber Gem Tower 2, Sheikh Khalifa Bin Zayed Road, Ajman, UAE</p>
					</div>
				</div>
				<div class="row contact-icon setloc">
					<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
						<span class="fa fa-envelope clrseta" aria-hidden="true"></span>
					</div>
					<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
						<p class="pclr">
							<a href="mailto:info@example.com" style="text-decoration: none;">Contact@Community.com</a>
						</p>
					</div>
				</div>
				<div class="row contact-icon setloc">
					<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
						<i class="fa fa-phone clrseta"></i>
					</div>
					<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11 pclr">
						+923015478451 <br>
						+923214845412 <br>
						+923075414962
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-sm-12 col-lg-4">
				<h2 class="fclr">
					ABOUT US
				</h2>
				<p class="setsmod">
					Thank you for taking the time to visit our site! In today’s real estate market, renting is becoming a popular option again for a lot of people. We pride ourselves on our service to our clients.We’re sure you will find what you’re looking for among hundreds of our real estate listings!
				</p>
				<div class="textalign">
					<a href="#" class="fa fa-facebook faset fd"></a>
					<a href="#" class="fa fa-twitter faset td"></a>
					<a href="#" class="fa fa-google faset gd"></a>
					<a href="#" class="fa fa-rss faset fr"></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-sm-12 col-lg-4">
				<h2 class="fclr">
					LATEST NEWS
				</h2>
				<div class="toppadf">
					<?php

						$connection=connectToDatabase();

						$sql="SELECT * FROM blog LIMIT 5";

						$res=mysqli_query($connection,$sql);

						$row=mysqli_fetch_assoc($res);

					?>

					<?php

					do
					{

					?>

					<div>
						<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1 clrsetfot">
							<i class="fas fa-long-arrow-alt-right"></i>
						</div>
						<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11 pclrlat">
							<a href="blog.php" style="text-decoration: none;"><?php echo $row['Title']; ?></a>
						</div>
					</div>

					<?php

					}while($row=mysqli_fetch_assoc($res));

					?>

				</div>
			</div>			
		</div>
	</div>
	<h2 class="fclr">
		SUBSCRIBE TO OUR NEWSLETTER !
	</h2>
	<div class="row wrapup">
		<form action="database/subscribe.php" method="post">
		<div class="col-xs-12 col-md-8 col-sm-12 col-lg-8 nsemail a1">
			<input id="email" type="text" class="form-control" name="email" placeholder="Enter Email" required="">
		</div>
		<div class="col-xs-12 col-md-4 col-sm-12 col-lg-4 a2">
			<input type="submit" class="btn btn-default hovf pad20" value="Subscribe">
		</div>
		</form>
	</div>
	<div class="hsets">
		<div class="backcop">
			<div class="pclrcop">
				<p>
					<center>© 2018 Community Service At Your Palm. All rights reserved</center>
				</p>
			</div>
		</div>		
	</div>
</section>
<!-- //Footer -->

<!-- TO TOP BUTTON -->
<section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type = "text/javascript" >
	    var scrolltotop = {
	        setting: {
	            startline: 100,
	            scrollto: 0,
	            scrollduration: 1e3,
	            fadeduration: [500, 100]
	        },
	        controlHTML: '<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow86.png" />',
	        controlattrs: {
	            offsetx: 5,
	            offsety: 5
	        },
	        anchorkeyword: "#top",
	        state: {
	            isvisible: !1,
	            shouldvisible: !1
	        },
	        scrollup: function() {
	            this.cssfixedsupport || this.$control.css({
	                opacity: 0
	            });
	            var t = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto);
	            t = "string" == typeof t && 1 == jQuery("#" + t).length ? jQuery("#" + t).offset().top : 0, this.$body.animate({
	                scrollTop: t
	            }, this.setting.scrollduration)
	        },
	        keepfixed: function() {
	            var t = jQuery(window),
	                o = t.scrollLeft() + t.width() - this.$control.width() - this.controlattrs.offsetx,
	                s = t.scrollTop() + t.height() - this.$control.height() - this.controlattrs.offsety;
	            this.$control.css({
	                left: o + "px",
	                top: s + "px"
	            })
	        },
	        togglecontrol: function() {
	            var t = jQuery(window).scrollTop();
	            this.cssfixedsupport || this.keepfixed(), this.state.shouldvisible = t >= this.setting.startline ? !0 : !1, this.state.shouldvisible && !this.state.isvisible ? (this.$control.stop().animate({
	                opacity: 1
	            }, this.setting.fadeduration[0]), this.state.isvisible = !0) : 0 == this.state.shouldvisible && this.state.isvisible && (this.$control.stop().animate({
	                opacity: 0
	            }, this.setting.fadeduration[1]), this.state.isvisible = !1)
	        },
	        init: function() {
	            jQuery(document).ready(function(t) {
	                var o = scrolltotop,
	                    s = document.all;
	                o.cssfixedsupport = !s || s && "CSS1Compat" == document.compatMode && window.XMLHttpRequest, o.$body = t(window.opera ? "CSS1Compat" == document.compatMode ? "html" : "body" : "html,body"), o.$control = t('<div id="topcontrol">' + o.controlHTML + "</div>").css({
	                    position: o.cssfixedsupport ? "fixed" : "absolute",
	                    bottom: o.controlattrs.offsety,
	                    right: o.controlattrs.offsetx,
	                    opacity: 0,
	                    cursor: "pointer"
	                }).attr({
	                    title: "Scroll to Top"
	                }).click(function() {
	                    return o.scrollup(), !1
	                }).appendTo("body"), document.all && !window.XMLHttpRequest && "" != o.$control.text() && o.$control.css({
	                    width: o.$control.width()
	                }), o.togglecontrol(), t('a[href="' + o.anchorkeyword + '"]').click(function() {
	                    return o.scrollup(), !1
	                }), t(window).bind("scroll resize", function(t) {
	                    o.togglecontrol()
	                })
	            })
	        }
	    };
		scrolltotop.init(); 
	</script>
	<noscript>
		Not seeing a
		<a href="https://www.scrolltotop.com/">
			Scroll to Top Button
		</a>
		? Go to our FAQ page for more info.
	</noscript>

</section>
<!-- //TO TOP BUTTON -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/carousel.js"></script>

<!-- js-scripts -->
	
	<!-- tabs -->
	<script src="js/set/easy-responsive-tabs.js"></script>

	<script>
		$(document).ready(function(){
		  // Add scrollspy to <body>
		  $('body').scrollspy({target: ".navbar", offset: 50});   

		  // Add smooth scrolling on all links inside the navbar
		  $("#myNavbar a").on('click', function(event) {
		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    }  // End if
		  });
		});
	</script>
	
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- //tabs -->

	<!-- Sign Up Model -->
	<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		
		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		    modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		    modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>

	<!-- Confirm Password -->
	<script>
		var password = document.getElementById("password")
		, confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
		    confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
		    confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	</script>

	<!-- Log In Model -->

	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) 
		{
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipient = button.data('whatever') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.modal-title').text('New message to ' + recipient)
			modal.find('.modal-body input').val(recipient)
		})
	</script>

<!-- smooth scrolling -->
<script src="js/set/SmoothScroll.min.js"></script>

	<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
	<!--//scrolling js-->

</body>
</html>

