@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Portfolio</h1>
		
		<div class="contentContainer">
			<div class="d-flex flex-row flex-wrap justify-content-center">
				<div class="cardBase dropShadow-4 translateY">
					<div class="cardHero imageContainer">
			            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pft-website/pft-min.jpg') }}" alt=""></div>
					</div>
					<div class="cardContent">
						<h4>Passion For Truth Website</h4>
						<h6>December 2014</h6>
						<div class="d-flex flex-row flex-wrap">
							<span class="tag">web design</span>
							<span class="tag">ui design</span>
						</div>
						<p>One of my first major projects in front-end design. <em>Passion for Truth</em> was in the process of building out a Video-on-Demand platform and needed to launch it alongside their updated branding. I lead the UI design and worked with <a href="https://twitter.com/medalink7" target="_blank">Eric Percifield</a> to design an intuitive user experience.</p>
					</div>
					<button><a href="/portfolio/pft-website">Read More</a></button>
				</div>

				<div class="cardBase dropShadow-4 translateY">
					<div class="cardHero imageContainer">
			            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pmu-intro/meaing-of-life-screen-min.jpg') }}" alt=""></div>
					</div>
					<div class="cardContent">
						<h4>Purple Monkey Univeristy</h4>
						<h6>October 2015</h6>
						<div class="d-flex flex-row flex-wrap">
							<span class="tag">motion graphics</span>
						</div>
						<p>Purple Monkey Univeristy is an online academy started by Josh Tolley geared for business owners and entrepreneurs. I directed the photography and set design for the courses and developed the pipeline for post-production.</p>
					</div>
					<button><a href="/portfolio/purple-monkey">Read More</a></button>
				</div>
			</div>
		</div>
    </div>

@endsection
