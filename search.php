<!DOCTYPE html>
<html lang="en"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<title>Search Listing</title>
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/dropdown.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
	<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  	<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>

</head>
<body class="grey-bg noise">
	<div class="header-two">
		<div class="wrapper">
			<div class="top">
				<a href="#" class="logo"><img alt="" src="img/logo.png" width="140" ></a>
				<ul class="right">
					<li><a href="#">Log In</a></li>
					<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				          Dropdown <span class="caret"></span>
				        </a>
				        <ul class="dropdown-menu" role="menu">
				          <li><a href="#">Action</a></li>
				          <li><a href="#">Another action</a></li>
				          <li><a href="#">Something else here</a></li>
				          <li class="divider"></li>
				          <li><a href="#">Separated link</a></li>
				        </ul>
		   	        </li>
		   	        <li><a href="#">Help</a></li>
		   	        <li><a href="#">List your place</a></li>
				</ul>
			</div><!-- Top -->
			<div class="bottom">
				<input type="text" class="location" placeholder="France">
				<input type="text" class="check-in" placeholder="Check In" id="datepicker3">
				<input type="text" class="check-out" placeholder="Check Out" id="datepicker4">
				<select>
					<option>1 Guest</option>
					<option>2 Guest</option>
					<option>3 Guest</option>
				</select>
				<input type="submit" value="Search">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="featured-listings">
		<div class="wrapper">
			<ul>
				<li><a href="#"><div class="img"><div class="overlay"></div><img alt="" src="img/02.jpg"><span class="feat">FEATURED</span></div><span class="from">From Rs.334/nt</span><span class="name">Show Frej</span></a></li>
				<li><a href="#"><div class="img"><div class="overlay"></div><img alt="" src="img/02.jpg"><span class="feat">FEATURED</span></div><span class="from">From Rs.334/nt</span><span class="name">Show Frej</span></a></li>
				<li><a href="#"><div class="img"><div class="overlay"></div><img alt="" src="img/02.jpg"><span class="feat">FEATURED</span></div><span class="from">From Rs.334/nt</span><span class="name">Show Frej</span></a></li> <li><a href="#"><div class="img"><div class="overlay"></div><img alt="" src="img/02.jpg"><span class="feat">FEATURED</span></div><span class="from">From Rs.334/nt</span><span class="name">Show Frej</span></a></li>
				<li><a href="#"><div class="img"><div class="overlay"></div><img alt="" src="img/02.jpg"><span class="feat">FEATURED</span></div><span class="from">From Rs.334/nt</span><span class="name">Show Frej</span></a></li>
			</ul>
		</div>
		</div>
	</div>
	<div class="row">
		<div class="wrapper">
			<ul class="breadcrumbs">
				<li><a href="#">Home</a><span></span></li>
				<li><a href="#">Europe</a></li>
				<li class="active"><a href="#">France</a></li>
			</ul>
		</div>
	</div>
	<div class="row main-content">
		<div class="wrapper">
			<div class="left filter">
				<div class="show-offers">
					<img alt="" src="img/map.png">
					<span>Show offers on map</span>
				</div>

				<div class="filter-results">
					<span class="mainhead">FILTER YOUR RESULTS</span>
					<div class="no-of-bedroom">
						<span>Number of Bedrooms</span>
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
					<div class="price-per-night">
						<span class="head">Price per night</span>
						<div class="night-options">
							<label><input type="radio">Up to US$ 100</label>
							<label><input type="radio">Up to US$ 150</label>
							<label><input type="radio">Up to US$ 200</label>
							<label><input type="radio">Up to US$ 250</label>
							<label><input type="radio">Up to US$ 300</label>
						</div>
					</div>

					<div class="type-of-property">
						<span class="head">Type of property</span>
						<div class="property-options">
							<label><input type="checkbox">Appartment (500+)</label>
							<label><input type="checkbox">Holiday Home (500+)</label>
							<label><input type="checkbox">Private Home (500+)</label>
							<label><input type="checkbox">Appartment (500+)</label>
						</div>
					</div>


					<div class="amenities">
						<span class="head">Amenities</span>
						<div class="amenities-options">
							<label><input type="checkbox">Internet/WiFi (500+)</label>
							<label><input type="checkbox">Kitchen (500+)</label>
							<label><input type="checkbox">Tv (500+)</label>
							<label><input type="checkbox">AirCondition (500+)</label>
							<label><input type="checkbox">Balcony (500+)</label>
							<label><input type="checkbox">Breakfast (500+)</label>
							<label><input type="checkbox">LoveSmok (500+)</label>
							<label><input type="checkbox">Lightware (500+)</label>
						</div>
					</div>
				</div>

			</div>
			<div class="main right">
				<div class="top-destination">
					<span class="mainhead">TOP DESTINATION</span>
					<div class="left regions">
					<h2>Regions</h2>
						<ul>
							<li><a href="#">Provence-Alpes-Cote d'Azur (6313)</a></li>
							<li><a href="#">Ile-de-France (4373)</a></li>
							<li><a href="#">Languedoc-Roussillon (2819)</a></li>
							<li><a href="#">Rhone-Alpes (3055)</a></li>
							<li><a href="#">Aquitaine (2095)</a></li>
							<li><a href="#">Brittany (1875)</a></li>
							<li><a href="#">Paris (4217)</a></li>
							<li><a href="#">Aquitaine (2095)</a></li>
							<li><a href="#">Brittany (1875)</a></li>
						</ul>
					</div>
					<div class="right cities">
					<h2>Cities</h2>
						<ul>
							<li><a href="#">Provence-Alpes-Cote d'Azur (6313)</a></li>
							<li><a href="#">Ile-de-France (4373)</a></li>
							<li><a href="#">Languedoc-Roussillon (2819)</a></li>
							<li><a href="#">Rhone-Alpes (3055)</a></li>
							<li><a href="#">Aquitaine (2095)</a></li>
							<li><a href="#">Brittany (1875)</a></li>
							<li><a href="#">Paris (4217)</a></li>
							<li><a href="#">Aquitaine (2095)</a></li>
							<li><a href="#">Brittany (1875)</a></li>
						</ul>
					</div>
					<div class="more">
						<div class="left regions">
							<ul>
								<li><a href="#">Provence-Alpes-Cote d'Azur (6313)</a></li>
								<li><a href="#">Ile-de-France (4373)</a></li>
								<li><a href="#">Languedoc-Roussillon (2819)</a></li>
								<li><a href="#">Rhone-Alpes (3055)</a></li>
								<li><a href="#">Aquitaine (2095)</a></li>
								<li><a href="#">Brittany (1875)</a></li>
								<li><a href="#">Paris (4217)</a></li>
								<li><a href="#">Aquitaine (2095)</a></li>
								<li><a href="#">Brittany (1875)</a></li>
							</ul>
						</div>
						<div class="right cities">
							<ul>
								<li><a href="#">Provence-Alpes-Cote d'Azur (6313)</a></li>
								<li><a href="#">Ile-de-France (4373)</a></li>
								<li><a href="#">Languedoc-Roussillon (2819)</a></li>
								<li><a href="#">Rhone-Alpes (3055)</a></li>
								<li><a href="#">Aquitaine (2095)</a></li>
								<li><a href="#">Brittany (1875)</a></li>
								<li><a href="#">Paris (4217)</a></li>
								<li><a href="#">Aquitaine (2095)</a></li>
								<li><a href="#">Brittany (1875)</a></li>
							</ul>
						</div>
					</div>
					<div class="row foot">
						<a href="#">Show More ></a>
					</div>
				</div><!-- Top Destination -->
				<div class="row sort">
					<div class="left">
						<span>500+ Properties</span>
					</div>
					<div class="right">

		   	        <div class="options">
		   	        	<div class="offers active">Offers</div>
		   	        	<div class="map">Map</div>
		   	        </div>
						
					<div class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" >
				          Sort by Most Popular <span class="caret"></span>
				        </a>
				        <ul class="dropdown-menu" role="menu">
				          <li><a href="#">Most Popular </a></li>
				          <li><a href="#">Price: Low to High</a></li>
				          <li><a href="#">Price: Hight to Low</a></li>
				        </ul>
		   	        </div>
					</div>
				</div><!-- Sortings -->

				<div class="box">
					<div class="slider">
						<ul class="bxslider" style="margin:0; padding: 0">
							<li><img alt="" src="img/02.jpg"></li>
							<li><img alt="" src="http://c50039.r39.cf3.rackcdn.com/uploads/photo/file/10403393/default.jpg"></li>
							<li><img alt="" src="http://c50039.r39.cf3.rackcdn.com/uploads/photo/file/10403583/default.jpg"></li>
						</ul>
					</div>		
					<div class="details">
						<h1 class="name">Cosy Private Studio Near Eiffel Tower</h1>
						<span class="location">Paris, France</span>
						<div class="row">
							<span class="from">From</span>
							<span class="price">Rs.5999/</span>
							<span class="time">Night</span>
						</div>
						<div class="row">
							<a href="#" class="add-to-shortlist"><img alt="" src="img/heart.png"></a>
							<a href="#" class="view-details">View Details</a>
						</div>
						<div class="row">
							<ul class="available-icons">
								<li class="active"><a href="#"><img alt="" src="img/time.png"></a></li>
								<li><a href="#"><img alt="" src="img/wifi.png"></a></li>
								<li><a href="#"><span class="top">28</span><span class="bottom">Sq m</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/bath.png"></span><span class="bottom">1</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/bed.png"></span><span class="bottom">1</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/peo.png"></span><span class="bottom">4</span></a></li>
							</ul>
						</div>
					</div>
				</div>


				<div class="box">
					<div class="slider">
						<ul class="bxslider" style="margin:0; padding: 0">
							<li><img alt="" src="http://c50039.r39.cf3.rackcdn.com/uploads/photo/file/10403583/default.jpg"></li>
							<li><img alt="" src="http://c50039.r39.cf3.rackcdn.com/uploads/photo/file/10403393/default.jpg"></li>
							<li><img alt="" src="img/02.jpg"></li>

						</ul>
					</div>		
					<div class="details">
						<h1 class="name">Cosy Private Studio Near Eiffel Tower</h1>
						<span class="location">Paris, France</span>
						<div class="row">
							<span class="from">From</span>
							<span class="price">Rs.5999/</span>
							<span class="time">Night</span>
						</div>
						<div class="row">
							<a href="#" class="add-to-shortlist"><img alt="" src="img/heart.png"></a>
							<a href="#" class="view-details">View Details</a>
						</div>
						<div class="row">
							<ul class="available-icons">
								<li><a href="#"><img alt="" src="img/time.png"></a></li>
								<li><a href="#"><img alt="" src="img/wifi.png"></a></li>
								<li><a href="#"><span class="top">28</span><span class="bottom">Sq m</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/bath.png"></span><span class="bottom">1</span></a></li>
								<li  class="active"><a href="#"><span class="top"><img alt="" src="img/bed.png"></span><span class="bottom">1</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/peo.png"></span><span class="bottom">4</span></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="box">
					<div class="slider">
						<ul class="bxslider" style="margin:0; padding: 0">
							<li><img alt="" src="http://c50039.r39.cf3.rackcdn.com/uploads/photo/file/10403393/default.jpg"></li>
							<li><img alt="" src="http://c50039.r39.cf3.rackcdn.com/uploads/photo/file/10403583/default.jpg"></li>
							<li><img alt="" src="img/02.jpg"></li>


						</ul>
					</div>		
					<div class="details">
						<h1 class="name">Cosy Private Studio Near Eiffel Tower</h1>
						<span class="location">Paris, France</span>
						<div class="row">
							<span class="from">From</span>
							<span class="price">Rs.5999/</span>
							<span class="time">Night</span>
						</div>
						<div class="row">
							<a href="#" class="add-to-shortlist"><img alt="" src="img/heart.png"></a>
							<a href="#" class="view-details">View Details</a>
						</div>
						<div class="row">
							<ul class="available-icons">
								<li><a href="#"><img alt="" src="img/time.png"></a></li>
								<li class="active"><a href="#"><img alt="" src="img/wifi.png"></a></li>
								<li><a href="#"><span class="top">28</span><span class="bottom">Sq m</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/bath.png"></span><span class="bottom">1</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/bed.png"></span><span class="bottom">1</span></a></li>
								<li><a href="#"><span class="top"><img alt="" src="img/peo.png"></span><span class="bottom">4</span></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="pagination">
					<span class="left">Displaying 1-25 of 500+ results</span>
					<ul class="right">
						<li><a href="#"></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">299</a></li>
						<li><a href="#">></a></li>
					</ul>
				</div>
				</div>
		</div>

	<div class="footer">
		<div class="wrapper">
			<div class="company">
				<h1>Company</h1>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">The Team</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
			<div class="fun">
				<h1>Fun</h1>
				<ul>
					<li><a href="#">2014 Travelers' Favorites</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Blogger Tools</a></li>
					<li><a href="#">Top Users</a></li>
					<li><a href="#">Recent Questions</a></li>
					<li><a href="#">Featured Postcards</a></li>
				</ul>				
			</div>
			<div class="legal">
				<h1>Legal</h1>
				<ul>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Guidelines</a></li>
				</ul>				
			</div>
			<div class="app right">
				<p ><img alt="" src="img/playfoot.png" class="right"></p>
				<p><img alt="" src="img/appfoot.png" class="right"></p>
				<ul class="social-icons">
					<li><a href="#"><img alt="" src="img/fb.png"></a></li>
					<li><a href="#"><img alt="" src="img/tw.png"></a></li>
					<li><a href="#"><img alt="" src="img/g.png"></a></li>
					<li><a href="#"><img alt="" src="img/p.png"></a></li>
				</ul>
			</div>
			<div class="copyright">
				<p><span>Copyright &copy; 2014 Company</span> <span class="power">Powered By : <a href="http://lovesmok.com">Lovesmok</a></span></p>
			</div>
		</div>

	</div>

	</div>
<script type="text/javascript">
		$(document).ready(function(){
			$(".price-per-night span.head").click(function(){
				$(".night-options").slideToggle();
			});
			$(".type-of-property span.head").click(function(){
				$(".property-options").slideToggle();
			});
			$(".amenities span.head").click(function(){
				$(".amenities-options").slideToggle();
			});
			$(".top-destination .foot").click(function(){
				$(".top-destination > .more").slideToggle();
			});
		});

	  $(function() {
	    $( "#datepicker3" ).datepicker();
	  });
	  $(function() {
	    $( "#datepicker4" ).datepicker();
	  });

	  $('.bxslider').bxSlider({
		});
</script>
</body>
</html>