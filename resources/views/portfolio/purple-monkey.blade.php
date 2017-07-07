@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
		<h1 class="projectHeading">Purple Monkey Univeristy Intro</h1>
		<h6>October 2015</h6>

		<div class="contentContainer">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="projectHero dropShadow-1">
			            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pmu-intro/meaing-of-life-screen-min.jpg') }}" alt=""></div>
					</div>
				</div>

				<div class="col-lg-6 col-md-12 projectDetails">
					<div>
						<h5>Client</h5>
						<p>Josh Tolley | Purple Monkey University</p>
					</div>
					<div>
						<h5>Role</h5>
						<p>Director of Photography / Post-Production</p>
					</div>
					{{--  <div>
						<h5>Goals</h5>
						<ul class="list-unstyled">
							<li>Create a website that reflected the company's new brand.</li>
							<li>Design a Video-on-Demand platform.</li>
						</ul>
					</div>  --}}
					<span class="tag">motion graphics</span>
				</div>
			</div>
		</div>

		<div class="contentContainer">
			<div class="row">
				<div class="col-lg-6 col-md-12 projectDetails">
					<h2>About this project</h2>
					<p><a href="https://www.purplemonkeyuniversity.com/" target="_blank">Purple Monkey Univeristy</a> is an online academy started by <a href="http://www.joshtolley.com/" target="_blank">Josh Tolley</a> geared for business owners and entrepreneurs. I directed the photography and set design for the courses and developed the pipeline for post-production.</p>
				</div>
				
				<div class="py-4 col-lg-6 col-md-12 d-flex flex-row flex-wrap justify-content-around">
					<a href="https://youtu.be/iJO2V3H39oc" data-fancybox="purple-monkey">
						<div class="projectImages desat-animated dropShadow-2 translateY">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('images/portfolio/pmu-intro/meaing-of-life-screen-min.jpg') }}" alt=""></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection