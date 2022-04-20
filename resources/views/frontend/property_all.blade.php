@extends('frontend.layout.dashboard')
@section('content')

<section class="gray pt-4">		
	<div class="container">
		
		<div class="row m-0">
			<div class="short_wraping">
				<div class="row align-items-center">
				
					<div class="col-lg-3 col-md-6 col-sm-12  col-sm-6">
						
					</div>
			
					<div class="col-lg-9 col-md-12 col-sm-12 order-lg-2 order-md-3 elco_bor col-sm-12">
						<div class="shorting_pagination">
							<div class="shorting_pagination_laft">
								<h5>Showing {{$propertys->currentPage()}}-{{$propertys->count()}}  of {{$propertys->total()}} results</h5>
							</div>
							 {{ $propertys->links() }}
							<div class="shorting_pagination_right">
								
								
								
							</div>
						</div>
					</div>
			
					
					
				</div>
			</div>
		</div>
		
		<div class="row">
			
			<!-- property Sidebar -->
			<div class="col-lg-4 col-md-12 col-sm-12">

				<div class="page-sidebar p-0">
					<a class="filter_links" data-toggle="collapse" href="#fltbox" role="button" aria-expanded="false" aria-controls="fltbox">Open Advance Filter<i class="fa fa-sliders-h ml-2"></i></a>							
					<div class="collapse" id="fltbox">

<form action="{{route('all.property')}}" method="get">

						<!-- Find New Property -->
<div class="sidebar-widgets p-4">
							
		<div class="form-group">
			<div class="input-with-icon">
				<input type="text" class="form-control" placeholder="Property Name" name="name">
				<i class="ti-search"></i>
			</div>
		</div>
											
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
						<div class="simple-input">
							<input type="text" class="form-control" placeholder="Min Price" name="min_price">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
						<div class="simple-input">
							<input type="text" class="form-control" placeholder="Max Price" name="max_price">
						</div>
					</div>
				</div>
			</div>
		
							
			<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 pt-4">
				<button class="btn theme-bg rounded full-width">Find New Home</button>
			</div>
			</div>			
						
	</div>				
							
							
	</form>				
							



							
																
							
							
							
							
						
					
					</div>
				</div>
				<!-- Sidebar End -->




<div class="sidebar-widgets">
									
	<h4>Reent Property</h4>
									
	<div class="sidebar-property">
		
		<!-- List Sibar Property -->
		<div class="sides_list_property">
			<div class="sides_list_property_thumb">
				<img src="assets/img/p-1.png" class="img-fluid" alt="">
			</div>
			<div class="sides_list_property_detail">
				<h4><a href="single-property-1.html">Loss vengel New Apartment</a></h4>
				<span><i class="ti-location-pin"></i>Sans Fransico</span>
				<div class="lists_property_price">
					<div class="lists_property_types">
						<div class="property_types_vlix sale">For Sale</div>
					</div>
					<div class="lists_property_price_value">
						<h4>$4,240</h4>
					</div>
				</div>
			</div>
		</div>
		
		<!-- List Sibar Property -->
		<div class="sides_list_property">
			<div class="sides_list_property_thumb">
				<img src="assets/img/p-4.png" class="img-fluid" alt="">
			</div>
			<div class="sides_list_property_detail">
				<h4><a href="single-property-1.html">Montreal Quriqe Apartment</a></h4>
				<span><i class="ti-location-pin"></i>Liverpool, London</span>
				<div class="lists_property_price">
					<div class="lists_property_types">
						<div class="property_types_vlix">For Rent</div>
					</div>
					<div class="lists_property_price_value">
						<h4>$7,380</h4>
					</div>
				</div>
			</div>
		</div>
		
		<!-- List Sibar Property -->
		<div class="sides_list_property">
			<div class="sides_list_property_thumb">
				<img src="assets/img/p-7.png" class="img-fluid" alt="">
			</div>
			<div class="sides_list_property_detail">
				<h4><a href="single-property-1.html">Curmic Studio For Office</a></h4>
				<span><i class="ti-location-pin"></i>Montreal, Canada</span>
				<div class="lists_property_price">
					<div class="lists_property_types">
						<div class="property_types_vlix buy">For Buy</div>
					</div>
					<div class="lists_property_price_value">
						<h4>$8,730</h4>
					</div>
				</div>
			</div>
		</div>
		
		<!-- List Sibar Property -->
		<div class="sides_list_property">
			<div class="sides_list_property_thumb">
				<img src="assets/img/p-5.png" class="img-fluid" alt="">
			</div>
			<div class="sides_list_property_detail">
				<h4><a href="single-property-1.html">Montreal Quebec City</a></h4>
				<span><i class="ti-location-pin"></i>Sreek View, New York</span>
				<div class="lists_property_price">
					<div class="lists_property_types">
						<div class="property_types_vlix">For Rent</div>
					</div>
					<div class="lists_property_price_value">
						<h4>$6,240</h4>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>





			</div>
			
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="row justify-content-center">
			
			@foreach($propertys as $property)
			<!-- Single Property -->
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="property-listing list_view">
					
					<div class="listing-img-wrapper">
						<div class="_exlio_125">{{$property->sale_status}}</div>
						<div class="list-img-slide">
							<div class="click">
								<div><a href="single-property-1.html"><img src="assets/img/p-1.png" class="img-fluid mx-auto" alt=""></a></div>
								<div><a href="single-property-1.html"><img src="assets/img/p-2.png" class="img-fluid mx-auto" alt=""></a></div>
								<div><a href="single-property-1.html"><img src="assets/img/p-3.png" class="img-fluid mx-auto" alt=""></a></div>
							</div>
						</div>
					</div>
					
					<div class="list_view_flex">
					
						<div class="listing-detail-wrapper mt-1">
							<div class="listing-short-detail-wrap">
								<div class="_card_list_flex mb-2">
									<div class="_card_flex_01">
										<span class="_list_blickes _netork">6 Network</span>
										<span class="_list_blickes types">Family</span>
									</div>
									<div class="_card_flex_last">
										<h6 class="listing-card-info-price mb-0">$7,000</h6>
									</div>
								</div>
								<div class="_card_list_flex">
									<div class="_card_flex_01">
										<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">{{$property->name}}</a></h4>
									</div>
								</div>
							</div>
						</div>
						
						<div class="price-features-wrapper">
							<div class="list-fx-features">
								<div class="listing-card-info-icon">
									<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt=""></div>3 Beds
								</div>
								<div class="listing-card-info-icon">
									<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt=""></div>1 Bath
								</div>
								<div class="listing-card-info-icon">
									<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt=""></div>800 sqft
								</div>
							</div>
						</div>
						
						<div class="listing-detail-footer">
							<div class="footer-first">
								<div class="foot-rates">
									<span class="elio_rate good">4.2</span>
									<div class="_rate_stio">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
							<div class="footer-flex">
								<a href="property-detail.html" class="prt-view">View Detail</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- End Single Property -->
			@endforeach	
					
					
				
				</div>
			</div>
			
			
		</div>
	</div>	
</section>

@endsection