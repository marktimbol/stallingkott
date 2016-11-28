@extends('layouts.app')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
@endsection

@section('subpage_header')
	<div class="homepage-hero-module is-centered h-40vh">
	    <div class="video-container">
	        <div class="filter"></div>
	        <video autoplay loop class="fillWidth">
	            <source src="/videos/about-video.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
	        </video>
	        <div class="poster hidden">
	            <img src="PATH_TO_JPEG" alt="" title="" />
	        </div>
	    </div>

		<div class="Video__content is-centered Flex--column">	
			<h1 class="Video__title">
				About Us
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
				<h3 class="fancy-title">History</h3>
				<p>
					Incorporated in the emirate of Sharjah, U.A.E in 1993, Being the sole agents of the mother company the pioneers in the field of porcelain re-glazing and refinishing. Stalling Kott Koating has successfully completed 23 years of service in this field, moreover we are the first company to be provided with government approval for the porcelain glazes.
				</p>
				<p>
					Our technicians gained international experiences by the hands of the mother company’s engineers and through our assorted works inside the country at hotels, residential complexes, hospitals, factories & others. Of course we are the superior in our performances and got the satisfaction on our clients.					
				</p>

				<h3 class="fancy-title">Mission</h3>

				<blockquote>
					To be forerunner is the field of refinishing. This is achieved by a team of dedicated employees who focus on and anticipate our customer’s needs and who are committed to and take pride in delivering high quality of service. The major step towards success rests upon products addressing to the highest industrial standards.
				</blockquote>

				<p>
					Stalling Kott Koating from the time established have presented itself with the solutions for the problems faced by its clients from residential, commercial and hospitality industry .An array of major star hotels of U.A.E form our prestigious client base. At Stalling Kott Koating we truly believe success lays not only in carrying out projects but also in the service rendered after the works.
				</p>

				<p>
					Most of the refinishers prefer usage of Acid etching materials in the form of liquid, creams and pastes, The above said products have been determined to be extremely hazardous to the users health and the environment. Our materials are the only glazes in the world that have been tested by the International surveillance agencies through their toxicological laboratory(contox). The glazes are found to be both safe and non toxic and do not contain any carcinogens that can cause cancer, so its ideally suited for even for food preparation areas.
				</p>

				<h3 class="fancy-title">Custom Overlay Designs</h3>
				<p>
					For that elegant touch to a bathroom or kitchen, the Kott overlay is the perfect solution. To purchase custom designed tiles & have them installed can cost hundreds & thousands of dirhams & take days or week to complete. Stalling Kott Koatings has the answer to this high cost & lengthy installation, with the use of Kott Overlay System (KOS). Specially designed overlay patterns applied directly to either the original surface or a Stalling Kott Koated surface, to give the special custom look that could cost thousand of dirham.
				</p>

				<h3 class="fancy-title">About Our Glazes</h3>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Kott Koatings materials</h3>
							</div>
							<div class="panel-body">
								<p>
									Kott Koatings materials developed a process of porcelain re-glazing which can actually re-store a warm bathroom & kitchen fixtures such as bathtubs, sinks, ceramic wall tiles, fiberglass services & counter tubs without removing the items. We do all the work on locations without disturb the walls, floors or plumbing fixtures surrounding the same. It means we can give a new life by repairing and resurfacing it with our exclusive glazes which is specially developed for the porcelain-refinishing field. 
								</p>
								<p>
									We are ready to serve this service without any kind of problems & for less expenses as follows:
								</p>
								<ul>
									<li>You can save more than 50% of actual cost you have to pay to other maintenance companies.
									</li>
									<li>You may save more than 80% of time.</li>
									<li>To apply safetytrade non slip on bathtub after painting for more safety use. Also could be applied for the floors & staircases for more safety.</li>
								</ul>								
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Vortex Sprayed on Liner</h3>
							</div>
							<div class="panel-body">
								<p>
									It allows applying a super industrial coating up to 1⁄4” thick to any hard surface such as buses, pickup truck bed and having the coating dry in a matter of seconds. Its able to withstand over 50,000 PSI of impact, the Vortex material is both industrially strong, yet easy to apply using the patented Portable Spray System. Vortex has the only portable spray system that allows complete professional lining or coating of virtually all hard surfaces for a permanent waterproof coating that will take a beating and last for years. The self- bonding properties of Vortex prevents rust fills in gaps and cracks, ideal; to use in chiller rooms, loading bays, concrete surfaces etc.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Granitex</h3>
							</div>
							<div class="panel-body">
								<p>
									Granitex sets the standard in surface coatings with a patented blend of urethane and aliphatic urethanes to create a high impact protective surface coating. The Granitex baked-on flooring system are highly UV stable, incredibly stain resistant, and extremely impact resistance. The patented Granitex glazes are heated within the Granitex flooring machine so that when applied to a floor, the glazes provide a penetrating, long lasting, durable surface tough enough for warehouse floor applications as well as residential garage floor resurfacing.
								</p>
							</div>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Eco-Meric System</h3>
							</div>
							<div class="panel-body">
								<p>
									The Eco-Meric System is comprised of two coats of water sealing, Elastoflex material. This unique blend of resins allows it to be both environmentally safe yet industrially strong when it comes to sealing off roofs for years of leak free maintenance.
									The Top Coat is also a water sealing membrane that is also UV resistant and reflects up to 85% of the harmful sunlight. The final result can reduce cooling coast by up to 31%!
								</p>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Slider & water slide repair, maintenance, and restoration</h3>
							</div>
							<div class="panel-body">
								<p>
									Specializing in developing and manufacturing it’s own proprietary brand, Slide material, of water slide maintenance coatings, cleaners, waxes, polishes and glazes. Our Slide material water slide products have been specifically formulated to restore the “like-new” appearance to dull color faded water slides and aquatic play features. All other water slide restoration companies use off- the-shelf marine gel coat or epoxy paint; both of which have not been formulated to withstand long periods of chlorine-water immersion and surface abrasion from riders. All of our water slide products are environmentally friendly, worker safe, and can be applied by your most trusted local painting contractor, internal maintenance staff, seasonal employees.
								</p>
							</div>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Slider & water Slide Repair, Renovation and Refurbishment Services</h3>
							</div>
							<div class="panel-body">
								<p>
									In addition to water slide re-coating, we further offer a variety of water slide repair and restoration services to ensure your water slides operate safely and efficiently throughout the entire season.
								</p>
								<ul>
									<li>Joint Re-caulking</li>
									<li>Permanent Joint Sealing</li>
									<li>Interior De-scaling, Polishing & Waxing</li>
									<li>Exterior Cleaning & Glazing</li>
									<li>Slide Tower Painting</li>
									<li>Slide Tower Stair Tread Cleaning</li>
									<li>Non-slip Stair Strips</li>
								</ul>
							</div>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Steam & Sauna rooms Coating</h3>
							</div>
							<div class="panel-body">
								<p>
									Using a steam room or a sauna is a beneficial way to relax the muscles, revitalize the skin, improve blood circulation, and ease mental stress. However, due to the extreme heat produced by these facilities, and due to the fact that most spas and saunas are public facilities we specialized a coat which withstands the heat and moisture present inside these facilities.
								</p>
							</div>
						</div>
					</div>	

					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Environmental Clean</h3>
							</div>
							<div class="panel-body">
								<p>
									Our materials are special environmental materials, and give a shinny smooth surface. It does not contain any poison, acid, toxic or materials that disturb the environment. Our materials are specially made to react with soap, oil, grease, etc. and remove their impurities. Our materials can remove and clean rusty surfaces.
								</p>
								<p>
									Our materials protect surfaces from bacteria, fungus and other harmful dirt. Its used to clean the bathrooms, kitchens, windows, floors, walls, glass and kitchen tools.
								</p>
							</div>
						</div>
					</div>	
				</div>

				<h3 class="fancy-title">Advantages of Stalling Kott Koating Materials</h3>
				<ul class="list-group">
					<li class="list-group-item">
						Non-Urethane based materials but environment friendly
					</li>
					<li class="list-group-item">
						It is not a paint but it is porcelain, well treated to refinish
						rough surfaces and crack within 12 hours.
					</li>
					<li class="list-group-item">
						It gives permanent shine and resistant to heavy works.
					</li>
				</ul>

				<h3 class="fancy-title">What we do?</h3>
				<ul class="list-group">
					<li class="list-group-item">
						Repairs of cracks, chippings, broken parts, rust removing, smoothing rough areas.
					</li>
					<li class="list-group-item">
						Good finish is obtained by grouting with heavy duty materials to give a smooth shiny surface.
					</li>
					<li class="list-group-item">
						An application of the new safety trade to bathtubs. State remolding of bathtub & tile by use of Stalling Kott Koating materials.
					</li>
					<li class="list-group-item">
						All the works shall be completed within the time of 24 hours.
					</li>
				</ul>				
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/video.js') }}"></script>
@endsection