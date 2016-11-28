@extends('layouts.app')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
@endsection

@section('subpage_header')
	<div class="homepage-hero-module is-centered">
	    <div class="video-container">
	        <div class="filter"></div>
	        <video autoplay loop class="fillWidth">
	            <source src="/videos/video.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
	        </video>
	        <div class="poster hidden">
	            <img src="PATH_TO_JPEG" alt="" title="" />
	        </div>
	    </div>

		<div class="Video__content is-centered Flex--column">	
			<h1 class="Video__title">
				Vortex
			</h1>
			<h2 class="Video__subtitle">
				Introducing the exclusive patented "VORTEX SPRAYED ON LINER" system.
			</h2>			
		</div>		    
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>&nbsp;</p>
				<div class="Flex">
					<div class="Column-6">
						<img src="/images/vortex.jpg" alt="Vortex" title="Vortex" class="img-responsive" />
					</div>
					<div class="Column-6">
						<h2 class="Section__title">What is Vortex®?</h2>
						<ul>
							<li>
								VORTEX is a company backed by over 50 years in the coating industry.
							</li>
							<li>
								VORTEX is the ONLY Truly Portable Spray On Liner System In The Industry.
							</li>
							<li>
								VORTEX is a premium spray on liner material that has an economical price.
							</li>
						</ul>
						<h3 class="Section__title">The Vortex® System</h3>
						<p>The VORTEX System was designed with these three things in mind</p>
						<ul>
							<li>Ease of Operation</li>
							<li>Keep your cost low</li>
							<li>Keep your profits high</li>
						</ul>
					</div>
				</div>

				<p>&nbsp;</p>

				<div class="row">
					@foreach( range(1, 9) as $index )
					<div class="col-md-4">
						<img src="/images/products/vortex/2.jpeg" alt="" title="" class="img-responsive" />
						<h4 class="theme-color font-normal">Vortex Sprayliner Materials</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/video.js') }}"></script>
@endsection