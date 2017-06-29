@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Portfolio</h1>
		
		<div class="contentContainer">
			<div class="d-flex flex-row flex-wrap justify-content-around">
				<div class="cardBase dropShadow-2">
					<div class="cardHero imageContainer">
			            <div class="imageComp gradientOverlay"></div>
			            <div class="imageComp primaryBrandOverlay"></div>
			            <div class="imageComp lighten-1"></div>
			            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pft-website/pft-min.jpg') }}" alt=""></div>
					</div>
					<div class="cardContent">
						<h4>Passion For Truth Website</h4>
						<h6>December 2014</h6>
						<p>Kowloon car towards realism smart-cardboard Legba skyscraper. Dolphin narrative 3D-printed RAF city post-knife nano-gang.-space concrete courier construct corrupted hacker Tokyo range-rover woman numinous otaku sunglasses tank-traps singularity.</p>
					</div>
					<button><a href="/portfolio/pft-website">Read More</a></button>
				</div>

				<div class="cardBase dropShadow-2">
					<div class="cardHero imageContainer">
			            <div class="imageComp gradientOverlay"></div>
			            <div class="imageComp primaryBrandOverlay"></div>
			            <div class="imageComp dimmer-1"></div>
			            <div class="imageComp imageBase"><img src="{{ asset('//unsplash.it/1024/?random') }}" alt=""></div>
					</div>
					<div class="cardContent">
						<h4>Project Title</h4>
						<h6>December 11, 2017</h6>
						<p>Kowloon car towards realism smart-cardboard Legba skyscraper. Dolphin narrative 3D-printed RAF city post-knife nano-gang.-space concrete courier construct corrupted hacker Tokyo range-rover woman numinous otaku sunglasses tank-traps singularity.</p>
					</div>
					<button><a href="">Read More</a></button>
				</div>

				<div class="cardBase dropShadow-2">
					<div class="cardHero imageContainer">
			            <div class="imageComp gradientOverlay"></div>
			            <div class="imageComp primaryBrandOverlay"></div>
			            <div class="imageComp dimmer-1"></div>
			            <div class="imageComp imageBase"><img src="{{ asset('//unsplash.it/1024/?random') }}" alt=""></div>
					</div>
					<div class="cardContent">
						<h4>Project Title</h4>
						<h6>December 11, 2017</h6>
						<p>Kowloon car towards realism smart-cardboard Legba skyscraper. Dolphin narrative 3D-printed RAF city post-knife nano-gang.-space concrete courier construct corrupted hacker Tokyo range-rover woman numinous otaku sunglasses tank-traps singularity.</p>
					</div>
					<button><a href="">Read More</a></button>
				</div>

				<div class="cardBase dropShadow-2">
					<div class="cardHero imageContainer">
			            <div class="imageComp gradientOverlay"></div>
			            <div class="imageComp primaryBrandOverlay"></div>
			            <div class="imageComp dimmer-1"></div>
			            <div class="imageComp imageBase"><img src="{{ asset('//unsplash.it/1024/?random') }}" alt=""></div>
					</div>
					<div class="cardContent">
						<h4>Project Title</h4>
						<h6>December 11, 2017</h6>
						<p>Kowloon car towards realism smart-cardboard Legba skyscraper. Dolphin narrative 3D-printed RAF city post-knife nano-gang.-space concrete courier construct corrupted hacker Tokyo range-rover woman numinous otaku sunglasses tank-traps singularity.</p>
					</div>
					<button><a href="">Read More</a></button>
				</div>
			</div>
		</div>

    </div>

@endsection
