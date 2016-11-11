<?php require 'include/header.php'; ?>

		<div class="flexslider welcome">
			<div class="slides">
				<div class="slide" style="background-image: url('images/background01.jpg');">
					<div class="inner">
						<div class="container">
							<div class="banner-wrapper">
								<div class="banner big">
									<div class="before">$480000</div>
									Top Cars: Mercedes S Class
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem eriam, eaque ipsa quae ab illo inventore veritatis..</p>
								</div> <!-- end .banner -->
							</div> <!-- end .banner-wrapper -->
							<a href="details.html" class="button solid white xsmall">Know More</a>
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
				<div class="slide" style="background-image: url('images/background01.jpg');">
					<div class="inner">
						<div class="container">
							<div class="banner-wrapper">
								<div class="banner">
									<div class="before">$480000</div>
									Top Cars: Mercedes S Class
								</div> <!-- end .banner -->
							</div> <!-- end .banner-wrapper -->
							<a href="details.html" class="button border white xsmall">Know More</a>
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
				<div class="slide" style="background-image: url('images/background02.jpg');">
					<div class="inner">
						<div class="container">
							<div class="banner-wrapper">
								<div class="banner big light">
									Top Cars: Mercedes S Class
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem eriam, eaque ipsa quae ab illo inventore veritatis..</p>
								</div> <!-- end .banner -->
							</div> <!-- end .banner-wrapper -->
							<a href="details.html" class="button solid blue xsmall">Know More</a>
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
			</div> <!-- end .slides -->
		</div> <!-- end .welcome -->

		<section class="section dark tiny">
			<div class="inner">
				<div class="container">
					<div class="tabpanel border section-tab" role="tabpanel">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#search-cars" aria-controls="search-cars" role="tab" data-toggle="tab">Search Cars</a></li>
							<!-- <li role="presentation"><a href="#sell-car" aria-controls="sell-car" role="tab" data-toggle="tab">Sell Car</a></li> -->
						</ul> <!-- end .nav-tabs -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="search-cars">
								<form action="" method="post" class="banner-form">
									<div class="item">
										<div class="select-wrapper">
											<select class="selectpicker">
												<option>Select Brand</option>
												<option>Brand 1</option>
												<option>Brand 2</option>
											</select>
											
										</div> <!-- end .select-wrapper -->
									</div> <!-- end .item -->
									<div class="item">
										<div class="select-wrapper">
											<select class="selectpicker">
												<option>Select Model</option>
												<option>Model 1</option>
												<option>Model 2</option>
											</select>
											
										</div> <!-- end .select-wrapper -->
									</div> <!-- end .item -->
									<div class="item">
										<div class="select-wrapper">
											<select class="selectpicker">
												<option>Year of Model</option>
												<option>Year 1</option>
												<option>Year 2</option>
											</select>
											
										</div> <!-- end .select-wrapper -->
									</div> <!-- end .item -->
									<div class="item">
										<span class="price-slider-value">Price (Lt) <span id="price-min"></span> - <span id="price-max"></span></span>
										<div id="price-slider"></div>
									</div> <!-- end .item -->
									<div class="item">
										<button type="submit" class="button solid light-blue">Search</button>
									</div> <!-- end .item -->
								</form> <!-- end .banner-form -->
							</div> <!-- end .tab-panel -->
						</div> <!-- end .tab-content -->
					</div> <!-- end .tabpanel -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<section class="section white text-center">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h1 class="main-heading">Welcome to Car Dealership WP Theme</h1>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem eriam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						</div> <!-- end .col-sm-8 -->
					</div> <!-- end .row -->
					<div class="row">
						<div class="col-sm-4">
							<div class="link-box blue" style="background-image: url('images/link-bg01.jpg');">
								<a href="listing-list-view.html"><div class="overlay">
									<span>Cars For</span>
									<h2>Selling</h2>
								</div></a>
							</div> <!-- end .link-box -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="link-box green" style="background-image: url('images/link-bg02.jpg');">
								<a href="listing-list-view.html"><div class="overlay">
									<span>Cars To</span>
									<h2>Buy</h2>
								</div></a>
							</div> <!-- end .link-box -->
						</div> <!-- end .col-sm-4 -->
						<div class="col-sm-4">
							<div class="link-box yellow" style="background-image: url('images/link-bg03.jpg');">
								<a href="listing-list-view.html"><div class="overlay">
									<span>Cars For</span>
									<h2>Rent</h2>
								</div></a>
							</div> <!-- end .link-box -->
						</div> <!-- end .col-sm-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->

		<section class="section light no-padding-bottom">
			<div class="inner">
				<div class="container">
					<h1 class="main-heading">Featured Car Deals<small>Best Car Deals</small></h1>
					<div id="featured-cars-three" class="owl-carousel featured-cars three-cols">
						<div class="item">
							<div class="featured-car">
								<div class="image">
									<a href=""><img src="images/featured-car01.jpg" alt="car" class="img-responsive"></a>
									<span class="sale-tag">For Sale</span>
								</div> <!-- end .image -->
								<div class="content">
									<div class="clearfix">
										<h5><a href="">Range Rover</a></h5>
										<span class="price">$80,000</span>
									</div> <!-- end .clearfix -->
									<div class="line"></div>
									<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
								</div> <!-- end .content -->
								<div class="details clearfix">
									<div class="seats">something</div>
									<div class="fuel">ssss</div>
									<div class="type">Sport</div>
								</div> <!-- end .details -->
							</div> <!-- end .featured-car -->
						</div> <!-- end .item -->
						<div class="item">
							<div class="featured-car">
								<div class="image">
									<a href=""><img src="images/featured-car02.jpg" alt="car" class="img-responsive"></a>
									<span class="sale-tag">For Sale</span>
								</div> <!-- end .image -->
								<div class="content">
									<div class="clearfix">
										<h5><a href="">Porsche</a></h5>
										<span class="price">$80,000</span>
									</div> <!-- end .clearfix -->
									<div class="line"></div>
									<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
								</div> <!-- end .content -->
								<div class="details clearfix">
									<div class="seats">something</div>
									<div class="fuel">ssss</div>
									<div class="type">Sport</div>
								</div> <!-- end .details -->
							</div> <!-- end .featured-car -->
						</div> <!-- end .item -->
						<div class="item">
							<div class="featured-car">
								<div class="image">
									<a href=""><img src="images/featured-car03.jpg" alt="car" class="img-responsive"></a>
									<span class="sale-tag green">For Rent</span>
								</div> <!-- end .image -->
								<div class="content">
									<div class="clearfix">
										<h5><a href="">Mercediz Benz</a></h5>
										<span class="price">$10 / km</span>
									</div> <!-- end .clearfix -->
									<div class="line"></div>
									<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
								</div> <!-- end .content -->
								<div class="details clearfix">
									<div class="seats">something</div>
									<div class="fuel">ssss</div>
									<div class="type">Sport</div>
								</div> <!-- end .details -->
							</div> <!-- end .featured-car -->
						</div> <!-- end .item -->
						<div class="item">
							<div class="featured-car">
								<div class="image">
									<a href=""><img src="images/featured-car01.jpg" alt="car" class="img-responsive"></a>
									<span class="sale-tag">For Sale</span>
								</div> <!-- end .image -->
								<div class="content">
									<div class="clearfix">
										<h5><a href="">Range Rover</a></h5>
										<span class="price">$80,000</span>
									</div> <!-- end .clearfix -->
									<div class="line"></div>
									<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
								</div> <!-- end .content -->
								<div class="details clearfix">
									<div class="seats">something</div>
									<div class="fuel">ssss</div>
									<div class="type">Sport</div>
								</div> <!-- end .details -->
							</div> <!-- end .featured-car -->
						</div> <!-- end .item -->
						<div class="item">
							<div class="featured-car">
								<div class="image">
									<a href=""><img src="images/featured-car02.jpg" alt="car" class="img-responsive"></a>
									<span class="sale-tag">For Sale</span>
								</div> <!-- end .image -->
								<div class="content">
									<div class="clearfix">
										<h5><a href="">Porsche</a></h5>
										<span class="price">$80,000</span>
									</div> <!-- end .clearfix -->
									<div class="line"></div>
									<p>Nam liber tempor cum soluta nobis eleife option congue nihil...</p>
								</div> <!-- end .content -->
								<div class="details clearfix">
									<div class="seats">something</div>
									<div class="fuel">ssss</div>
									<div class="type">Sport</div>
								</div> <!-- end .details -->
							</div> <!-- end .featured-car -->
						</div> <!-- end .item -->
					</div> <!-- end .featured-cars -->
					<div class="call-to-action section-overlap clearfix">
						<div class="image" style="background-image: url('images/cta.jpg');"></div>
						<div class="content">
							<h2>Sell your Car</h2>
							<p>Submit detail and sell it Nam liber tempor cum soluta nobis eleife  option congue nihil...</p>
						</div>
						<div class="cta-button">
							<a href="add-car-details.html" class="button border white">Submit Car</a>
						</div>
					</div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->


<?php require 'include/footer.php'; ?>