
@extends('frontend.layout.dashboard')
@section('content')
<div class="hero-banner vedio-banner">
	<div class="overlay"></div>	
		<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
		<source src="assets/img/banners.mp4" type="video/mp4">
		</video>
				
<div class="container">               
    <div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
    <h1 class="big-header-capt mb-0 text-light">Search Your Next Home</h1>
    <p class="text-center mb-4 text-light">Find new & featured property located in your local city.</p>
    </div>
    </div>
                    
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="simple_tab_search center">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
        
                <li class="nav-item">
                    <a class="nav-link active" id="sell-tab" data-toggle="tab" href="#sell" role="tab" aria-controls="sell" aria-selected="false">Sell
 					<input type="hidden" value="1">
                    </a>
                   
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="false">Rent
                    	<input type="hidden" value="2">
                    </a>

                </li>
            </ul>
            
    <div class="tab-content" id="myTabContent">
		<!-- Tab for Sell -->
		<div class="tab-pane fade show active" id="sell" role="tabpanel" aria-labelledby="sell-tab">
		<form action="{{route('all.property')}}" method="get">
			<input type="hidden" value="1" name="sale_status">
		    <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
		        <div class="search_hero_wrapping">
		    
		            <div class="row">
		            
		                <div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
		                    <div class="form-group">
		                        <label>Property Name</label>
		                        <input type="text" class="form-control search_input b-0" name="name" />
		                    </div>
		                </div>
		                
		                <div class="col-lg-3 col-md-3 col-sm-12">
		                    <div class="form-group">
		                        <label>Location</label>
		                        <div class="input-with-icon">
		                            <select id="lot-1" class="form-control" name="location_id">
		                                <option value="">Select Location</option>
		                                @foreach($locations as $data)	
		                                <option value="{{ $data->id}}">{{ $data->name}}</option>
		                                @endforeach
		                              
		                            </select>
		                        </div>
		                    </div>
		                </div>
		                
		                <div class="col-lg-2 col-md-3 col-sm-12">
		                    <div class="form-group">
		                        <label>Property Type</label>
		                        <div class="input-with-icon">
		                            <select  class="form-control" name="type">
		                                <option value="">Select  Type</option>
		                                <option value="1">All categories</option>
		                               
		                            </select>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-2 col-md-3 col-sm-12">
		                    <div class="form-group">
		                        <label>Bedrooms</label>
		                        <div class="input-with-icon">
		                            <select name="bedroom" class="form-control" >
		                                <option value="">Select Bedrooms</option>
		                                <option value="1">All categories</option>
		                                
		                            </select>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-2 col-md-3 col-sm-12 small-padd">
		                    <div class="form-group none">
		                        <input type="submit" class="btn search-btn" value="Search Property">
		                    </div>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</form>
		</div>    
		<!-- Tab for Rent -->
		<div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
		<form action="{{route('all.property')}}" method="get">
			<input type="hidden" value="2" name="sale_status">
			<div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
			<div class="search_hero_wrapping">

			    <div class="row">
			    
			        <div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
			            <div class="form-group">
			                <label>Property Name</label>
		                    <input type="text" class="form-control search_input b-0" name="name" />
			            </div>
			        </div>
			        
			        <div class="col-lg-3 col-md-3 col-sm-12">
		                <div class="form-group">
		                    <label>Location</label>
		                    <div class="input-with-icon">
		                        <select id="lot-1" class="form-control" name="location_id">
		                            <option value="">Select Location</option>
		                            <option value="1">New York City</option>
		                          
		                        </select>
		                    </div>
		                </div>
		            </div>
		            
		            <div class="col-lg-2 col-md-3 col-sm-12">
		                <div class="form-group">
		                    <label>Property Type</label>
		                    <div class="input-with-icon">
		                        <select  class="form-control" name="type">
		                            <option value="">Select  Type</option>
		                            <option value="1">All categories</option>
		                           
		                        </select>
		                    </div>
		                </div>
		            </div>


			      <div class="col-lg-2 col-md-3 col-sm-12">
		                <div class="form-group">
		                    <label>Bedrooms</label>
		                    <div class="input-with-icon">
		                        <select name="bedroom" class="form-control" >
		                            <option value="">Select Bedrooms</option>
		                            <option value="1">All categories</option>
		                            
		                        </select>
		                    </div>
		                </div>
		            </div>
			        
			      
			        <div class="col-lg-2 col-md-3 col-sm-12 small-padd">
			            <div class="form-group none">
			            	<input type="submit" class="btn search-btn" value="Search Property">
			                
			            </div>
			        </div>
			    </div>
			    
			  
			    
			</div>
			</div>
		</form>

		</div>


                
         </div>
            
        </div>
        
    		</div>
       </div>
    </div>
