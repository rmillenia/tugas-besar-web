<header id="header" id="home" >
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="<?php echo base_url();?>assets/img/logo.png" alt="" title="" width="200"/></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="#speakers">Latest Event</a></li>
				          <li><a href="#schedule">All Event</a></li>
				          <li class="menu-has-children"><a href="">Account</a>
				            <ul>
				              <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">Login</a></li>
				              <li><a href="elements.html">Register</a></li>
				            </ul>
				          </li>
				          <li><a class="ticker-btn" href="#"><span class="fa fa-lg fa-shopping-cart"></span></a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>
			  <!-- #header -->
			  <!-- modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Login</h2>
        </div>
        <form action="#" method="post">
          <input name="username" type="text" class="form-control" id="username" placeholder="Username">
          <input name="password" type="password" class="form-control" id="password" placeholder="Password">
          <input name="submit" type="submit" class="form-control" id="submit" value="Submit">
        </form>
         <font color="white"><h4>Don't have any account?</h4>
          <a href="#" data-toggle="modal" data-target="#modal2" class="smoothScroll wow fadeInUp" data-wow-delay="1.0s" style="text-decoration: none">Register</a>
      </div>
  </div>
</div>


<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Register</h2>
        </div>
        <form action="#" method="post">
           <div class="row">
            <div class="col-lg-6">
          <input name="name" type="text" class="form-control" id="name" placeholder="Full Name">
          <input name="address" id="address" class="form-control" placeholder="Address">
          <input name="hp" type="text" class="form-control" id="hp" placeholder="Phone Number">
        </div>
        <div class="col-lg-6">
          <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail">
          <input name="username" type="text" class="form-control" id="username" placeholder="Username">
          <input name="password" type="password" class="form-control" id="password" placeholder="Password">
        </div>
      </div>
       <input name="submit" type="submit" class="form-control btn-lg" id="submit" value="Submit">
        </form>
      </div>
  </div>
</div>
