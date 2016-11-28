<section class="Clients">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="Section__title Section__title--center fancy-title">Clients</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="Clients__carousel">
					@foreach( range( 1, 2 ) as $index )
					<div class="item">
						<a href="#">
							<img src="/images/rta.jpeg" 
								alt="RTA" 
								title="RTA" 
								class="img-responsive" />
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="/images/dubai-municipality.jpeg" 
								alt="Dubai Municipality" 
								title="Dubai Municipality" 
								class="img-responsive" />
						</a>
					</div>
					<div class="item">
						<a href="#">
							<img src="/images/dreamland.jpg" 
								alt="Dreamland" 
								title="Dreamland" 
								class="img-responsive" />
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>	
	</div>	
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4 class="fancy-title">Pages</h4>
				<ul>
					<li>
						<a href="/">Home</a>
					</li>
					<li>
						<a href="/about">About Us</a>
					</li>
					<li>
						<a href="/services">Services</a>
					</li>
					<li>
						<a href="/product/vortex">Products</a>
					</li>
					<li>
						<a href="/clients">Clients</a>
					</li>
					<li>
						<a href="/contact">Contact</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4 class="fancy-title">Follow Us</h4>
				<ul class="Follow__us">
					<li>
						<a href="#" class="Flex Flex--center">
							<i class="fa fa-facebook fa-2x"></i>
						</a>
					</li>
					<li>
						<a href="#" class="Flex Flex--center">
							<i class="fa fa-twitter fa-2x"></i>
						</a>
					</li>
					<li>
						<a href="#" class="Flex Flex--center">
							<i class="fa fa-instagram fa-2x"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h4 class="fancy-title">Subscribe to our Newsletter</h4>
			</div>
		</div>
	</div>
</footer>