</div>
<!-- ============================ Hero Banner End ================================== -->

			
	<!-- ============================ Our Awards Start ================================== -->
			<section class="p-0">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-11 col-lg-11 col-md-12">
						
							<div class="_awards_group">	
								<ul class="_awards_lists">
									<!-- single list -->
									<li>
										<div class="_awards_list_wrap">
											<div class="_awards_list_thumb"><img src="assets/img/award-1.png" class="img-fluid" alt="" /></div>
											<div class="_awards_list_caption">
												<h5 class="theme-cl">2021</h5>
												<span>Annual Awards</span>
											</div>
										</div>
									</li>
									<!-- single list -->
									<li>
										<div class="_awards_list_wrap">
											<div class="_awards_list_thumb"><img src="assets/img/award-5.png" class="img-fluid" alt="" /></div>
											<div class="_awards_list_caption">
												<h5 class="theme-cl-2">2018</h5>
												<span>Filka Vivo Award</span>
											</div>
										</div>
									</li>
									<!-- single list -->
									<li>
										<div class="_awards_list_wrap">
											<div class="_awards_list_thumb"><img src="assets/img/award-2.png" class="img-fluid" alt="" /></div>
											<div class="_awards_list_caption">
												<h5 class="text-warning">2017</h5>
												<span>IITCA Green Award</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</section>
<!-- ============================ Our Awards End ================================== -->
			
			
<!-- ============================ Property Location ================================== -->
<section class="min">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 col-md-8">
				<div class="sec-heading center">
					<h2>Explore By Location</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
			</div>
		</div>
					
		<div class="row justify-content-center">	

		@foreach($locations as $data)			
		<!-- Single Location -->
		<div class="col-lg-4 col-md-4 col-sm-6">
			<a href="{{route('locationby.property',$data->id)}}" class="img-wrap style-2">
					<div class="location_wrap_content visible">
						<div class="location_wrap_content_first">
							<h4>{{$data->name}}</h4>
							
						</div>
					</div>
				<div class="img-wrap-background" style="background-image: url(assets/img/city-1.png);"></div>
			</a>
		</div>
		@endforeach
		</div>
			
	</div>
</section>
			<!-- ============================ Property Location End ================================== -->



<!-- ============================ Latest Property For Sale Start ================================== -->			
			
