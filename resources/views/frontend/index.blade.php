@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
	<main class="site-main pagpe-spacing">
		<!-- Photo Slider -->
		<div class="photo-slider container-fluid no-padding">
			<!-- Main Carousel -->
			<div id="main-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<div role="listbox" class="carousel-inner">
					<div class="item active">
						<img width="1920" height="1030" alt="slider" src="frontend/images/slider-1.jpg">
						<div class="carousel-caption">
							<img data-animation="animated pulse" src="frontend/images/slider-ic.png" alt="slider-ic" width="121" height="124">
							<p data-animation="animated bounceInLeft">Cake for Later Cake </p>
							<p data-animation="animated bounceInRight">as a way of Life</p>
							<a title="Read More" href="#" data-animation="animated bounceInUp">Read More</a>
						</div>
					</div>

					<div class="item">
						<img width="1920" height="1030" alt="slider" src="frontend/images/slider-2.jpg">
						<div class="carousel-caption">
							<img data-animation="animated pulse" src="frontend/images/slider-ic.png" alt="slider-ic" width="121" height="124">
							<p data-animation="animated bounceInLeft">Cake for Later Cake </p>
							<p data-animation="animated bounceInRight">as a way of Life</p>
							<a title="Read More" href="#" data-animation="animated bounceInUp">Read More</a>
						</div>
					</div>

					<div class="item">
						<img width="1920" height="1030" alt="slider" src="frontend/images/slider-3.jpg">
						<div class="carousel-caption">
							<img data-animation="animated pulse" src="frontend/images/slider-ic.png" alt="slider-ic" width="121" height="124">
							<p data-animation="animated bounceInLeft">Cake for Later Cake </p>
							<p data-animation="animated bounceInRight">as a way of Life</p>
							<a title="Read More" href="#" data-animation="animated bounceInUp">Read More</a>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
					<i class="fa fa-caret-left" aria-hidden="true"></i>
				</a>
				<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
					<i class="fa fa-caret-right" aria-hidden="true"></i>
				</a>
			</div><!-- Main Carousel /-  -->

		</div><!-- Photo Slider /- -->

		<!-- Welcome Section -->
		<div class="welcome-section container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<img src="frontend/images/welcome.png" alt="welcome" width="457" height="700" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 wc-content-box">
						<div class="welcome-header">
							<span>30</span><h5>Years</h5> <h5>Of Excellence</h5>
						</div>
						<div class="welcome-content">
							<div class="section-header left-header">
								<h3>About Us</h3>
								<h5>Our story</h5>
								<img src="frontend/images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
								<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day Got a dream and we just know now we are gonna make our dream come true so get a witch is shawl on a broomstick you can crawl on were gonna pay.</p>
								<a href="#" title="Read More" class="read-more">Read More</a>
							</div><!-- Section Header /-  -->
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Welcome Section /- -->

		<!-- Festival Section -->
		<div class="festival-section container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="container">
				<div class="festival-details-tab">
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="partycakes">
							<div class="festival-content">
								<h5>Cake Festival</h5>
								<img src="frontend/images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3" />
								<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day got a dream true.</p>
								<a href="#" title="Read More" class="read-more">Read More</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="softcakes">
							<div class="festival-content">
								<h5>softcakes</h5>
								<img src="frontend/images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3" />
								<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day got a dream true.</p>
								<a href="#" title="Read More" class="read-more">Read More</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="cupcakes">
							<div class="festival-content">
								<h5>cupcakes</h5>
								<img src="frontend/images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3" />
								<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day got a dream true.</p>
								<a href="#" title="Read More" class="read-more">Read More</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="berrycakes">
							<div class="festival-content">
								<h5>berrycakes</h5>
								<img src="frontend/images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3" />
								<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day got a dream true.</p>
								<a href="#" title="Read More" class="read-more">Read More</a>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="nutcake">
							<div class="festival-content">
								<h5>nutcake</h5>
								<img src="frontend/images/section-seprator-1.png" alt="section-seprator-1" width="70" height="3" />
								<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day got a dream true.</p>
								<a href="#" title="Read More" class="read-more">Read More</a>
							</div>
						</div>
					</div>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#partycakes" aria-controls="partycakes " role="tab" data-toggle="tab"><i><img src="frontend/images/festival-ic-1.png" alt="festival-ic-1" width="37" height="42" /></i>partycakes</a></li>
						<li role="presentation"><a href="#softcakes" aria-controls="softcakes" role="tab" data-toggle="tab"><i><img src="frontend/images/festival-ic-2.png" alt="festival-ic-2" width="37" height="42" /></i>softcakes</a></li>
						<li role="presentation"><a href="#cupcakes" aria-controls="cupcakes" role="tab" data-toggle="tab"><i><img src="frontend/images/festival-ic-3.png" alt="festival-ic-3" width="37" height="42" /></i>cupcakes</a></li>
						<li role="presentation"><a href="#berrycakes" aria-controls="berrycakes" role="tab" data-toggle="tab"><i><img src="frontend/images/festival-ic-4.png" alt="festival-ic-4" width="37" height="42" /></i>berrycakes</a></li>
						<li role="presentation"><a href="#nutcake" aria-controls="nutcake" role="tab" data-toggle="tab"><i><img src="frontend/images/festival-ic-5.png" alt="festival-ic-5" width="37" height="42" /></i>nutcake</a></li>
					</ul>
				</div>
			</div><!-- Container /- -->
		</div><!-- Festival Section /- -->

		<!-- Menu Section -->
