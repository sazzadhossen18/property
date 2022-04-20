@extends('frontend.layout.dashboard')

@section('content')

<div class="page-title" style="background:#f4f4f4 url(assets/img/bg.jpg);" data-overlay="5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="breadcrumbs-wrap">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page">Submit Property</li>
					</ol>
					<h2 class="breadcrumb-title">Submit Your Property</h2>
				</div>
				
			</div>
		</div>
	</div>
</div>



<section>
			
<div class="container">
	<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="alert alert-info" role="alert">
		<p>If you don't have an account you can create one by <a href="#">Click Here</a></p>
		</div>
</div>


<form action="{{route('store.property')}}" method="post">
@csrf	
	<!-- Submit Form -->
	<div class="col-lg-12 col-md-12">
	<div class="submit-page p-0">
		<!-- Basic Information -->
		<div class="frm_submit_block">	
			<h3>Basic Information</h3>
			<div class="frm_submit_wrap">
			<div class="form-row">
				
			<div class="form-group col-md-12">
				<label>Property Title<a href="#" class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></a></label>
				<input type="text" class="form-control" placeholder="Property Title" name="name" required>
			</div>
					
			<div class="form-group col-md-6">
				<label>Status</label>
				<select id="sale_status" name="sale_status" class="form-control">
					<option value=""> Select Sale Status </option>
					<option value="0">For Sale</option>
					<option value="1">For Rent</option>
					
				</select>
			</div>
					
			<div class="form-group col-md-6">
				<label>Property Type</label>
				<select id="type" name="type" class="form-control">
					<option value="">Select Property Types</option>
					<option value="0">Apartment</option>
					<option value="1">Villas</option>
					<option value="2">Houses</option>
				</select>
			</div>
					
			<div class="form-group col-md-6">
				<label>Price</label>
				<input type="text" class="form-control" name="price" placeholder="USD">
			</div>
			
			<div class="form-group col-md-6">
				<label>Area</label>
				<input type="text" name="area" class="form-control">
			</div>
			
			<div class="form-group col-md-6">
				<label>Bedrooms</label>
				<select id="bedroom" name="bedroom" class="form-control">
					<option value="">Select Bedroom</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			
			<div class="form-group col-md-6">
				<label>Bathrooms</label>
				<select id="bathroom" name="bathroom" class="form-control">
					<option value="">Select Bathrooms</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>

			<div class="form-group col-md-6">
				<label>Garages</label>
				<select id="garage" name="garage" class="form-control">
					<option value="">Select Garages</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>


			<div class="form-group col-md-6">
				<label>Property Feature Image</label>
				<select id="garage" name="garage" class="form-control">
					<option value="">Select Garages</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>

			<div class="form-group col-md-6">
				<label>Property Gallery Image</label>
				<select id="garage" name="garage" class="form-control">
					<option value="">Select Garages</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>









					
				</div>
			</div>
		</div>
		
		<!-- Location -->
		<div class="frm_submit_block">	
			<h3>Location</h3>
			<div class="frm_submit_wrap">
				<div class="form-row">

					<div class="form-group col-md-6">
						<label>Location</label>
						<select id="location_id" name="location_id" class="form-control">
							<option value="">Select Location</option>
							@foreach($locations as $locat)
							<option value="{{$locat->id}}">{{$locat->name}}</option>
							@endforeach
							
						</select>
					</div>

					<div class="form-group col-md-6">
						<label>Address</label>
						<input type="text" class="form-control" name="address">
					</div>
					
					<div class="form-group col-md-6">
						<label>City</label>
						<input type="text" class="form-control" name="city">
					</div>
					
					<div class="form-group col-md-6">
						<label>State</label>
						<input type="text" class="form-control" name="state">
					</div>
					
					<div class="form-group col-md-6">
						<label>Zip Code</label>
						<input type="text" class="form-control" name="zipcode">
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Detailed Information -->
		<div class="frm_submit_block">	
			<h3>Detailed Information</h3>
			<div class="frm_submit_wrap">
				<div class="form-row">
				
					<div class="form-group col-md-12">
						<label>Description</label>
						<textarea class="form-control h-120" name="description"></textarea>
					</div>
					
					<div class="form-group col-md-12">
						<label>Youtube Vide Link</label>
						<input type="text" name="video" class="form-control">
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="form-group">
			<div class="col-lg-12 col-md-12">
			<button class="btn btn-theme" type="submit">Submit &amp; Preview</button>
			</div>
		</div>
					
	</div>
	</div>
</form>




		
	</div>
</div>
						
</section>


@endsection