<section>
	<div class="container">
				
	<div class="row justify-content-center">
		<div class="col-lg-7 col-md-10 text-center">
			<div class="sec-heading center mb-4">
				<h2>Recent Listed Property</h2>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
			</div>
		</div>
	</div>			
	<div class="row justify-content-center">
		@foreach($propertys as $property)
		<!-- Single Property -->
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="property-listing property-2">
				
				<div class="listing-img-wrapper">
					<div class="_exlio_125">For Sale</div>
					<div class="list-img-slide">
						<div class="click">
							<div><a href="single-property-1.html"><img src="assets/img/p-1.png" class="img-fluid mx-auto" alt="" /></a></div>
							<div><a href="single-property-1.html"><img src="assets/img/p-2.png" class="img-fluid mx-auto" alt="" /></a></div>
							<div><a href="single-property-1.html"><img src="assets/img/p-3.png" class="img-fluid mx-auto" alt="" /></a></div>
						</div>
					</div>
				</div>
				
				<div class="listing-detail-wrapper">
					<div class="listing-short-detail-wrap">
						<div class="_card_list_flex mb-2">
							<div class="_card_flex_01">
								<span class="_list_blickes _netork">6 Network</span>
								<span class="_list_blickes types">Family</span>
							</div>
							<div class="_card_flex_last">
								<div class="prt_saveed_12lk">
									<label class="toggler toggler-danger"><input type="checkbox"><i class="ti-heart"></i></label>
								</div>
							</div>
						</div>
						<div class="_card_list_flex">
							<div class="_card_flex_01">
								<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">{{$property->address}}</a></h4>
							</div>
						</div>
					</div>
				</div>
				
				<div class="price-features-wrapper">
					<div class="list-fx-features">
						<div class="listing-card-info-icon">
							<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>{{$property->bedroom}} Beds
						</div>
						<div class="listing-card-info-icon">
							<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>1 Bath
						</div>
						<div class="listing-card-info-icon">
							<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 sqft
						</div>
					</div>
				</div>
				
				<div class="listing-detail-footer">
					<div class="footer-first">
						<h6 class="listing-card-info-price mb-0 p-0">$7,000</h6>
					</div>
					<div class="footer-flex">
						<a href="{{route('single.property',$property->id)}}" class="prt-view">View Detail</a>
					</div>
				</div>
				
			</div>
		</div>
		<!-- End Single Property -->
		@endforeach
	</div>
		
	<!-- Pagination -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">
			<a href="list-layout-with-map.html" class="btn btn-theme-light-2 rounded">Explore More Properties</a>
		</div>
	</div>
					
	</div>
