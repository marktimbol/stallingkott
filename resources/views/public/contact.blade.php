@extends('layouts.app')

@section('subpage_header')
	<div class="Subpage__header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Contact Us</h1>
				</div>
			</div>
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
				<form method="POST" action="/">
					{{ csrf_field() }}
					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="name">Name *</label>
						<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" />
						@if( $errors->has('name') )
							<span class="help-block">{{ $errors->first('name') }}</span>
						@endif
					</div>
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						<label for="email">eMail *</label>
						<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
						@if( $errors->has('email') )
							<span class="help-block">{{ $errors->first('email') }}</span>
						@endif
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" />
					</div>
					<div class="form-group">
						<label for="message">Message</label>
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