<div id="menu-section" class="menu-section container-fluid no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>Our Menu</h3>
            <h5>CREAMY DISHES</h5>
            <img src="{{ asset('frontend/images/section-separator.png') }}" alt="section-separator" width="169" height="15">
            <p>The day for a three-hour tour a three-hour tour then one day he was shooting at some food and up through the ground came an oil that is it's a beautiful day.</p>
        </div><!-- Section Header /-  -->
    </div><!-- Container /- -->

    <div class="row">
        @foreach ($menus as $menu)
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="menu-box">
                    <img src="{{ asset($menu->image) }}" alt="menu" />
                    <h3>{{ $menu->name }} <span>${{ $menu->price }}</span></h3>
                    <p>{{ $menu->description }}</p>
                    <a href="#" title="Order Now">Order Now</a>
                </div>
            </div>
        @endforeach
    </div>
</div><!-- Menu Section /- -->
		<div class="section-padding"></div>

		<!-- Team Section -->
		<div class="team-section container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="container">
				<div class="row">
					<!-- Main Carousel -->
					<div id="main-carousel1" class="carousel slide carousel-fade" data-ride="carousel">
						<div role="listbox" class="carousel-inner">
							<div class="item active">
								<div class="team-content">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<img src="frontend/images/team.png" alt="team" width="468" height="595" />
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="section-header left-header">
											<h3>Meet Our Team</h3>
											<h5>CHEFS</h5>
											<img src="frontend/images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
											<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day Got a dream and we just know now we are gonna make our dream come true so get a witch is shawl on a broomstick you can crawl on were gonna pay.</p>
										</div><!-- Section Header /-  -->
										<div class="team-contact-info">
											<h5>Stefhen Richards</h5>
											<ul>
												<li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#" title="Google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
												<li><a href="#" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
											<p><a href="mailto:info@domain.com" title="info@domain.com"><i class="fa fa-envelope" aria-hidden="true"></i>info@domain.com</a></p>
											<p><a href="tel:0321-23-456-7890" title="0321-23-456-7890"><i class="fa fa-phone" aria-hidden="true"></i>Phone: 0321-23-456-7890</a></p>
										</div>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="team-content">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<img src="frontend/images/team.png" alt="team" width="468" height="595" />
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="section-header left-header">
											<h3>Meet Our Team</h3>
											<h5>CHEFS</h5>
											<img src="frontend/images/section-seprator-1.png" alt="section-seprator" width="70" height="3">
											<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day Got a dream and we just know now we are gonna make our dream come true so get a witch is shawl on a broomstick you can crawl on were gonna pay.</p>
										</div><!-- Section Header /-  -->
										<div class="team-contact-info">
											<h5>Stefhen Richards</h5>
											<ul>
												<li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#" title="Google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
												<li><a href="#" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
											<p><a href="mailto:info@domain.com" title="info@domain.com"><i class="fa fa-envelope" aria-hidden="true"></i>info@domain.com</a></p>
											<p><a href="tel: 0321-23-456-7890" title="0321-23-456-7890"><i class="fa fa-phone" aria-hidden="true"></i>Phone: 0321-23-456-7890</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="left carousel-control" href="#main-carousel1" role="button" data-slide="prev">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</a>
						<a class="right carousel-control" href="#main-carousel1" role="button" data-slide="next">
							<i class="fa fa-caret-left" aria-hidden="true"></i>
						</a>
					</div><!-- Main Carousel /-  -->
				</div>
			</div><!-- Container /- -->
		</div><!-- Team Section /- -->

		<!-- Order Section -->
		<div class="order-section container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-7 col-xs-7">
						<div class="section-header">
							<h3>Choose your Flavour</h3>
							<h5>Order Online</h5>
							<img src="frontend/images/section-seprator.png" alt="section-seprator" width="169" height="15">
							<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
						</div><!-- Section Header /-  -->
						<form class="online-form">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" class="form-control" placeholder="Name *" required />
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" class="form-control" placeholder="Phone Number *" required />
							</div>
							<div class="form-group col-md-6 col-sm-6 col-xs-6">
								<select>
									<option>FLAVOURS</option>
									<option>FLAVOURS</option>
									<option>FLAVOURS</option>
									<option>FLAVOURS</option>
								</select>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<input type="text" class="form-control" placeholder="Your Address *" required />
							</div>
							<a href="#" title="Order Now" class="order-now">Order Now</a>
							<p>FOR MORE QUERIES CALL US AT :<a href="tel:: 0321-23-456-7890" title="0321-23-456-7890"> </a></p>
						</form>
					</div>
				</div>
			</div><!-- Container /- -->

			<div class="right-image">
				<img src="frontend/images/order-online.png" alt="order-online" width="600" height="830" />
			</div>
			<div class="section-padding"></div>
		</div><!-- Order Section /- -->

		<!-- Counter Section -->
		<div class="counter-section container-fluid no-padding">
			<div class="container">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="counter-box">
						<h3><span class="count" id="statistics_count-1" data-statistics_percent="1500"> &nbsp;</span></h3>
						<i class="fa fa-smile-o" aria-hidden="true"></i>
						<p>HAPPY CLIENTS</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="counter-box">
						<h3><span class="count" id="statistics_count-2" data-statistics_percent="550">&nbsp;</span></h3>
						<i class="fa fa-coffee" aria-hidden="true"></i>
						<p>COFFEE CUPS</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="counter-box">
						<h3><span class="count" id="statistics_count-3" data-statistics_percent="750">&nbsp;</span></h3>
						<i class="fa fa-hourglass-o" aria-hidden="true"></i>
						<p>WORKED HOURS</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="counter-box">
						<h3><span class="count" id="statistics_count-4" data-statistics_percent="110">&nbsp;</span></h3>
						<i class="fa fa-home" aria-hidden="true"></i>
						<p>BRANCHES</p>
					</div>
				</div>
			</div>
		</div><!-- Counter Section /- -->

		<!-- Latest Blog -->
		<div class="latest-blog container-fluid no-padding">
			<div class="section-padding"></div>
			<!-- Container -->
			<div class="container">
				<div class="row">
					<!-- Section Header -->
					<div class="section-header">
						<h3>Latest Post</h3>
						<h5>Our Blog</h5>
						<img width="169" height="15" alt="section-seprator" src="frontend/images/section-seprator.png">
						<p>The day for a three hour tour a three hour tour then one day he was shooting at some food and up through the ground came a oil that is its a beautiful day.</p>
					</div><!-- Section Header /- -->
					<article class="type-post">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="entry-cover">
								<a href="blog-post.html" title="Recent Blog">
									<img src="frontend/images/latestblog-1.jpg" alt="blog" width="370" height="220">
								</a>
							</div>
							<div class="post-content">
								<div class="latest-blog-content">
									<div class="post-date"><span>25</span><span>Jan</span></div>
									<h3 class="entry-title"><a href="blog-post.html" title="CREAMY WAVES SHIFT"> creamy waves shift</a></h3>
									<div class="entry-meta">
										<a title="Likes" href="#"><i class="fa fa-heart-o"></i>10 Likes</a>
										<a title="Comments" href="#"><i class="fa fa-commenting-o"></i>15 Comments</a>
										<a title="Admin" href="#">Admin</a>
									</div>
								</div>
								<div class="recent-content">
									<div class="entry-content">
										<p>The day he was shooting at some food and up through the ground came a oil that is its a beautiful day came a oil.</p>
									</div>
									<a href="{{url('blog')}}" title="Read More" class="read-more">Read More</a>
								</div>
							</div>
						</div>
					</article>

					<article class="type-post">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="entry-cover">
								<a href="blog-post.html" title="Recent Blog">
									<img src="frontend/images/latestblog-2.jpg" alt="blog" width="370" height="220">
								</a>
							</div>
							<div class="post-content">
								<div class="latest-blog-content">
									<div class="post-date"><span>07</span><span>Feb</span></div>
									<h3 class="entry-title"><a href="blog-post.html" title="THE MUPPET SHOW">the muppet show</a></h3>
									<div class="entry-meta">
										<a title="Likes" href="#"><i class="fa fa-heart-o"></i>10 Likes</a>
										<a title="Comments" href="#"><i class="fa fa-commenting-o"></i>15 Comments</a>
										<a title="Admin" href="#">Admin</a>
									</div>
								</div>
								<div class="recent-content">
									<div class="entry-content">
										<p>The day he was shooting at some food and up through the ground came a oil that is its a beautiful day came a oil.</p>
									</div>
									<a href="{{url('blog')}}" title="Read More" class="read-more">Read More</a>
								</div>
							</div>
						</div>
					</article>

					<article class="type-post">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="entry-cover">
								<a href="blog-post.html" title="Recent Blog">
									<img src="frontend/images/latestblog-3.jpg" alt="blog" width="370" height="220">
								</a>
							</div>
							<div class="post-content">
								<div class="latest-blog-content">
									<div class="post-date"><span>14</span><span>Apr</span></div>
									<h3 class="entry-title"><a href="blog-post.html" title="deserve the cupcake">deserve the cupcake</a></h3>
									<div class="entry-meta">
										<a title="Likes" href="#"><i class="fa fa-heart-o"></i>10 Likes</a>
										<a title="Comments" href="#"><i class="fa fa-commenting-o"></i>15 Comments</a>
										<a title="Admin" href="#">Admin</a>
									</div>
								</div>
								<div class="recent-content">
									<div class="entry-content">
										<p>The day he was shooting at some food and up through the ground came a oil that is its a beautiful day came a oil.</p>
									</div>
									<a href="blog-post.html" title="Read More" class="read-more">Read More</a>
								</div>
							</div>
						</div>
					</article>
					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<a href="blog.html" title="View all post" class="all-post">View all post</a>
					</div>
				</div>
			</div>
			<div class="section-padding"></div>
		</div>


		<!-- Newsletter Box -->
		<div class="subscribe-section container-fluid" id="subscribe-section">
			<!-- Container -->
			<div class="container">
				<h4 class="subscribe-title col-md-5 col-sm-4 col-xs-12">subscribe to our newsletter</h4>
				<form class="col-md-7 col-sm-8 col-xs-12">
					<div class="col-md-9 col-sm-8 col-xs-8"><input type="text" placeholder="Your Email Here" name="email"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
					<div class="col-md-3 col-sm-4 col-xs-4 no-left-padding"><input type="submit" value="subscribe" class="btn-default" name="subscribe"></div>
				</form>
			</div><!-- Container /- -->
		</div><!-- Newsletter Box /- -->
	</main>



	<!-- Bottom Footer -->
	@endsection
