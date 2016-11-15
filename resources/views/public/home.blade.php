@extends('layouts.app')

@section('bodyClass', 'Home')

@section('content')
	
	<section class="Hero Hero--center">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1 class="Hero__title">
						Give your home patio a makeover with our award-winning product
					</h1>
					<p class="Hero__action">
						<button type="button" 
							class="btn btn-lg btn-default btn-transparent" 
							data-toggle="modal" 
							data-target="#inquiryFormModal"
						>
							Inquire Now
						</button>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="Products">
		<div class="container">
			<div class="row">
				<div class="Flex">
					<div class="Product Column-6 Flex Flex--center is-red">
						<div class="Product__content">
							<div class="Flex Flex--center">
								<div class="Column-6">
									<h3 class="Section__title Section__title--white">Vortex</h3>
									<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
									</p>
									<p>
										<a href="/product/vortex" class="btn btn-default btn-transparent">
											Read more
										</a>
									</p>
								</div>
								<div class="Column-6">
									<img src="/images/Vortex--logo.jpg" alt="" title="" class="img-responsive full-width" />
								</div>
							</div>
						</div>
					</div>
					<div class="Product Column-6 Flex Flex--center is-orange">
						<div class="Product__content">
							<div class="Flex Flex--center">
								<div class="Column-6">
									<h3 class="Section__title Section__title--white">Kott Koatings</h3>
									<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
									</p>
									<p>
										<a href="" class="btn btn-default btn-transparent">
											Read more
										</a>
									</p>
								</div>
								<div class="Column-6">
									<img src="/images/Kott-koatings--logo.jpg" alt="" title="" class="img-responsive full-width" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="About">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="About__content">
						<div class="Flex Flex--center">
							<div class="Column-6">
								<h3 class="Section__title Section__title--white">About Stalling Kott Koatings</h3>
								<p class="lead">
									Incorporated in the emirate of Sharjah, U.A.E in 1993, Being the sole agents of the mother company the pioneers in the field of porcelain re-glazing and refinishing. It has successfully completed 23 years of service in this field.
								</p>
							</div>
							<div class="Column-6">
								<img src="/images/about.jpg" alt="" title="" class="img-responsive full-width" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="Services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="Section__title Section__title--center">What we do</h2>
					<p class="lead text-center">
						The services our company provide are but not limited to the below
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="Flex">
						<div class="Service Service--1 Column-4 Flex Flex--center">
							<div class="Service__border">
								<p>Re-Glazing Works</p>
							</div>
						</div>
						<div class="Service Service--2 Column-4 Flex Flex--center">
							<div class="Service__border">
								<p>Waterproofing</p>
							</div>
						</div>
						<div class="Service Service--3 Column-4 Flex Flex--center">
							<div class="Service__border">
								<p>Granite Flooring</p>
							</div>
						</div>
					</div>
					<div class="Flex">
						<div class="Service Service--1 Column-4 Flex Flex--center">
							<div class="Service__border">
								<p>Concrete crack filling</p>
							</div>
						</div>
						<div class="Service Service--2 Column-4 Flex Flex--center">
							<div class="Service__border">
								<p>Water slider repairing</p>
							</div>
						</div>
						<div class="Service Service--3 Column-4 Flex Flex--center">
							<div class="Service__border">
								<p>Supply of cleaning materials</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('public._inquiry-form-modal')
@endsection