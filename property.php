<?php require 'head.php';?>
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />

	<link rel="stylesheet" type="text/css" href="css/royal.css">

<script type="text/javascript" src="http://dimsemenov.com/plugins/royal-slider/royalslider/jquery.royalslider.min.js?v=9.3.6"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
  $('#gallery-1').royalSlider({
    fullscreen: {
      enabled: true,
      nativeFS: true
    },
    controlNavigation: 'thumbnails',
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 850,
    loop: false,
    imageScaleMode: 'fit-if-smaller',
    navigateByClick: true,
    numImagesToPreload:2,
    arrowsNav:true,
    arrowsNavAutoHide: true,
    arrowsNavHideOnTouch: true,
    keyboardNavEnabled: true,
    fadeinLoadedSlide: true,
    globalCaption: true,
    globalCaptionInside: false,
    thumbs: {
      appendSpan: true,
      firstMargin: true,
      paddingBottom: 4
    }
  });
});
</script>

	<script type="text/javascript">
$(document).ready( function() {

if($(window).width() > 768){

// Hide all but first tab content on larger viewports
$('.accordion__content:not(:first)').hide();
// Activate first tab
$('.accordion__title:first-child').addClass('active');

} else {
  
// Hide all content items on narrow viewports
$('.accordion__content').hide();
};

// Wrap a div around content to create a scrolling container which we're going to use on narrow viewports
$( ".accordion__content" ).wrapInner( "<div class='overflow-scrolling'></div>" );

// The clicking action
$('.accordion__title').on('click', function() {
$('.accordion__content').hide();
$(this).next().show().prev().addClass('active').siblings().removeClass('active');
});

});
</script>

