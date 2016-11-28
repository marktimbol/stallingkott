@extends('layouts.app')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
@endsection

@section('subpage_header')
	<div class="homepage-hero-module is-centered">
	    <div class="video-container">
	        <div class="filter"></div>
	        <video autoplay loop class="fillWidth">
	            <source src="/videos/kott-koatings.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
	        </video>
	        <div class="poster hidden">
	            <img src="PATH_TO_JPEG" alt="" title="" />
	        </div>
	    </div>

		<div class="Video__content is-centered Flex--column">	
			<h1 class="Video__title">
				Kott Koatings
			</h1>
			<h2 class="Video__subtitle">
				{{-- Introducing the exclusive patented "VORTEX SPRAYED ON LINER" system. --}}
			</h2>			
		</div>		    
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/video.js') }}"></script>
@endsection