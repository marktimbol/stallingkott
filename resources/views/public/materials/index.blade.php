@extends('layouts.app')

@section('pageTitle', "Our Glaze's Materials")

@section('bodyClass', 'Home')

@section('content')
	
	<section class="Materials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="Section__title Section__title--center mb-30">Our Glaze's Materials</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					@foreach( range(1, 8) as $index )
					<div class="Material">
						<div class="Material__content-container">
							<div class="Material__content">
								<h3 class="Section__title Section__title--with-border">
									Kott Koatings Materials
								</h3>
								<p>
									Kott Koatings materials developed a process of porcelain re-glazing which can actually re-store a warm bathroom &amp; kitchen fixtures such as bathtubs, sinks, ceramic wall tiles, fiberglass services &amp; counter tubs without removing the items. We do all the work on locations without disturb the walls, floors or plumbing fixtures surrounding the same. It means we can give a new life by repairing and resurfacing it with our exclusive glazes which is specially developed for the porcelain-refinishing field.
								</p>
							</div>
						</div>
						<div class="Material__image">
							<div class="temp-image"></div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

@endsection