</head>
<body class="grey-bg noise">
	
	<?php require 'header.php';?>
	<div class="banner row">
		<div class="wrapper">
			<div class="img-box">
				<div class="details">
					<h1 class="name">Proche Moulin Rouge Place De Clichy</h1>
					<span class="hosted-by">Hosted by <span>Lovesmok</span></span>
					<div class="ratings">
						<a href="#">17 Reviews </a><a href="#">71 Past Guests</a>
					</div>
					<div class="add-to-wishlist"><a href="#"><img alt="" src="img/heart.png"></a></div>

				</div>
							<ul class="available-icons-inner">
								<li><a href="#"><img alt="" src="img/time.png"></a></li>
								<li class="active"><a href="#"><img alt="" src="img/wifi.png"></a></li>
								<li><a href="#"><span class="top">28</span><span class="bottom">Sq m</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/bath.png"></span><span class="bottom">1</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/bed.png"></span><span class="bottom">1</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/peo.png"></span><span class="bottom">4</span></a></li>
							</ul>
				<div class="overlay-banner"></div>
				<img alt="" src="img/2.jpg" class="cover">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="wrapper">
			<div class="when">
				<span>When are you staying</span>
				<div class="date">
					<img alt="" src="img/date.png">
					<input type="text" class="check-in" placeholder="Check In" id="datepicker3">
					<input type="text" class="check-out" placeholder="Check Out" id="datepicker4">
				</div>
				<span>0 Nights</span>
				<div class="qty">
					<img alt="" src="img/user.png">

						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
				</div>

				<span class="big">
					From Rs.145 per night
				</span>
				<a href="#" class="submit">Check Availability</a>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="wrapper">
				<div class="info">
					<dl class="accordion">
					    <dt class="accordion__title"><span><img alt="" src="img/ov.png"></span>OVERVIEW</dt>
					    <dd class="accordion__content">
					    	<h1>About this property</h1>
					    	<p>Paris, Javel, Île-de-France, France - 1st floor studio with elevator accessThis text has been automatically translated for you.If you want to stay in a hotel or you will taste the charms of one of the most beautiful cities in the world and its most famous landmark: The Eiffel Tower; then welcome Cosy Private studio. Cozy private studio apartment is ideal for family / couple with children / friends / business and people with reduced mobility who want everything at your fingertips. A blend of elegance, comfort and sophistication welcomes you from the entrance of the building (luxury and guarding 24/24) to that of the apartment which consists of:<a class="ml10 see-more-about">See More</a>					    	</p>

					    	<div class="more-about"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>

					    	<br>
					    	<p>- An entrance, a spacious storage cupboard with hanging space and luggage. </p>
					    	<p>- A large bright living room with a comfortable sofa bed and a quality daily use (home of bed) for 2 people, extra foldable for 1 person, 1 baby cot <a href="#">Show more</a></p>



					    	<div class="icons-panel">
					    		<h2>The HouseTrip Happiness Pledge</h2>
					    		<p>We know that your holiday is important time spent with loved ones. So we care that you have the best possible HouseTrip experience.</p>


					    		<div class="with-icon">
					    			<span class="icon heart"><img alt="" src="img/hertbig.png"></span>
					    			<div class="content">
						    			<h3>We guarantee great holiday homes</h3>
						    			<span>We have only entire homes, and every single listing is screened by our team of experts</span>
					    			</div>
					    		</div>
					    		<div class="with-icon">
					    			<span class="icon badge"><img alt="" src="img/badge.png"></span>
					    			<div class="content">
						    			<h3>We make sure you love your stay</h3>
						    			<span>We only pay home-owners after you have checked-in and are happy with your home</span>
					    			</div>
					    		</div>
					    		<div class="with-icon">
					    			<span class="icon call"><img alt="" src="img/call.png"></span>
					    			<div class="content">
						    			<h3>We are always there for you</h3>
						    			<span>We have a multi-lingual service team of more than 100 people ready to assist you, 24/7, 365 days a year</span>
					    			</div>
					    		</div>

					    		<label>Millions of happy guests – over 95% of our users recommend HouseTrip.</label>
					    	</div>
					    	
					    </dd>
					    <dt class="accordion__title"><span><img alt="" src="img/ro.png"></span>ROOM GUIDE</dt>
					    <dd class="accordion__content room-guide">
						    <h1>Rooms and Facilities</h1>

						    <div class="left">
						    	<div class="mt10">
							    	<h3>Sleeping arrangements</h3>
							    	<span>Bedroom (3 Guests - 3 single beds)</span>
							    	<span>Bedroom (2 Guests - 1 double beds)</span>
							    	<span>Bedroom (2 Guests - 1 double beds)</span>
						    	</div>

						    	<div class="mt10">
							    	<h3>Bathroom(s)</h3>
							    	<span>Shower, Towels</span>
						    	</div>

						    	<div class="mt10">
							    	<h3>Kitchen</h3>
							    	<span>Coffee Maker</span>
							    	<span>Cooking Utensils</span>
							    	<span>Cultery</span>
							    	<span>Freezer</span>
							    	<span>Fridge</span>
							    	<span>Glasses</span>
							    	<span>Kettle</span>
							    	<span>Microwave</span>
							    	<span>Oven</span>
							    	<span>Plates</span>
							    	<span>Toaster</span>
						    	</div>

						    	<div class="mt10">
						    		<h3>General</h3>
						    		<span>Heating</span>
						    		<span>Linen</span>
						    		<span>Washing machine</span>
						    	</div>

						    	<div class="mt10">
						    		<h3>Entertainment and electronics</h3>
						    		<span>Internet ( Wi-Fi)</span>
						    	</div>

						    	<div class="mt10">
						    		<h3>Outdoor facilities</h3>
						    		<span>Barbecue</span>
						    		<span>Garden</span>
						    		<span>Parking</span>
						    		<span>Swiming Pool</span>
						    		<span>Terrace	</span>
						    	</div>
							</div>
												    	 <div id="gallery-1" class="royalSlider rsDefault">
							    <a class="rsImg bugaga" data-rsw="400" data-rsh="500"  data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/1.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/1.jpg">Vincent van Gogh - Still Life: Vase with Twelve Sunflowers<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/1.jpg" /></a>
							    <a class="rsImg" data-rsw="632" data-rsh="500" data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/2.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/2.jpg">Vincent van Gogh - The Starry Night<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/2.jpg" /></a>
							    <a class="rsImg" data-rsw="336" data-rsh="500" data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/3.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/3.jpg">Leonardo da Vinci - Mona Lisa<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/3.jpg" /></a>
							    <a class="rsImg" data-rsw="601" data-rsh="500" data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/5.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/5.jpg">Rembrandt - The Night Watch<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/5.jpg" /></a>
							    <a class="rsImg" data-rsw="350" data-rsh="500" data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/6.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/6.jpg">Johannes Vermeer - Girl with a Pearl Earring<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/6.jpg" /></a>
							    <a class="rsImg" data-rsw="596" data-rsh="500" data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/7.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/7.jpg">Paul Cezanne - Card Players<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/7.jpg" /></a>
							    <a class="rsImg" data-rsw="700" data-rsh="414" data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/8.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/8.jpg">Ilya Repin - Reply of the Zaporozhian Cossacks<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/8.jpg" /></a>
							    <a class="rsImg" data-rsw="470" data-rsh="500" data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/9.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/9.jpg">Ivan Aivazovsky - Chesmabattle<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/9.jpg" /></a>
							    <a class="rsImg" data-rsw="500" data-rsh="500" data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/10.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/10.jpg">Gustav Klimt - The Kiss<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/10.jpg" /></a>
							     <a class="rsImg" data-rsw="700" data-rsh="475" data-rsBigImg="http://dimsemenov.com/plugins/royal-slider/img/paintings/11.jpg" href="http://dimsemenov.com/plugins/royal-slider/img/paintings/700x500/11.jpg">Ivan Shishkin - Morning in a Pine Forest<img alt="" width="96" height="72" class="rsTmb" src="http://dimsemenov.com/plugins/royal-slider/img/paintings/t/11.jpg" /></a>
							  </div>

					    </dd>
					    <dt class="accordion__title"><span><img alt="" src="img/lo.png"></span>LOCATION</dt>
					    <dd class="accordion__content location">

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15243623.433784444!2d82.77922009999999!3d21.128995550000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1410281785794" width="550" height="500"  style="border:0"></iframe>

							<div class="right">
								<h2>Local Information</h2>
								<div class="row">
									<h3>Nearby Transport</h3>
									<p>Airport(Only Airport)- 12.8km</p>
									<p>Metro Station (Javal - Andre's Cirli) - 200km</p>
									<p>Train Station (Javal) - 100km</p>
								</div>
								<div class="row">
									<h3>Nearby grocery stores or supermarkets</h3>
									<p>Monoprix - 950m</p>
									<p>LIDL - 550m</p>
								</div>
								<div class="row">
									<h3>Nearby restaurants</h3>
									<p>Kaiseki - 300m</p>
									<p>Le Quinzième - 300m</p>
								</div>
								<div class="row">
									<h3>Nearby park</h3>
									<p>Parc André Citroën - 600m</p>
								</div>
								<div class="row">
									<h3>Nearby pharmacy</h3>
									<p>Pharmacie Rive Gauche - 100m</p>
								</div>
							</div>

					    </dd>
					    <dt class="accordion__title"><span><img alt="" src="img/re.png"></span>REVIEWS</dt>
					    <dd class="accordion__content reivews">
							<p>A number of these reviews have been written in another language. These have been automatically translated into English for you. <a href="#">View original text</a></p>					   
							<div class="row box">
								<div class="head">
									<div class="img-box left">
										<img alt="" src="img/us-rw.jpg">
									</div>
									<div class="name left">
										<h2>Vipin</h2>
									</div>
									<div class="right time">
										<span>Stayed August 2014</span>
									</div>									
								</div>
								<div class="content">
									<div class="row">
										<p>Did you not get my review? Any way we really enjoyed our trip to Paris and the studio was excellent. The owner Nadji was an excellent host who had great knowledge of Paris . The apt. was spotless and had everything even more than we needed. Plenty of eating places and a great supermarket all five mins. walk away. Nadji gave us maps to help get about as my partner is French I thought we would not need them (wrong).As we had never been in that area it was a bit confusing to start with .</p>
									</div>
								</div>
							</div>
							<div class="row box">
								<div class="head">
									<div class="img-box left">
										<img alt="" src="img/us-rw.jpg">
									</div>
									<div class="name left">
										<h2>Vipin</h2>
									</div>
									<div class="right time">
										<span>Stayed August 2014</span>
									</div>									
								</div>
								<div class="content">
									<div class="row">
										<p>Did you not get my review? Any way we really enjoyed our trip to Paris and the studio was excellent. The owner Nadji was an excellent host who had great knowledge of Paris . The apt. was spotless and had everything even more than we needed. Plenty of eating places and a great supermarket all five mins. walk away. Nadji gave us maps to help get about as my partner is French I thought we would not need them (wrong).As we had never been in that area it was a bit confusing to start with .</p>
									</div>
								</div>
							</div>
							<div class="row box">
								<div class="head">
									<div class="img-box left">
										<img alt="" src="img/us-rw.jpg">
									</div>
									<div class="name left">
										<h2>Vipin</h2>
									</div>
									<div class="right time">
										<span>Stayed August 2014</span>
									</div>									
								</div>
								<div class="content">
									<div class="row">
										<p>Did you not get my review? Any way we really enjoyed our trip to Paris and the studio was excellent. The owner Nadji was an excellent host who had great knowledge of Paris . The apt. was spotless and had everything even more than we needed. Plenty of eating places and a great supermarket all five mins. walk away. Nadji gave us maps to help get about as my partner is French I thought we would not need them (wrong).As we had never been in that area it was a bit confusing to start with .</p>
									</div>
								</div>
							</div>

							<div class="show-next">
								<span>SHOW NEXT 5 REVIEWS</span>
							</div>
						</dd>
						<dt class="accordion__title"><span><img alt="" src="img/date.png"></span>AVAILABILITY</dt>
					    <dd class="accordion__content location">	

						<dt class="accordion__title"><span><img alt="" src="img/i.png"></span>RATES</dt>
					    <dd class="accordion__content location">	
					    </dd>

						<dt class="accordion__title"><span><img alt="" src="img/i.png"></span>INFO</dt>
					    <dd class="accordion__content information">	

					<div class="box">
						<img alt="" src="img/01.jpg">
						<h1 class="name">Scott Sorenson <span>(Owner)</span></h1>	
						<span class="since">Advertister Since 2002</span>
						<div class="detail">
							<div class="phone"><span class="icon"><img alt="" src="img/call.png"></span><span>000000000000</span></div>
							<div class="lang"><span class="icon"><img alt="" src="img/call.png"></span><span>Speaks English</span></div>
							<div class="about"><span class="icon"><img alt="" src="img/call.png"></span><span>About Scott Sorenon</span></div>		
						</div>	
					</div>

					<form>
						<h1>Contact Owner</h1>
						<p><input type="text" placeholder="First Name"></p>
						<p><input type="text" placeholder="Last Name"></p>
						<p><input type="text" placeholder="Email"></p>
						<p><input type="text" placeholder="Phone"></p>
						<p><input type="text" class="fifty" placeholder="Check In"><input type="text" class="fifty right" placeholder="Check Out"></p>
						<p><select><option>Adults</option></select><select class="right"><option>Children</option></select></p>
						<p><textarea></textarea></p>
						<p><input type="checkbox"> Save my info for my next inquiry</p>
						<p><input type="submit"></p>
					</form>

						<div class="cont">	
							<h1>About Scott Soneron</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

					    </dd>
				    </dl>
				</div>
			</div>
		</div>

		<?php require 'footer.php'; ?>

</body>
</html>