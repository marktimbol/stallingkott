@extends('layouts.app')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
@endsection

@section('subpage_header')
	<div class="homepage-hero-module is-centered h-40vh">
	    <div class="video-container">
	        <div class="filter"></div>
	        <video autoplay loop class="fillWidth">
	            <source src="/videos/services.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
	        </video>
	        <div class="poster hidden">
	            <img src="PATH_TO_JPEG" alt="" title="" />
	        </div>
	    </div>

		<div class="Video__content is-centered Flex--column">	
			<h1 class="Video__title">
				Our Services
			</h1>		
		</div>		    
	</div>
@endsection

@section('content')
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
					<div class="Flex">
						<div class="Service Service--3 Column-4 Flex Flex--center">
							<div class="Service__border">
								<p>Vortex sprayed on liner</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/video.js') }}"></script>
@endsection