</section>
<!-- ============================ Latest Property For Sale End ================================== -->			
			
			<!-- ============================ Top Agents ================================== -->
			<section class="gray-simple min">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8">
							<div class="sec-heading center">
								<h2>Our Featured Agents</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="item-slide space">
								
								<!-- Single Item -->
								<div class="single_items">
									<div class="grid_agents">
										<div class="elio_mx_list theme-bg-2">102 Listings</div>
										<div class="grid_agents-wrap">
											
											<div class="fr-grid-thumb">
												<a href="agent-page.html">
													<span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
													<img src="assets/img/team-1.jpg" class="img-fluid mx-auto" alt="">
												</a>
											</div>
											
											<div class="fr-grid-deatil">
												<span><i class="ti-location-pin mr-1"></i>Montreal, USA</span>
												<h5 class="fr-can-name"><a href="agent-page.html">Adam K. Jollio</a></h5>
												<ul class="inline_social">
													<li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
													<li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
													<li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
													<li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
												</ul>
											</div>
											
											<div class="fr-infos-deatil">	
												<a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
												<a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
											</div>
											
										</div>
										
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="single_items">
									<div class="grid_agents">
										<div class="elio_mx_list theme-bg-2">72 Listings</div>
										<div class="grid_agents-wrap">
											
											<div class="fr-grid-thumb">
												<a href="agent-page.html">
													<span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
													<img src="assets/img/team-2.jpg" class="img-fluid mx-auto" alt="">
												</a>
											</div>
											
											<div class="fr-grid-deatil">
												<span><i class="ti-location-pin mr-1"></i>Liverpool, Canada</span>
												<h5 class="fr-can-name"><a href="agent-page.html">Sargam S. Singh</a></h5>
												<ul class="inline_social">
													<li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
													<li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
													<li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
													<li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
												</ul>
											</div>
											
											<div class="fr-infos-deatil">	
												<a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
												<a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
											</div>
											
										</div>
										
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="single_items">
									<div class="grid_agents">
										<div class="elio_mx_list theme-bg-2">22 Listings</div>
										<div class="grid_agents-wrap">
											
											<div class="fr-grid-thumb">
												<a href="agent-page.html">
													<span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
													<img src="assets/img/team-3.jpg" class="img-fluid mx-auto" alt="">
												</a>
											</div>
											
											<div class="fr-grid-deatil">
												<span><i class="ti-location-pin mr-1"></i>Montreal, Canada</span>
												<h5 class="fr-can-name"><a href="agent-page.html">Harijeet M. Siller</a></h5>
												<ul class="inline_social">
													<li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
													<li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
													<li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
													<li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
												</ul>
											</div>
											
											<div class="fr-infos-deatil">	
												<a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
												<a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
											</div>
											
										</div>
										
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="single_items">
									<div class="grid_agents">
										<div class="elio_mx_list theme-bg-2">50 Listings</div>
										<div class="grid_agents-wrap">
											
											<div class="fr-grid-thumb">
												<a href="agent-page.html">
													<span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
													<img src="assets/img/team-4.jpg" class="img-fluid mx-auto" alt="">
												</a>
											</div>
											
											<div class="fr-grid-deatil">
												<span><i class="ti-location-pin mr-1"></i>Denever, USA</span>
												<h5 class="fr-can-name"><a href="agent-page.html">Anna K. Young</a></h5>
												<ul class="inline_social">
													<li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
													<li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
													<li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
													<li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
												</ul>
											</div>
											
											<div class="fr-infos-deatil">	
												<a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
												<a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
											</div>
											
										</div>
										
									</div>
								</div>
								
								<!-- Single Item -->
								<div class="single_items">
									<div class="grid_agents">
										<div class="elio_mx_list theme-bg-2">42 Listings</div>
										<div class="grid_agents-wrap">
											
											<div class="fr-grid-thumb">
												<a href="agent-page.html">
													<span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
													<img src="assets/img/team-5.jpg" class="img-fluid mx-auto" alt="">
												</a>
											</div>
											
											<div class="fr-grid-deatil">
												<span><i class="ti-location-pin mr-1"></i>2272 Briarwood Drive</span>
												<h5 class="fr-can-name"><a href="agent-page.html">Michael P. Grimaldo</a></h5>
												<ul class="inline_social">
													<li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
													<li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
													<li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
													<li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
												</ul>
											</div>
											
											<div class="fr-infos-deatil">	
												<a href="#" class="btn agent-btn theme-bg"><i class="fa fa-envelope mr-2"></i>Message</a>
												<a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
											</div>
											
										</div>
										
									</div>
								</div>
							
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Top Agents End ================================== -->
			
			
			
			<!-- ============================ Smart Testimonials ================================== -->
			<section class="image-cover" style="background:#122947 url(assets/img/pattern.png) no-repeat;">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8">
							<div class="sec-heading center light">
								<h2>Good Reviews By Clients</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-8">
							<div class="modern-testimonial">
								
								<!-- Single Items -->
								<div class="single_items">
									<div class="_smart_testimons">
										<div class="_smart_testimons_thumb">
											<img src="assets/img/user-1.jpg" class="img-fluid" alt="">
											<span class="tes_quote"><i class="fa fa-quote-left"></i></span>
										</div>
										<div class="facts-detail">
											<p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
										</div>
										<div class="_smart_testimons_info">
											<h5>Lily Warliags</h5>
											<div class="_ovr_posts"><span>CEO, Leader</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Items -->
								<div class="single_items">
									<div class="_smart_testimons">
										<div class="_smart_testimons_thumb">
											<img src="assets/img/user-2.jpg" class="img-fluid" alt="">
											<span class="tes_quote"><i class="fa fa-quote-left"></i></span>
										</div>
										<div class="facts-detail">
											<p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
										</div>
										<div class="_smart_testimons_info">
											<h5>Carol B. Halton</h5>
											<div class="_ovr_posts"><span>CEO, Leader</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Items -->
								<div class="single_items">
									<div class="_smart_testimons">
										<div class="_smart_testimons_thumb">
											<img src="assets/img/user-3.jpg" class="img-fluid" alt="">
											<span class="tes_quote"><i class="fa fa-quote-left"></i></span>
										</div>
										<div class="facts-detail">
											<p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
										</div>
										<div class="_smart_testimons_info">
											<h5>Jesse L. Westberg</h5>
											<div class="_ovr_posts"><span>CEO, Leader</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Items -->
								<div class="single_items">
									<div class="_smart_testimons">
										<div class="_smart_testimons_thumb">
											<img src="assets/img/user-4.jpg" class="img-fluid" alt="">
											<span class="tes_quote"><i class="fa fa-quote-left"></i></span>
										</div>
										<div class="facts-detail">
											<p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
										</div>
										<div class="_smart_testimons_info">
											<h5>Elmer N. Rodriguez</h5>
											<div class="_ovr_posts"><span>CEO, Leader</span></div>
										</div>
									</div>
								</div>
								
								<!-- Single Items -->
								<div class="single_items">
									<div class="_smart_testimons">
										<div class="_smart_testimons_thumb">
											<img src="assets/img/user-5.jpg" class="img-fluid" alt="">
											<span class="tes_quote"><i class="fa fa-quote-left"></i></span>
										</div>
										<div class="facts-detail">
											<p>Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.</p>
										</div>
										<div class="_smart_testimons_info">
											<h5>Heather R. Sirianni</h5>
											<div class="_ovr_posts"><span>CEO, Leader</span></div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ============================ Smart Testimonials End ================================== -->
			
		<section class="min">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8">
							<div class="sec-heading center">
								<h2>Latest News &amp; Articles</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						
						<!-- Single blog Grid -->
						<div class="col-lg-4 col-md-6">
							<div class="grid_blog_box">
								
								<div class="gtid_blog_thumb">
									<a href="blog-detail.html"><img src="assets/img/b-1.jpg" class="img-fluid" alt=""></a>
									<div class="gtid_blog_info"><span>12</span>Sep 2021</div>
								</div>								
								
								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.html">Creative Designs</a><span class="latest_new_post">New</span></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
								</div>
								
								<div class="modern_property_footer">
									<div class="property-author">
										<div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="assets/img/user-1.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="agent-page.html" tabindex="-1">Shaurya Preet</a></h5>
									</div>
									<span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>202</span>
								</div>
								
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-lg-4 col-md-6">
							<div class="grid_blog_box">
								
								<div class="gtid_blog_thumb">
									<a href="blog-detail.html"><img src="assets/img/b-5.jpg" class="img-fluid" alt=""></a>
									<div class="gtid_blog_info"><span>15</span>Aug 2021</div>
								</div>								
								
								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.html">UX/UI Developer</a><span class="latest_new_post hot">Hot</span></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
								</div>
								
								<div class="modern_property_footer">
									<div class="property-author">
										<div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="assets/img/user-2.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="agent-page.html" tabindex="-1">Nirgam Singh</a></h5>
									</div>
									<span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>407</span>
								</div>
								
							</div>
						</div>
						
						<!-- Single blog Grid -->
						<div class="col-lg-4 col-md-6">
							<div class="grid_blog_box">
								
								<div class="gtid_blog_thumb">
									<a href="blog-detail.html"><img src="assets/img/b-6.jpg" class="img-fluid" alt=""></a>
									<div class="gtid_blog_info"><span>27</span>Nov 2021</div>
								</div>								
								
								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.html">WordPress Developer &amp; UI</a><span class="latest_new_post">New</span></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
								</div>
								
								<div class="modern_property_footer">
									<div class="property-author">
										<div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="assets/img/user-3.jpg" class="img-fluid" alt=""></a></div>
										<h5><a href="agent-page.html" tabindex="-1">Dhananjay Singh</a></h5>
									</div>
									<span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i>410</span>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
			</section>	
			
@endsection