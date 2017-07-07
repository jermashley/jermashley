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
						<p>Kowloon car towards realism smart-cardboard Legba skyscraper. Dolphin narrative 3D-printed RAF city post-knife nano-gang.-space concrete courier construct corrupted hacker Tokyo range-rover woman numinous otaku sunglasses tank-traps singularity.</p>
					</div>
					<button><a href="/portfolio/pft-website">Read More</a></button>
				</div>

				<div class="cardBase dropShadow-4 translateY">
					<div class="cardHero imageContainer">
			            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pmu-intro/meaing-of-life-screen-min.jpg') }}" alt=""></div>
					</div>
					<div class="cardContent">
						<h4>Purple Monkey Univeristy Intro</h4>
						<h6>October 2015</h6>
						<div class="d-flex flex-row flex-wrap">
							<span class="tag">motion graphics</span>
						</div>
						<p>Kowloon car towards realism smart-cardboard Legba skyscraper. Dolphin narrative 3D-printed RAF city post-knife nano-gang.-space concrete courier construct corrupted hacker Tokyo range-rover woman numinous otaku sunglasses tank-traps singularity.</p>
					</div>
					<button><a href="/portfolio/pmu-intro">Read More</a></button>
				</div>
			</div>
		</div>
    </div>

@endsection
