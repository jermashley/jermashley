@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
		<h1 class="projectHeading">Passion For Truth Website</h1>
		<h6>December 2014</h6>

		<div class="contentContainer">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="projectHero dropShadow-1">
			            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pft-website/pft-min.jpg') }}" alt=""></div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12 projectDetails">
					<div>
						<h5>Company</h5>
						<p>Passion For Truth</p>
					</div>
					<div>
						<h5>Role</h5>
						<p>Front-End / UI Designer</p>
					</div>
					<div>
						<h5>Goals</h5>
						<ul class="list-unstyled">
							<li>Create a website that reflected the company's new brand.</li>
							<li>Design the user interface for a Video-on-Demand platform.</li>
						</ul>
					</div>
					<span class="tag">web design</span>
					<span class="tag">ui design</span>
				</div>
			</div>
		</div>

		<div class="contentContainer">
			<div class="row">
				<div class="col-lg-6 col-md-12 projectDetails">
					<h2>About this project</h2>
					<p>One of my first major projects in front-end design. <em>Passion for Truth</em> was in the process of building out a Video-on-Demand platform and needed to launch it alongside their updated branding. I lead the UI design and worked with <a href="https://twitter.com/medalink7" target="_blank">Eric Percifield</a> to design an intuitive user experience.</p>
					<h4>The Scope</h4>
					<p><em>Passion for Truth</em> had recently undergone a rebrand that was in the final stages of internal review when we started this project. To go reflect the new branding, management wanted to launch an updated website. This website would not only replace the previous one, but also pack new features &emdash; namely a Video-on-Demand platform.</p>
					<h4>The Timeline</h4>
					<p>Due to a modestly-sized staff the <a href="http://www.ascentadvising.com/?p=80" target="_blank">high-level prioratization of projects</a>, we initialized the design of the site on our own as a fast-tracked, side-burner project. The goal was simple, design a website that is welcoming and clear to new users yet remains useful and extensive for the current userbase.</p>
					<h4>The Execution</h4>
					<p>Our goal was two-fold. We wanted new users to feel welcome and have a clear path to navigate as they learned more about the organization. New visitors needed to be guided in such a way that they encountered targeted material that showed them vision of the organization.</p>
					<p>It was, however, equally imperative to maintain a robustness in features and content for the current userbase. Returning visitors needed to use the least amount of clicks or taps to find the content they were looking for &emdash; this through search queries or clear and simple navigation.</p>
					<p>The Video-on-Demand library was the was the gem of the platform. Users could easily find content and follow suggestions for related material in a variety of mediums.</p>
				</div>
				
				<div class="py-4 col-lg-6 col-md-12 d-flex flex-row flex-wrap justify-content-around">
					<a href="{{ asset('images/portfolio/pft-website/homepage-min.jpg') }}" data-fancybox="pft-website" data-caption="Media Player with sidebar including series videos and related content.">
						<div class="projectImages desat-animated dropShadow-2 translateY">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pft-website/homepage-min.jpg') }}" alt=""></div>
						</div>
					</a>
					<a href="{{ asset('images/portfolio/pft-website/more_to_life-min.jpg') }}" data-fancybox="pft-website">
						<div class="projectImages desat-animated dropShadow-2 translateY">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pft-website/more_to_life-min.jpg') }}" alt=""></div>
						</div>
					</a>
					<a href="{{ asset('images/portfolio/pft-website/search_page-min.jpg') }}" data-fancybox="pft-website">
						<div class="projectImages desat-animated dropShadow-2 translateY">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pft-website/search_page-min.jpg') }}" alt=""></div>
						</div>
					</a>
					<a href="{{ asset('images/portfolio/pft-website/media_center_player-min.jpg') }}" data-fancybox="pft-website">
						<div class="projectImages desat-animated dropShadow-2 translateY">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pft-website/media_center_player-min.jpg') }}" alt=""></div>
						</div>
					</a>
					<a href="{{ asset('images/portfolio/pft-website/user_account-min.jpg') }}" data-fancybox="pft-website">
						<div class="projectImages desat-animated dropShadow-2 translateY">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pft-website/user_account-min.jpg') }}" alt=""></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection