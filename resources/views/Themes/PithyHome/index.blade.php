@include('Themes.PithyHome.Common.header');
<body>
	<div class="page-loader">
		<div class="loader-in">Loading...</div>
		<div class="loader-out">Loading...</div>
	</div>

	<aside class="navmenu">
		<div class="post-titles">
			<div class="tag-title">
				<div class="container">
					<p class="tags" id="post-titles">
						<a data-filter=".pt-fashion" href="#">fashion</a>
						<a data-filter=".pt-culture" href="#">culture</a>
						<a data-filter=".pt-art" href="#">art</a>
						<a data-filter="*" href="#" class="unfilter hide">all</a>
					</p>
				</div>
			</div>
			<button type="button" class="remove-navbar"><i class="fa fa-times"></i></button>
			<ul class="post-title-list clearfix">
				<li class="pt-fashion pt-culture">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Five simple steps to designing grid systems preface</a>
						</h5>
						<div class="post-subinfo">
							<span>June 28</span>   •   
							<span>2 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-culture pt-art">
					<div>
						<h5>
							<i>26</i>
							<a href="#">Hemingway: A Text Editor That Cares About What You Write</a>
						</h5>
						<div class="post-subinfo">
							<span>June 26</span>   •   
							<span>2 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-art">
					<div>
						<h5>
							<i class="fa fa-link"></i>
							<a href="#">Mobile Design Inspiration and Creativity</a>
						</h5>
						<div class="post-subinfo">
							<span>June 25</span>   •   
							<span>4 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-culture">
					<div>
						<h5>
							<i class="fa fa-comment"></i>
							<a href="#">Envato Stories: Coming August 2014</a>
						</h5>
						<div class="post-subinfo">
							<span>June 24</span>   •   
							<span>3 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-culture pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Meet #59 Interface Designer Kerem Suer</a>
						</h5>
						<div class="post-subinfo">
							<span>June 24</span>   •   
							<span>6 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Founders, Travel and Epic Beards: What Happens After Envato</a>
						</h5>
						<div class="post-subinfo">
							<span>June 22</span>   •   
							<span>12 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-culture">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Why Designers Make Good Founders (and Cofounders)</a>
						</h5>
						<div class="post-subinfo">
							<span>June 21</span>   •   
							<span>9 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-culture pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Getting Your Team Through the Storm A Good Product Designer...</a>
						</h5>
						<div class="post-subinfo">
							<span>June 20</span>   •   
							<span>16 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Introducing LaRead Chat Post</a>
						</h5>
						<div class="post-subinfo">
							<span>June 18</span>   •   
							<span>24 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-culture">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">The Future of WordPress</a>
						</h5>
						<div class="post-subinfo">
							<span>June 16</span>   •   
							<span>13 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-culture pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Workshop: Brand Asset Management</a>
						</h5>
						<div class="post-subinfo">
							<span>June 16</span>   •   
							<span>8 Comments</span>
						</div>
					</div>
				</li>
				<li class="pt-fashion pt-art">
					<div>
						<h5>
							<i class="fa fa-file-text-o"></i>
							<a href="#">Long Live The Kings - Short Film</a>
						</h5>
						<div class="post-subinfo">
							<span>June 12</span>   •   
							<span>26 Comments</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>

	<div class="canvas">
		<div class="canvas-overlay"></div>
		<header>
			<nav class="navbar navbar-fixed-top nav-down navbar-laread">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="medium-image-v1-2.html"><img height="64" src="assets/img/logo-light.png" alt=""></a>
					</div>
					<div class="get-post-titles">
						<button type="button" class="navbar-toggle push-navbar" data-navbar-type="default">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<a href="#" data-toggle="modal" data-target="#login-form" class="modal-form">
						<i class="fa fa-user"></i>
					</a>
					<button type="button" class="navbar-toggle collapsed menu-collapse" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-plus"></i>
					</button>
					<div class="collapse navbar-collapse" id="main-nav">
						<ul class="nav navbar-nav">
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">HOME</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="large-image-v1-1.html">Large Image v1</a></li>
									<li><a href="large-image-v2-1.html">Large Image v2</a></li>
									<li><a href="medium-image-v1-1.html">Medium Image v1</a></li>
									<li><a href="medium-image-v2-1.html">Medium Image v2</a></li>
									<li><a href="masonry-1.html">Masonry</a></li>
									<li><a href="banner-v1.html">BannerMode v1</a></li>
									<li><a href="banner-v2.html">-v2</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">GALLERY</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="gallery-v1.html">Gallery v1</a></li>
									<li><a href="gallery-v2.html">Gallery v2</a></li>
									<li><a href="gallery-v3.html">Gallery v3</a></li>
									<li><a href="gallery-v4.html">Gallery v4</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PAGES</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="about-v1.html">About v1</a></li>
									<li><a href="about-v2.html">-v2</a></li>
									<li><a href="authors.html">Authors</a></li>
									<li><a href="author-detail.html">Author Detail</a></li>
									<li><a href="archive.html">Archive</a></li>
									<li><a href="contact-v1.html">Contact v1</a></li>
									<li><a href="contact-v2.html">-v2</a></li>
									<li><a href="404.html">Not Found</a></li>
									<li><a href="newsletter.html" target="_blank">Newsletter</a></li>
								</ul>
							</li>
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">FEATURES</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="widget.html">Widgets</a></li>
									<li><a href="typography-1.html">Typography -1</a></li>
									<li><a href="typography-2.html">-2</a></li>
									<li><a href="typography-3.html">-3</a></li>
									<li><a href="typography-4.html">-4</a></li>
									<li><a href="shortcode-1.html">Shortcode -1</a></li>
									<li><a href="shortcode-2.html">-2</a></li>
									<li><a href="shortcode-3.html">-3</a></li>
									<li><a href="shortcode-4.html">-4</a></li>

								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		</header>

		<div class="container">
			<div class="head-text">
				<h1>LaRead</h1>
				<p class="lead-text">Blog. Designed for Read.</p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<div class="post-fluid post-medium-vertical">

						<div class="container-fluid post-default">
							<div class="container-medium">
								<div class="row post-items">
									<div class="post-item-banner">
										<img src="assets/img/img-16.png" alt="" />
									</div>
									<div class="col-md-12">
										<div class="post-item">
											<div class="post-item-paragraph">
												<div>
													<a href="#" class="quick-read qr-only-phone"><i class="fa fa-eye"></i></a>
													<a href="#" class="mute-text">DESIGN</a>
												</div>
												<h3><a href="#">Meet #59 Interface Designer John Doe</a></h3>
												<p>Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Nulla id sem a mauris egestas pulvinar vitae non dui. Cras odio tortor, feugiat nec sagittis sed, laoreet ut mauris. In hac habitasse platea dictumst. Mauris non libero ligula, sed volutpat mauris. <a href="#" class="more">[...]</a></p>
											</div>
											<div class="post-item-info clearfix">
												<div class="pull-left">
													<span>28 June</span>   •   By <a href="#">Daniele Zedda</a>
												</div>
												<div class="pull-right post-item-social">
													<a href="#" class="quick-read qr-not-phone"><i class="fa fa-eye"></i></a>
													<a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
													<a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="container-fluid post-single">
							<div class="container-medium">
								<div class="row post-items">
									<div class="col-md-12">
										<div class="post-item">
											<div class="post-item-paragraph">
												<div>
													<a href="#" class="quick-read qr-only-phone"><i class="fa fa-eye"></i></a>
													<a href="#" class="mute-text">26 June 2015</a>
												</div>
												<h3><a href="#">Workshop: Brand Asset Management</a></h3>
												<p class="five-lines">Consectetur adipiscing elit. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Aenean imperdiet urna a lectus imperdiet consequat. Fusce eu nibh metus. Curabitur nec dignissim diam. Nulla eget massa at urna sagittis malesuada eget a erat. Sed vel magna leo, in pretium nunc. Ut ornare turpis vel ipsum vulputate lacinia. Pellentesque blandit sagittis tempor. Curabitur adipiscing est vitae quam bibendum at euismod ligula dignissim. Duis nec volutpat leo. Nam mollis massa ut nibh blandit ac faucibus metus tincidunt. Cras sagittis facilisis dui, id posuere tortor aliquam in. Aenean rhoncus purus a tortor posuere at interdum mi venenatis. Integer at urna quis nulla egestas dapibus. <a href="#">[...]</a></p>
											</div>
											<div class="post-item-info clearfix">
												<div class="pull-left">
													By <a href="#">Jason Bourne</a>   •   <a href="#">#travel</a>
												</div>
												<div class="pull-right post-item-social">
													<a href="#" class="quick-read qr-not-phone"><i class="fa fa-eye"></i></a>
													<a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
													<a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="container-fluid post-banner">
							<div class="container-medium">
								<div class="row post-items">
									<div class="post-item-banner lg-banner">
										<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-example-generic" data-slide-to="1"></li>
												<li data-target="#carousel-example-generic" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner">
												<div class="item active">
													<img src="assets/img/img-16.png" alt="" />
												</div>
												<div class="item">
													<img src="assets/img/img-16.png" alt="" />
												</div>
												<div class="item">
													<img src="assets/img/img-16.png" alt="" />
												</div>
											</div>
											<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
											<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
										</div>
									</div>
									<div class="col-md-12">
										<div class="post-item">
											<div class="post-item-paragraph">
												<div>
													<a href="#" class="quick-read qr-only-phone"><i class="fa fa-eye"></i></a>
													<a href="#" class="mute-text">FUN</a>
												</div>
												<h3><a href="#">Harbiye Open Air Concerts</a></h3>
												<p class="ellipsis-fade-five">Vodafone Smart 6 Harbiye Open Air Concerts will be at Harbiye Cemil Topuzlu Open Air Stage. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, lorem eget fringilla libero sagittis animous ledra sitemah eget. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. <a href="#" class="more"></a></p>
											</div>
											<div class="post-item-info clearfix">
												<div class="pull-left">
													<span>25 June</span>   •   By <a href="#">Gannon Burget</a>   •   <a href="#">#concert</a>
												</div>
												<div class="pull-right post-item-social">
													<a href="#" class="quick-read qr-not-phone"><i class="fa fa-eye"></i></a>
													<a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
													<a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="container-fluid post-video">
							<div class="container-medium">
								<div class="row post-items">
									<div class="post-item-banner embed-responsive embed-responsive-16by9">
										<!-- <iframe src="https://player.vimeo.com/video/49445992" class="embed-responsive-item" allowfullscreen></iframe> -->
									</div>
									<div class="col-md-12">
										<div class="post-item">
											<div class="post-item-paragraph">
												<div>
													<a href="#" class="quick-read qr-only-phone"><i class="fa fa-eye"></i></a>
													<a href="#" class="mute-text">Vimeo</a>
												</div>
												<h3><a href="#">Long Live The Kings - Short Film</a></h3>
												<p>Sed vel magna leo, in pretium nunc. Ut ornare turpis vel ipsum vulputate lacinia. Pellentesque blandit sagittis tempor. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. <a href="#" class="more">[...]</a></p>
											</div>
											<div class="post-item-info clearfix">
												<div class="pull-left">
													<span>24 June</span>   •   <a href="#">#video</a>
												</div>
												<div class="pull-right post-item-social">
													<a href="#" class="quick-read qr-not-phone"><i class="fa fa-eye"></i></a>
													<a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
													<a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="container-fluid post-sound">
							<div class="container-medium">
								<div class="row post-items">
									<div class="post-item-banner embed-responsive embed-responsive-16by9">
										<iframe  class="embed-responsive-item" ></iframe>
									</div>
									<div class="col-md-12">
										<div class="post-item">
											<div class="post-item-paragraph">
												<div>
													<a href="#" class="quick-read qr-only-phone"><i class="fa fa-eye"></i></a>
													<a href="#" class="mute-text">Soundcloud</a>
												</div>
												<h3><a href="#">Show Me Love (Out Now)</a></h3>
												<p class="five-lines">Consectetur adipiscing elit. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare.  Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. </p>
											</div>
											<div class="post-item-info clearfix">
												<div class="pull-left">
													<span>24 June</span>   •   <a href="#">#music</a>
												</div>
												<div class="pull-right post-item-social">
													<a href="#" class="quick-read qr-not-phone"><i class="fa fa-eye"></i></a>
													<a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
													<a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="container-fluid post-quote">
							<div class="container-medium">
								<div class="row post-items">
									<div class="col-md-12">
										<div class="post-item">
											<div class="in-quote">
												<img src="assets/img/img-17.png" alt="">
												<div class="block-overlay">
													<div class="overlay-quote">
														<span class="quote-icon">“</span>
														<a href="#" class="spot">The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack of will.</a>
														<span class="name">- Vince Lombardi</span>
													</div>
												</div>
											</div>
											<div class="post-item-info clearfix">
												<div class="pull-left">
													<span>22 June</span>   •   <a href="#">#vision</a>
												</div>
												<div class="pull-right post-item-social">
													<a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
													<a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="container-fluid post-link">
							<div class="container-medium">
								<div class="row post-items">
									<div class="col-md-12">
										<div class="post-item">
											<div class="in-link">
												<img src="assets/img/img-18.png" alt="" />
												<div class="block-overlay">
													<div class="overlay-link">
														<i class="fa fa-link fa-rotate-90"></i>
														<a href="#">http://themeforest.net/category/wordpress</a>
														<span class="link-text">Inside - Personal or Corparete<br />Flexible and Multipurpose WP Theme</span>
													</div>
												</div>
											</div>
											<div class="post-item-info clearfix">
												<div class="pull-left">
													<span>21 June</span>   •   <a href="#">#project</a>
												</div>
												<div class="post-item-social">
													<a href="#" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>" class="pis-share"><i class="fa fa-share-alt"></i></a>
													<a href="#" class="post-like"><i class="fa fa-heart"></i><span>28</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-12">
								<a href="medium-image-v1-2.html" class="post-nav post-older">OLDER →</a>
							</div>
						</div>

					</div>
				</div>

				<aside class="col-md-4">

					<div class="laread-right">

						<form class="laread-form search-form">
							<div class="input"><input type="text" class="form-control" placeholder="Search..."></div>
							<button type="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
						</form>

						<ul class="laread-list">
							<li class="title">CATEGORY</li>
							<li><a href="#">Branding</a><i class="line"></i></li>
							<li><a href="#">Design (48)</a><i class="line"></i></li>
							<li><a href="#">Photography</a><i class="line"></i></li>
							<li><a href="#">Inspiration</a><i class="line"></i></li>
							<li><a href="#">Life</a><i class="line"></i></li>
							<li><a href="#">City</a><i class="line"></i></li>
						</ul>

						<ul class="laread-list">
							<li class="title">RECENT POSTS</li>
							<li><a href="#">The Nature of My Inspiration</a><i class="date">28 June</i></li>
							<li><a href="#">Sam Feldt - Show Me Love</a><i class="date">27 June</i></li>
							<li><a href="#">Do You Love Coffee?</a><i class="date">25 June</i></li>
							<li><a href="#">The Game Before The Game</a><i class="date">23 June</i></li>
							<li><a href="#">Long Live The Kings</a><i class="date">22 June</i></li>
						</ul>

						<ul class="laread-list">
							<li class="title">TAGS</li>
							<li class="bar-tags">
								<a href="#">fashion</a>
								<a href="#">culture</a>
								<a href="#">art</a>
								<a href="#">concept</a>
								<a href="#">style</a>
								<a href="#">advert</a>
								<a href="#">movie</a>
								<a href="#">color</a>
								<a href="#">branding</a>
								<a href="#">technology</a>
								<a href="#">fashion</a>
								<a href="#">culture</a>
								<a href="#">art</a>
								<a href="#">concept</a>
							</li>
						</ul>

						<ul class="laread-list barbg-grey">
							<li class="title">NEWSLETTER</li>
							<li class="newsletter-bar">
								<p>Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit.</p>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" placeholder="john@doe.com">
									<span class="input-group-btn">
										<button class="btn" type="button"><i class="fa fa-check"></i></button>
									</span>
								</div>
							</li>
						</ul>

						<div class="laread-list quotes-basic">
							<i class="fa fa-quote-left"></i>
							<p>“The difference between stupidity and genius is that genius has its limits.”</p>
							<span class="whosay">- Albert Einstein </span>
						</div>

						<ul class="laread-list social-bar">
							<li class="title">FOLLOW US</li>
							<li class="social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
							</li>
						</ul>

					</div>

				</aside>
			</div>
		</div>

		<footer class="container-fluid footer">
			<div class="container text-center">
				<div class="footer-logo"><img src="assets/img/logo-black.png" alt=""></div>
				<p class="laread-motto">Designed for Read.</p>
				<div class="laread-social">
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-pinterest"></a>
				</div>
			</div>
		</footer>
	</div>

	<div id="quick-read" class="qr-white-theme">
		<div class="quick-read-head">
			<div class="container">
				<a href="#" class="qr-logo"></a>
				<div class="qr-tops">
					<a href="#" class="qr-search-close"><i class="fa fa-times"></i></a>
					<a href="#" class="qr-search"><i class="fa fa-search"></i></a>
					<a href="#" class="qr-change"><i class="fa fa-adjust"></i></a>
					<a href="#" class="qr-close"><i class="fa fa-times"></i></a>
				</div>
				<form class="qr-search-form">
					<input type="text" placeholder="Search LaRead">
				</form>
			</div>
		</div>
		<div class="quick-dialog">
			<div class="quick-body">
				<div class="container">
					<div class="col-md-8 col-md-offset-2">
						<div class="qr-content post-item-paragraph">

							<article>
								<h2>A Nice Street Cafe in London</h2>

								<p>Consectetur adipiscing elit. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Nulla id sem a mauris egestas pulvinar vitae non dui. Cras odio tortor, feugiat nec sagittis sed, laoreet ut mauris. In hac habitasse platea dictumst.</p>

								<p>What if instead your website used machine learning to build itself, and then rebuilt as necessary, based on data it was gathering about how it was being used? That's what The Grid is aiming to do. After you add content such as pictures, text, the stuff everyone enjoys interacting with your obligation to design...</p>

								<h4>The Truth about Teens and Privacy</h4>

								<p>Social media has introduced a new dimension to the well-worn fights over private space and personal expression. Teens do not want their parents to view their online profiles or look over their shoulder when they’re chatting with friends. Parents are no longer simply worried about what their children wear out of the house but what they photograph themselves wearing in their bedroom to post online. Interactions that were previously invisible to adults suddenly have traces, prompting parents to fret over.</p>

								<h4>Here are some of the ways you may be already being hacked:</h4>

								<ul class="in-list">
									<li>Everyone makes mistakes</li>
									<li>You can control only your behavior</li>
									<li>Good habits create discipline</li>
									<li>Remember the <u>big picture</u></li>
									<li>Everyone learns differently</li>
									<li>Focus on the Benefits, Not the Difficulties</li>
									<li>Traditions are bonding opportunities</li>
								</ul>

								<p>This is not a comprehensive list. Rather, it is a snapshot in time of real-life events that are happening right now. In the future, we will likely read this list and laugh at all the things I failed to envision.</p>
								<p class="with-img">
									<a href="assets/img/banner-85-1.jpg" data-fluidbox-qr><img src="assets/img/banner-85.jpg" alt=""></a>
									<span class="img-caption">Walk through the Forest</span>
								</p>
								<p>Elit try-hard consectetur, dolore voluptate minim distillery. Bespoke Cosby sweater pug street art et keytar. Nihil fish whatever trust fund, dreamcatcher in fingerstache squid seitan accusamus. Organic Wes Anderson High Life setruhe authentic iPhone, aute art party hashtag fixie church-key art veniam Tumblr polaroid. DIY polaroid vinyl, sustainable hella scenester accusamus fanny pack. Ut Neutra enim pariatur cornhole actually Banksy, tote bag fugiat ad accusamus. Incididunt fixie normcore fingerstache. Freegan proident literally brunch before they sold out.
								</p>

								<p>Readymade fugiat narwhal, typewriter VHS aute stumptown hoodie irure put a bird on it. Fashion axe raw denim brunch put a bird on it voluptate Truffaut. Bitters PBR&amp;B nulla Odd Future swag leggings. Banh mi Wes Anderson butcher letterpress skateboard quis. Chambray hella retro viral Cosby sweater photo booth. Schlitz elit Cosby sweater, Blue Bottle non chambray chia. Single-origin coffee pickled.</p>

								<h5>Blockquote</h5>

								<p>Do officia aliqua, pop-up ut et occupy sriracha. YOLO meggings PBR sartorial mollit, Schlitz assumenda vero kitsch plaid post-ironic PBR&amp;B keffiyeh. Cosby sweater wolf YOLO Austin bespoke, American Apparel crucifix paleo flexitarian. Aliquip bitters food truck, incididunt tofu accusamus magna nesciunt typewriter drinking vinegar Shoreditch try-hard you probably haven’t heard of them labore. </p>

								<blockquote>
									<p><i>“The Muppets Take Manhattan”</i><br />
									This movie was a disappointment. The Muppets do not take Manhattan at all. They merely visit it.<br />
									<span>— No stars.</span></p>
								</blockquote>

								<p>Do officia aliqua, pop-up ut et occupy sriracha. YOLO meggings PBR sartorial mollit, Schlitz assumenda vero kitsch plaid post-ironic PBR&amp;B keffiyeh. Cosby sweater wolf YOLO Austin bespoke, American Apparel crucifix paleo flexitarian. Aliquip bitters food truck, incididunt tofu accusamus.</p>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="quick-read-bottom">
			<p class="qr-info">By <a href="#">Daniele Zedda</a>   •   18 February</p>
			<div class="qr-nav">
				<a href="#" class="qr-prev">← PREV POST</a>
				<a href="#" class="qr-share" tabindex="0" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>"><i class="fa fa-share-alt"></i></a>
				<a href="#" class="qr-comment"><i class="fa fa-comment"></i></a>
				<a href="#" class="qr-like"><i class="fa fa-heart"></i> 34</a>
				<a href="#" class="qr-next">NEXT POST →</a>
			</div>
		</div>
		<div class="quick-read-bottom qr-bottom-2 hide">
			<div class="qr-nav">
				<a href="#" class="qr-prev">← PREV POST</a>
				<p class="qr-info">By <a href="#">Daniele Zedda</a>   •   18 February</p>
				<a href="#" class="qr-next">NEXT POST →</a>
				<a href="#" class="qr-like"><i class="fa fa-heart"></i> 34</a>
				<div class="qr-sharebox">
					<span>Share on</span>
					<a href='#'><i class='fa fa-facebook'></i></a>
					<a href='#'><i class='fa fa-twitter'></i></a>
				</div>
			</div>
		</div>
	</div>

	<!-- Login Modal -->
	<div class="modal leread-modal fade" id="login-form" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" id="login-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="fa fa-unlock-alt"></i>LaRead Sign In</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<div class="linkbox">
							<a href="#">Forgot password ?</a>
							<span>No account ? <a href="#" id="register-btn" data-toggle="modal" data-target="#register-form">Sign Up.</a></span>
							<span class="form-warning"><i class="fa fa-exclamation"></i>Fill the require.</span>
						</div>
						<div class="linkbox">
							<label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
							<button type="button" class="btn btn-golden btn-signin">SIGN IN</button>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<div class="provider">
						<span>Sign In With</span>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
			<div class="modal-content" id="register-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="fa fa-lock"></i>LaRead Sign Up</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<input class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Username">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input class="form-control" type="password" placeholder="Password">
						</div>
						<div class="linkbox">
							<span>Already got account? <a href="#" id="login-btn" data-target="#login-form">Sign In.</a></span>
						</div>
						<div class="linkbox">
							<label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
							<button type="button" class="btn btn-golden btn-signin">SIGN UP</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	@include('Themes.PithyHome.Common.footer');

</body>
</html>
