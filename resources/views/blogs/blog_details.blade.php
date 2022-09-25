@extends('layouts')

@section('title', 'Home')

@section('section-content')


	<!-- Start Page Title Area -->
	<div class="page-title-area item-bg1">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Blog Details</h2>
						<ul>
							<li><a href="index.html">Home</a>
							</li>
							<li>Blog Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->
	
	<!-- Start Blog Details Area -->
	<section class="blog-details-area ptb-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="blog-details-desc">
						<div class="article-image">
							<img src="{{ URL::asset('assets/img/blog-details/3.jpg')}}" alt="image">
						</div>
						<div class="article-content">
							<div class="entry-meta">
								<ul>
									<li> <span>Posted On:</span>  <a href="#">June 10 - 2021</a>
									</li>
									<li> <span>Posted By:</span>  <a href="#">Herman Boone</a>
									</li>
								</ul>
							</div>
							<h3>5 Technology Considerations for Office Relocations</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
							<ul class="wp-block-gallery columns-3">
								<li class="blocks-gallery-item">
									<figure>
										<img src="{{ URL::asset('assets/img/blog-details/1.jpg')}}" alt="image">
									</figure>
								</li>
								<li class="blocks-gallery-item">
									<figure>
										<img src="{{ URL::asset('assets/img/blog-details/2.jpg')}}" alt="image">
									</figure>
								</li>
								<li class="blocks-gallery-item">
									<figure>
										<img src="{{ URL::asset('assets/img/blog-details/3.jpg')}}" alt="image">
									</figure>
								</li>
							</ul>
							<h3>Emergency It Services</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
						</div>
						<div class="article-footer">
							<div class="article-tags"> <span>Tag:</span>
								<a href="#">Solutions</a>, <a href="#">Guide</a>
							</div>
							<div class="article-share">
								<ul class="social">
									<li><span>Share:</span>
									</li>
									<li>
										<a href="#"> <i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="#"> <i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#"> <i class="fab fa-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="post-navigation">
							<div class="navigation-links">
								<div class="nav-previous">
									<a href="#"> <i class="fa fa-arrow-left"></i> Prev Post</a>
								</div>
								<div class="nav-next"> <a href="#">
                                            Next Post 
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
								</div>
							</div>
						</div>
						<div class="comments-area">
							<h3 class="comments-title">3 Comments:</h3>
							<ol class="comment-list">
								<li class="comment">
									<article class="comment-body">
										<footer class="comment-meta">
											<div class="comment-author vcard">
												<img src="{{ URL::asset('assets/img/client/1.jpg')}}" class="avatar" alt="image"> <b class="fn">Wilson Swanson</b>
												<span class="says">says:</span>
											</div>
											<div class="comment-metadata">
												<a href="#">
													<span>June 15 - 2021 12:30 PM</span>
												</a>
											</div>
										</footer>
										<div class="comment-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
										</div>
										<div class="reply"> <a href="#" class="comment-reply-link">Reply</a>
										</div>
									</article>
									<ol class="children">
										<li class="comment">
											<article class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<img src="{{ URL::asset('assets/img/client/2.jpg')}}" class="avatar" alt="image"> <b class="fn">Ella Hodges</b>
														<span class="says">says:</span>
													</div>
													<div class="comment-metadata">
														<a href="#">
															<span>June 15 - 2021 12:30 PM</span>
														</a>
													</div>
												</footer>
												<div class="comment-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
												</div>
												<div class="reply"> <a href="#" class="comment-reply-link">Reply</a>
												</div>
											</article>
										</li>
									</ol>
								</li>
								<li class="comment">
									<article class="comment-body">
										<footer class="comment-meta">
											<div class="comment-author vcard">
												<img src="{{ URL::asset('assets/img/client/4.jpg')}}" class="avatar" alt="image"> <b class="fn">Melissa Bryant</b>
												<span class="says">says:</span>
											</div>
											<div class="comment-metadata">
												<a href="#">
													<span>June 15 - 2021 12:30 PM</span>
												</a>
											</div>
										</footer>
										<div class="comment-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
										</div>
										<div class="reply"> <a href="#" class="comment-reply-link">Reply</a></div>
									</article>
								</li>
							</ol>
							<div class="comment-respond">
								<h3 class="comment-reply-title">Leave a Reply</h3>
								<form class="comment-form">
									<p class="comment-notes"> <span id="email-notes">Your email address will not be published.</span>
										Required fields are marked <span class="required">*</span>
									</p>
									<p class="comment-form-comment">
										<label>Comment</label>
										<textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
									</p>
									<p class="comment-form-author">
										<label>Name <span class="required">*</span>
										</label>
										<input type="text" id="author" name="author" required="required">
									</p>
									<p class="comment-form-email">
										<label>Email <span class="required">*</span>
										</label>
										<input type="email" id="email" name="email" required="required">
									</p>
									<p class="comment-form-url">
										<label>Website</label>
										<input type="url" id="url" name="url">
									</p>
									<p class="comment-form-cookies-consent">
										<input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
										<label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
									</p>
									<p class="form-submit">
										<input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<aside class="widget-area" id="secondary">
						<section class="widget widget_search">
							<form class="search-form search-top">
								<label> <span class="screen-reader-text">Search for:</span>
									<input type="search" class="search-field" placeholder="Search...">
								</label>
								<button type="submit"> <i class="fas fa-search"></i>
								</button>
							</form>
						</section>
						<section class="widget widget_techvio_posts_thumb">
							<h3 class="widget-title">Popular Posts</h3>
							<article class="item">
								<a href="#" class="thumb"> <span class="fullimage cover bg1" role="img"></span>
								</a>
								<div class="info">
									<span>June 10, 2021</span>
									<h4 class="title usmall">
                                            <a href="#">5 Technology Considerations for Office Relocations</a>
                                        </h4>
								</div>
							</article>
							<article class="item">
								<a href="#" class="thumb"> <span class="fullimage cover bg2" role="img"></span>
								</a>
								<div class="info">
									<span>June 15, 2021</span>
									<h4 class="title usmall">
                                            <a href="#">Everything you need to know about geo-blocking</a>
                                        </h4>
								</div>
							</article>
							<article class="item">
								<a href="#" class="thumb"> <span class="fullimage cover bg3" role="img"></span>
								</a>
								<div class="info">
									<span>June 25, 2021</span>
									<h4 class="title usmall">
                                            <a href="#">Machine Learning Applications for Every Industry</a>
                                        </h4>
								</div>
							</article>
						</section>
						<section class="widget widget_categories">
							<h3 class="widget-title">Categories</h3>
							<ul>
								<li> <a href="#">Business</a>
								</li>
								<li> <a href="#">Solutions</a>
								</li>
								<li> <a href="#">Technology</a>
								</li>
								<li> <a href="#">Guide</a>
								</li>
								<li> <a href="#">Uncategorized</a>
								</li>
							</ul>
						</section>
						<section class="widget widget_recent_comments">
							<h3 class="widget-title">Recent Comments</h3>
							<ul>
								<li> <span class="comment-author-link">
                                            <a href="#">A WordPress Commenter</a>
                                        </span>
									on <a href="#">Hello world!</a>
								</li>
								<li> <span class="comment-author-link">
                                            <a href="#">Crimso</a>
                                        </span>
									on <a href="#">Hello world!</a>
								</li>
								<li> <span class="comment-author-link">
                                            <a href="#">Wordpress</a>
                                        </span>
									on <a href="#">Hello world!</a>
								</li>
								<li> <span class="comment-author-link">
                                            <a href="#">A WordPress Commenter</a>
                                        </span>
									on <a href="#">Hello world!</a>
								</li>
								<li> <span class="comment-author-link">
                                            <a href="#">Techvio</a>
                                        </span>
									on <a href="#">Hello world!</a>
								</li>
							</ul>
						</section>
						<section class="widget widget_archive">
							<h3 class="widget-title">Archives</h3>
							<ul>
								<li> <a href="#">June 2021</a>
								</li>
								<li> <a href="#">July 2021</a>
								</li>
								<li> <a href="#">August 2021</a>
								</li>
							</ul>
						</section>
						<section class="widget widget_tag_cloud">
							<h3 class="widget-title">Tags</h3>
							<div class="tagcloud"> <a href="#">
                                        IT 
                                        <span class="tag-link-count"> (3)</span>
                                    </a>
								<a href="#"> Technology
                                        <span class="tag-link-count"> (3)</span>
                                    </a>
								<a href="#">
                                        Applications 
                                        <span class="tag-link-count"> (2)</span>
                                    </a>
								<a href="#">
                                        Solutions 
                                        <span class="tag-link-count"> (2)</span>
                                    </a>
								<a href="#">
                                        Overview
                                        <span class="tag-link-count"> (1)</span>
                                    </a>
								<a href="#">
                                        Industry 
                                        <span class="tag-link-count"> (1)</span>
                                    </a>
								<a href="#">
                                        Marketing 
                                        <span class="tag-link-count"> (1)</span>
                                    </a>
								<a href="#">
                                        Guide 
                                        <span class="tag-link-count"> (2)</span>
                                    </a>
							</div>
						</section>
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Details Area -->
	
	<!-- Start Footer & Subscribe Section -->
	<section class="footer-subscribe-wrapper">
		<!-- Start Subscribe Area -->
		<div class="subscribe-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<div class="subscribe-content">
							<h2>Sign Up Our Newsletter</h2>
							<span class="sub-title">We Offer An Informative Monthly Technology Newsletter - Check It Out.</span>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<form class="newsletter-form">
							<input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
							<button type="submit">Subscribe Now</button>
							<div id="validator-newsletter" class="form-result"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End Subscribe Area -->
	</section>

@endsection
