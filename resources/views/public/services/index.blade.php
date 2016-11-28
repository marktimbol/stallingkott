@extends('layouts.app')

@section('subpage_header')
	<div class="Subpage__header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Services</h1>
				</div>
			</div>
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