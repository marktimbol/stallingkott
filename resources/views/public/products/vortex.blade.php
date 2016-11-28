@extends('layouts.app')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
@endsection

@section('subpage_header')
	<div class="homepage-hero-module is-centered h-40vh">
	    <div class="video-container">
	        <div class="filter"></div>
	        <video autoplay loop class="fillWidth">
	            <source src="/videos/vortex.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
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
				<h3 class="fancy-title">About Vortex</h3>
				<p>
					The Vortex Spray liner System allows applying a super industrial coating up to 1⁄4” thick to any hard surface such as buses, pickup truck bed and having the coating dry in a matter of seconds. Its able to withstand over 50,000 PSI of impact, the Vortex material is both industrially strong, yet easy to apply using the patented Portable Spray System. Vortex has the only portable spray system that allows complete professional lining or coating of virtually all hard surfaces for a permanent waterproof coating that will take a beating and last for years. The self-bonding properties of Vortex prevents rust fills in gaps and cracks, ideal; to use in chiller rooms, loading bays, concrete surfaces etc.
				</p>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/video.js') }}"></script>
@endsection