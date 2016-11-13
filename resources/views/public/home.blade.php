@extends('layouts.app')

@section('bodyClass', 'Home')

@section('content')
	
	<section class="Hero">
		<div class="container">
			<div class="row Flex">
				<div class="Hero__content Column-6">
					<h1 class="Hero__title">Give your home patio a makeover with our award-winning product</h1>
					<p class="Hero__action">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-lg btn-default Stelling__btn Stelling__btn--white" data-toggle="modal" data-target="#inquiryFormModal">
							Inquire Now
						</button>
					</p>
				</div>
				<div class="Hero__image Column-6">
					<img src="/images/hero-image.png" alt="" title="" class="img-responsive" />
				</div>
			</div>
		</div>
	</section>

	<section class="Clients">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="Section__title Section__title--center mb-30">Our Respected Clients</h3>
					<p class="lead text-center Section__title--sub">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					</p>
					<div class="Clients__carousel">
						@foreach( range(1, 10) as $index )
							<div class="item">
								<a href="#">
									<img src="/images/clients/dreamland.png" 
										alt="" 
										title="" 
										class="img-responsive" />
								</a>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<p>&nbsp;</p>

	<section class="About">
		<div class="container">
			<div class="row About__content">
				<div class="col-md-6">
					<h3 class="Section__title mt-0">About Stalling Kott Koatings</h3>
					<p class="lead">
						Incorporated in the emirate of Sharjah, U.A.E in 1993, Being the sole agents of the mother company the pioneers in the field of porcelain re-glazing and refinishing. It has successfully completed 23 years of service in this field.
					</p>
					<p>
						<a href="/about" class="btn btn-lg btn-default Stelling__btn">Read more</a>
					</p>
				</div>
				<div class="col-md-6">
					<img src="/images/about.jpg" 
						alt="About Stelling Kott Koatings" 
						title="About Stelling Kott Koatings" 
						class="img-responsive full-width" />
				</div>
			</div>
		</div>
	</section>

	<section class="Services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="Section__title Section__title--center mb-30">What we do</h3>
					<p class="Section__title--sub lead text-center">
						The services our company provide are but not limited to the below
					</p>
					<div class="Row">
						<div class="Column-7">
							<div class="Row">
								<div class="Column-6">
									<div class="Service Service--1 is-centered-xy">
										<h3 class="Service__title Service__title--bordered">Re-Glazing works</h3>
									</div>
								</div>
								<div class="Column-6">
									<div class="Service Service--2 is-centered-xy">
										<h3 class="Service__title Service__title--bordered">Waterproofing</h3>
									</div>
								</div>
							</div>
							<div class="Row">
								<div class="Column-6">
									<div class="Service Service--3 is-centered-xy">
										<h3 class="Service__title Service__title--bordered">Concrete crack filling</h3>
									</div>
								</div>
								<div class="Column-6">
									<div class="Service Service--4 is-centered-xy">
										<h3 class="Service__title Service__title--bordered">Water slider repairing</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="Flex-1">
							<div class="Service Service--5 full-height full-width is-centered-xy">
								<h3 class="Service__title Service__title--bordered">Granitex flooring</h3>
							</div>
						</div>
					</div>
					<div class="Row">
						<div class="Column-4">
							<div class="Service Service--6 is-centered-xy">
								<h3 class="Service__title Service__title--bordered">Supply of cleaning materials</h3>
							</div>
						</div>
						<div class="Flex-1">
							<div class="Service Service--7 full-width is-centered-xy">
								<h3 class="Service__title Service__title--bordered">Vortex sprayed on liner</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="Materials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="Section__title Section__title--center mb-30 color-white">Our Glaze's Materials</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="Material">
						<div class="Material__content-container">
							<div class="Material__content">
								<h3 class="Section__title color-white">
									Kott Koatings Materials
								</h3>
								<p class="color-white">
									Kott Koatings materials developed a process of porcelain re-glazing which can actually re-store a warm bathroom &amp; kitchen fixtures such as bathtubs, sinks, ceramic wall tiles, fiberglass services &amp; counter tubs without removing the items. We do all the work on locations without disturb the walls, floors or plumbing fixtures surrounding the same. It means we can give a new life by repairing and resurfacing it with our exclusive glazes which is specially developed for the porcelain-refinishing field.
								</p>
							</div>
						</div>
						<div class="Material__image">
							<img src="/images/material.png" alt="Material" title="Material" class="img-responsive" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('public._inquiry-form-modal')
@endsection