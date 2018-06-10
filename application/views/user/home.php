	<!DOCTYPE html>
	<html lang="zxx" class="no-js" id="refreshTime">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Conference</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/bootstrap.css">		
			<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/animate.min.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/main.css">
		</head>
		<body>
			<!-- start banner Area -->
			<section class="banner-area relative" id="home" >	
				<div class="overlay overlay-bg"></div>
				<div class="container" >
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-9 col-md-12">
							<h6>Now you can watch</h6>
							<h1 class="text-white">
								Our Next Event			
							</h1>
							<div>
								<?php if(is_array($name)){?>
                  					<?php foreach ($name as $key) {?>
								<h2 class="text-white"><?php echo $key->name ; ?></h2>
								<?php }}else{?>
								<h2 class="text-white"> There's no upcoming events</h2>
								<?php }?>


							</div>
							<div class="countdown">
								<div id="timer" class="text-white">
    									
 					 			</div>
							</div>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
		<?php if(is_array($sche)){?>
		<?php foreach ($sche as $key) {?>
		<section class="spekers-area pb-100" id="speakers">			
		<br>
			<center><h1>Our Upcoming Events in This Month</h1></center>
		<br>
			
				<div class="container-fluid">
					<div class="row no-padding">
						<div class="active-speaker-carusel col-lg-12 no-padding">
							
							<div class="single-speaker item">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-md-6 speaker-img no-padding">
											<img src="<?php echo base_url();?>assets/assets/img/s2.jpg" alt="">
										</div>
										<div class="col-md-6 speaker-info no-padding">
											<h6 class="text-uppercase"><?php echo $key->name; ?></h6>
											<h1 class="text-white"><?php echo $key->category; ?></h1>
											<p>
												This event be held on: <br>
												Date:  <b><?php echo $key->date; ?></b><br>
												Start Time: <b><?php echo $key->startTime; ?></b><br>
												End Time: <b><?php echo $key->endTime; ?></b><br>
											</p>
											<p><span class="lnr lnr-phone-handset"></span>+880 (012) 8954 253</p>
											<p><span class="lnr lnr-location"></span>iamspeaker@gmail.com</p>
											<ul>
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-dribbble"></i></a>
												<a href="#"><i class="fa fa-behance"></i></a>
											</ul>
											<br>
											<a href="<?php echo site_url()?>/Event/delete/<?php echo $key->idSchedule; ?>" class="ticker-btn">Buy Ticket</a>
										</div>
									</div>
								</div>								
							</div>																						
						</div>
					</div>
				</div>
			</section>
			<?php }}else{?>	
					<section class="spekers-area pb-100" id="speakers">	
						<br>
							<center><h1>Our Upcoming Events in This Month</h1></center>
						<br>
							<center><h3>There's no upcoming events</h3></center>
							<?php }?>	
					</section>


			<!-- End spekers Area -->
			
			<!-- Start schedule Area -->
			<section class="schedule-area pb-100" id="schedule">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">How Our Customers Treat Us</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="table-wrap col-lg-12">
							<table class="schdule-table table table-bordered">
								  <thead class="thead-light">
								    <tr>
								      <th class="head" scope="col">sl</th>
								      <th class="head" scope="col">session</th>
								      <th class="head" scope="col">speaker</th>
								      <th class="head" scope="col">vanue</th>
								      <th class="head" scope="col">time</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th class="name" scope="row">01</th>
								      <td>Reception & Taling Seats</td>				      
								      <td>Isabelle Cooper</td>				      
								      <td>3rd Hall Room</td>				      
								      <td>02.00</td>					      
								    </tr>
								    <tr>
								      <th class="name" scope="row">02</th>
								      <td>Breakfast and rest</td>				      
								      <td>N/A</td>				      
								      <td>4th Hall Room</td>				      
								      <td>02.00</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">03</th>
								      <td>Reception & Taling Seats</td>				      
								      <td>Jane Daniel</td>				      
								      <td>2nd Hall Room</td>				      
								      <td>02.00</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">04</th>
								      <td>Next generation speech</td>				      
								      <td>Billy Barton</td>				      
								      <td>1st Hall Room</td>				      
								      <td>02.00</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">05</th>
								      <td>Sppech for young people</td>				      
								      <td>Flora Gonzales</td>				      
								      <td>4rd Hall Room</td>				      
								      <td>02.00</td>					      
								    </tr>
								    <tr>
								      <th class="name" scope="row">06</th>
								      <td>Lunch Break</td>				      
								      <td>N/A</td>				      
								      <td>3rd Hall Room</td>				      
								      <td>02.00</td>					      
								    </tr>
								    <tr>
								      <th class="name" scope="row">07</th>
								      <td>Sppech for Middle aged people</td>				 
								      <td>Francisco Barrett</td>				      
								      <td>1st Hall Room</td>				      
								      <td>02.00</td>					      
								    </tr>											    
								  </tbody>
							</table>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End schedule Area -->		

			<!-- Start price Area -->
			<section class="price-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">How Our Customers Treat Us</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">01</h1>
								<h4>Economy</h4>
								<p>For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">02</h1>
								<h4>Business</h4>
								<p>For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">03</h1>
								<h4>Premium</h4>
								<p>For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">04</h1>
								<h4>Exclusive</h4>
								<p>For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End price Area -->
						

			<script>

// Set the date we're counting down to
var countDownDate = '';
var a = '<?php echo $timer->date?>'+' <?php echo $timer->startTime?>';
if (a == ''){
    countDownDate = new Date().getTime();
}else{
    countDownDate = new Date(a).getTime();
}


// Update the count down every 1 second
var x = setInterval(function() {   
    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
      document.getElementById("timer").innerHTML ="<div class='will start-in'>will start in:</div>"+ days + "<span>days  </span>: " + hours + "<span>hour</span>: "
        + minutes + "<span>mins  </span>: " + seconds + "<span>secs  </span>";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
          document.getElementById("timer").innerHTML ="<div class='start-in'>will start in:</div>"+ "0" + "<span>days  </span>: " + "0" + "<span>hour</span>: "
        + "0" + "<span>mins  </span>: " + "0" + "<span>secs  </span>";
        location.reload();

        }     
}, 1000);
</script>
			<!-- End footer Area -->	

			<script src="<?php echo base_url();?>assets/assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="<?php echo base_url();?>assets/assets/js/vendor/bootstrap.min.js"></script>			
  			<script src="<?php echo base_url();?>assets/assets/js/easing.min.js"></script>			
			<script src="<?php echo base_url();?>assets/assets/js/superfish.min.js"></script>	
			<script src="<?php echo base_url();?>assets/assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo base_url();?>assets/assets/js/jquery.magnific-popup.min.js"></script>	
			<script src="<?php echo base_url();?>assets/assets/js/owl.carousel.min.js"></script>			
			<script src="<?php echo base_url();?>assets/assets/js/main.js"></script>	


		</body>
	</html>



