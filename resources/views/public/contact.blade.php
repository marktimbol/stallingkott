@extends('layouts.app')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
@endsection

@section('subpage_header')
	<div class="homepage-hero-module is-centered h-40vh">
	    <div class="video-container">
	        <div class="filter"></div>
	        <video autoplay loop class="fillWidth">
	            <source src="/videos/contact-us.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
	        </video>
	        <div class="poster hidden">
	            <img src="PATH_TO_JPEG" alt="" title="" />
	        </div>
	    </div>

		<div class="Video__content is-centered Flex--column">	
			<h1 class="Video__title">
				Contact Us
			</h1>		
		</div>		    
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 class="Section__title fancy-title">Send us a message</h3>
				<address>
					<p class="lead">
						PO BOX: 20 Sharjah<br />
						Tel: +971 6 333 33 33<br />
						Fax: +971 6 222 22 22<br />
						Mobile Number: +971 50 444 44 44<br /><br />

						Email: <a href="mailto:stalling.kottkoatings@gmail.com">stalling.kottkoatings@gmail.com</a>
					</p>
				</address>
				<form method="POST" action="{{ route('inquiries.store') }}">
					{{ csrf_field() }}
					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="name" class="control-label">Name *</label>
						<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" />
						@if( $errors->has('name') )
							<span class="help-block">{{ $errors->first('name') }}</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						<label for="email" class="control-label">eMail *</label>
						<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
						@if( $errors->has('email') )
							<span class="help-block">{{ $errors->first('email') }}</span>
						@endif
					</div>
					<div class="form-group">
						<label for="phone" class="control-label">Phone</label>
						<input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" />
					</div>
					<div class="form-group">
						<label for="message" class="control-label">Message</label>
						<textarea name="message" id="message" class="form-control" rows="5">
							{{ old('message') }}
						</textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-lg btn-primary">Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<address>
					<h3 class="fancy-title">Stalling Kott Koatings</h3>
					Industrial Area 18, Sharjah, UAE<br />
					T +971 6 532 1444<br />
					F +971 6 532 3388<br />
					<a href="mailto:stalling@emirates.net.ae">stalling@emirates.net.ae</a><br />
				</address>

				<address>
					<h3 class="fancy-title">General Manager</h3>
					Ahmed Emara<br />
					<a href="mailto:ae.emara@outlook.com">ae.emara@outlook.com</a><br />
					M +971 52 876 0777
				</address>		

				<address>
					<h3 class="fancy-title">Sales Executive</h3>
					Akoh Gideon Anyi<br />
					<a href="mailto:stalling@emirates.net.ae">stalling@emirates.net.ae</a><br />
					M +971 56 700 9559
				</address>		

				<address>
					<h3 class="fancy-title">Sales Executive</h3>
					Jose Joseph<br />
					<a href="mailto:stalling@emirates.net.ae">stalling@emirates.net.ae</a><br />
					M +971 50 483 0220
				</address>						
			</div>			
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/video.js') }}"></script>
@endsection