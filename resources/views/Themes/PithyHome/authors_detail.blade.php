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
						<a class="navbar-brand" href="archive.html"><img height="64" src="/assets/img/logo-light.png" alt=""></a>
					</div>
					<div class="get-post-titles">
						<button type="button" class="navbar-toggle push-navbar" data-navbar-type="default">
							<i class="fa fa-bars"></i>
						</button>
					</div>
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

		<section class="post-fluid">
			<div class="container-fluid">
				<div class="row laread-author-detail">
					<div class="author-picture">
						<img src="assets/img/img-49.png" alt="" />
					</div>
					<div class="author-subdetail">
						<h2>Angelique Calmon</h2>
						<p class="info-small">Art Director</p>
						<p class="author-bio">Hi everybody. I'm Angélique, a freelance Interactive Art Director in Montréal, Canada. I create iOS and Android app design and also responsive webdesign. <a href="#">full bio</a></p>
						<p class="info-small">
							<span><i class="fa fa-map-marker"></i> Montreal, Canada</span>
							<span><i class="fa fa-paper-plane"></i> 66 Posts</span>
							<a href="#"><i class="fa fa-twitter"></i> @angelcm</a>
						</p>
						<button type="button" class="btn btn-golden btn-golden-hover btn-rounded">Following</button>
					</div>
				</div>

				<div class="row author-article-list">
					<div class="article-list-box">
						<div class="article-type clearfix" role="tablist">
							<ul>
								<li role="presentation" class="active">
									<a href="#lastest" id="lastest-tab" role="tab" data-toggle="tab" aria-controls="lastest" aria-expanded="true">LATEST</a>
								</li>
								<li role="presentation">
									<a href="#popular" role="tab" id="popular-tab" data-toggle="tab" aria-controls="popular">POPULAR</a>
								</li>
							</ul>
						</div>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="lastest" aria-labelledBy="lastest-tab">
								<ul class="article-list">
									<li>
										<div class="media clearfix">
											<div class="media-right"><a href="#" class="article-number hidden-xs">28</a></div>
											<div class="media-body">
												<h4 class="media-heading"><a href="#">Marmorin Catalogue - Product Visualisations</a></h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit.</p>
												<div class="article-info"><span class="visible-xs-inline">21 June  •  </span><a href="#">Fashion</a>  •  <a href="#">21 comments</a></div>
											</div>
										</div>
									</li>
									<li>
										<div class="media clearfix">
											<div class="media-right"><a href="#" class="article-number hidden-xs">27</a></div>
											<div class="media-body">
												<h4 class="media-heading"><a href="#">Meet #59 Interface Designer Kerem Suer</a></h4>
												<p>Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus.</p>
												<div class="article-info"><span class="visible-xs-inline">18 June  •  </span><a href="#">Culture</a>  •  <a href="#">18 comments</a></div>
											</div>
										</div>
									</li>
									<li>
										<div class="media clearfix">
											<div class="media-right"><a href="#" class="article-number hidden-xs">24</a></div>
											<div class="media-body">
												<h4 class="media-heading"><a href="#">Workshop: Brand Asset Management</a></h4>
												<p>Nulla id sem a mauris egestas pulvinar vitae non dui. Cras odio tortor, feugiat nec sagittis sed, laoreet ut mauris. In hac habitasse platea dictumst.</p>
												<div class="article-info"><span class="visible-xs-inline">16 June  •  </span><a href="#">Art</a>  •  <a href="#">13 comments</a></div>
											</div>
										</div>
									</li>
									<li>
										<div class="media clearfix">
											<div class="media-right"><a href="#" class="article-number hidden-xs">21</a></div>
											<div class="media-body">
												<h4 class="media-heading"><a href="#">Turkish Coffee Culture History</a></h4>
												<p>Mauris non libero ligula, sed volutpat mauris. Duis facilisis elementum nisl, non aliquam enim tincidunt vitae. Donec laoreet est vitae erat auctor porttitor.</p>
												<div class="article-info"><span class="visible-xs-inline">12 June  •  </span><a href="#">Culture</a>  •  <a href="#">24 comments</a></div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="popular" aria-labelledBy="popular-tab">
								<ul class="article-list">
									<li>
										<div class="media clearfix">
											<div class="media-right"><a href="#" class="article-number hidden-xs">28</a></div>
											<div class="media-body">
												<h4 class="media-heading"><a href="#">Long Live The Kings - Short Film Documentary</a></h4>
												<p>Sed risus quam, dignissim a commodo sed, semper ac dolor. Nulla facilisi. Suspendisse nunc leo, hendrerit vestibulum pharetra in, consectetur quis sapien.</p>
												<div class="article-info"><span class="visible-xs-inline">12 June  •  </span><a href="#">Fashion</a>  •  <a href="#">6 comments</a></div>
											</div>
										</div>
									</li>
									<li>
										<div class="media clearfix">
											<div class="media-right"><a href="#" class="article-number hidden-xs">27</a></div>
											<div class="media-body">
												<h4 class="media-heading"><a href="#">The Joy of Snowsex</a></h4>
												<p>Nunc facilisis pulvinar tempor. Vivamus at nunc vel neque semper ullamcorper. Nullam facilisis vestibulum hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												<div class="article-info"><span class="visible-xs-inline">21 June  •  </span><a href="#">Fashion</a>  •  <a href="#">18 comments</a></div>
											</div>
										</div>
									</li>
									<li>
										<div class="media clearfix">
											<div class="media-right"><a href="#" class="article-number hidden-xs">21</a></div>
											<div class="media-body">
												<h4 class="media-heading"><a href="#">Turkish Coffee Culture History</a></h4>
												<p>Morbi pharetra fringilla purus, sit amet pellentesque urna lobortis ut. Aenean imperdiet urna a lectus imperdiet consequat. Fusce eu nibh metus.</p>
												<div class="article-info"><span class="visible-xs-inline">18 June  •  </span><a href="#">Brand</a>  •  <a href="#">12 comments</a></div>
											</div>
										</div>
									</li>
									<li>
										<div class="media clearfix">
											<div class="media-right"><a href="#" class="article-number hidden-xs">16</a></div>
											<div class="media-body">
												<h4 class="media-heading"><a href="#">Sam Feldt - Show Me Love (Out Now)</a></h4>
												<p>Sed vel magna leo, in pretium nunc. Ut ornare turpis vel ipsum vulputate lacinia. Pellentesque blandit sagittis tempor. Curabitur adipiscing est vitae quam bibendum at euismod ligula dignissim.</p>
												<div class="article-info"><span class="visible-xs-inline">16 June  •  </span><a href="#">Fashion</a>  •  <a href="#">16 comments</a></div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<a href="#" class="more-down"><i class="fa fa-long-arrow-down"></i></a>
				</div>
			</div>

		</div><!-- /.container -->

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

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	@include('Themes.PithyHome.Common.footer');
</body>
</html>
