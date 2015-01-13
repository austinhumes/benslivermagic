<?php include("header.inc"); ?>

<!-- <section id="homepageRotatingImages">
		<div id="gallery">
			<div id="slides">
				<div class="slide active"><img src="images/homepage_11.jpg" width="600" height="330"/></div>
				<div class="slide"><img src="images/homepage_6.jpg" width="600" height="330"/></div>
				<div class="slide"><img src="images/homepage_13.jpg" width="600" height="330"/></div>
				<div class="slide"><img src="images/homepage_8.jpg" width="600" height="330"/></div>
				<div class="slide"><img src="images/homepage_9.jpg" width="600" height="330"/></div>
				<div class="slide"><img src="images/homepage_10.jpg" width="600" height="330"/></div>
				<div class="slide"><img src="images/homepage_12.jpg" width="600" height="330"/></div>
			</div>
		</div>
	</section>
	 -->

	<!-- <img src="images/gallery/spiralCardsWithHatBW.jpg" width="600"
			style="margin: 0 auto 20px; width: 600px; display: block;" /> -->
	
	<div class="container homepageFeature">
		<img src="images/gallery/spiralCardsWithHatBW.jpg" width="402" style="margin: 0 auto 20px; width: 402px; display: block; float: left;" />
		<div id="cbp-qtrotator" class="cbp-qtrotator floatR">
	
			<div class="cbp-qtcontent current">
				<blockquote>
					<p>Ben, You are Great!</p>
					<footer>Jeff McBride, World Champion Magician </footer>
				</blockquote>
			</div>
		
			<div class="cbp-qtcontent">
				<blockquote>
					<p>Ben was amazing with his magic tricks. We are still trying to figure out how he did them. We have worked with other magicians, but none have provided the broad range of tricks and left our guests wondering "how did he do that", the way Ben did.</p>
					<footer>Joanne Leidenberger, San Diego Zoo</footer>
				</blockquote>
			</div>
		
			<div class="cbp-qtcontent">
				<blockquote>
					<p>The magician Ben Silver for Binding Site was AMAZING!!!!!!! I will definitely refer him again. My clients loved him and did not want to end the cocktail hour and start their awards, they wanted him to perform all night.</p>
					<footer>Julie Larsen, Omni Hotel</footer>
				</blockquote>
			</div>
			<span class="cbp-qtprogress"></span>
		</div>
	</div>
	
	<iframe
		width="560" height="315" src="http://www.youtube.com/embed/B_8G6AWL8mU"
		frameborder="0" allowfullscreen></iframe>
	
	<!--<div class="quote">
			"I'm still re-telling the stories of the kinds of tricks he did in front of us, and every time I get the goose bumps, and so do the people I'm talking to! He was absolutely incredible, and such a GREAT addition to our event. Our guests are still talking about him, and it's been over a week. He made an impression that will last a lifetime!"
			<br/>- Jennifer Coleman, San Diego Zoo
		</div>-->
	
	<p class="firstP">Ben Silver is one of the premier magicians in
		California. Ben Silver's dry humor, quick wit and nonchalant style of
		magic have made him a crowd favorite. Ben frequently host and performs
		at the World Famous Magic Castle in Hollywood and has performed for
		many top Corporations and Charities such as NBC/Universal, Edward
		Jones, The Dream Foundation, The San Diego Zoo, H&M, and Disney to name
		a few. Ben Silver makes a great addition to Corporate Events, Holiday
		parties, Trade shows, Sales Meetings, Dinner Parties, Weddings, and
		Private Engagements.</p>
	
	<p>Ben Silver performs Close Up magic also referred to as Strolling
		Magic. He is adept to entertain your 50-500 guests with shorter 3-5
		minute sets or Entertain groups of 20-100 guests at a time in a private
		setting for an intimate magical experience with Parlor Magic also
		referred to as Living Room Magic. Whether its modern day card tricks,
		impromptu illusions or awe-inspiring mentalism effects, Ben Silver will
		leave you mystified and satisfied.</p>

<!-- 
	<script>
		var totWidth=0;
		var positions = new Array();
			
		$(document).ready(function(){
			//On page load, mark the first image and thumbnail as active
			$('.slide:first').addClass('active');
			
			/* From http://tutorialzine.com/2009/11/beautiful-apple-gallery-slideshow/ */
			// Loop through all the slides and store their accumulative widths in totWidth
			$('#slides .slide').each(function(x){
				positions[x]= totWidth;
				totWidth += $(this).width();
		
				/* The positions array contains each slide's commulutative offset from the left part of the container */
				if(!$(this).width())
				{
					alert("Please, fill in width & height for all your images!");
					return false;
				}
			});
		
			$('#slides').width(totWidth);
		
			startSlideShow();
		});
				
	</script>-->
	
	<script type="text/javascript">
		$(document).ready(function() {
			//Quotes rotator
			var divs = $('.cbp-qtcontent');
			 
			function fade() {
				var current = $('.current');
				var currentIndex = divs.index(current),
				nextIndex = currentIndex + 1;
				 
				if (nextIndex >= divs.length) {
					nextIndex = 0;
				}
				 
				var next = divs.eq(nextIndex);
				 
				next.stop().fadeIn(1500, function() {
					$(this).addClass('current');
				});
				 
				current.stop().fadeOut(1500, function() {
					$(this).removeClass('current');
					_startProgress()
					setTimeout(fade, 8000);
				});
			}
			 
			function _startProgress(){
				$(".cbp-qtprogress").removeAttr('style');
				$(".cbp-qtprogress").animate({
					width:"375px",
				} , 8000);
			}
			 
			_startProgress()
			setTimeout(fade, 8000);
		});
	</script>

<?php include("footer.inc"); ?>

