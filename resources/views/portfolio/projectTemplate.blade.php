@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
		<h1 class="projectHeading">Purple Monkey Univeristy Intro</h1>
		<h6>December 11, 2017</h6>

		<div class="contentContainer">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="projectHero dropShadow-1">
			            <div class="imageComp gradientOverlay"></div>
			            <div class="imageComp primaryBrandOverlay"></div>
			            <div class="imageComp dimmer-1"></div>
			            <div class="imageComp imageBase"><img src="{{ asset('//unsplash.it/1024/?random') }}" alt=""></div>
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
							<li>Design a Video-on-Demand platform.</li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>

		<div class="contentContainer">
			<div class="row">
				<div class="col-lg-6 col-md-12 projectDetails">
					<h2>About this project</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum doloribus fuga ullam, non placeat dolore blanditiis ipsa aut reprehenderit fugiat tempore omnis, possimus minus, veniam corrupti eveniet, tempora recusandae voluptas!</p>
					<h4>Stage 1</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis non vero magnam fugit animi nobis molestiae laborum et quidem ducimus ratione officiis dolore explicabo sapiente, voluptatibus repellat. Commodi quo, dolor.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo dolores ipsum corporis, enim adipisci provident obcaecati eos, nostrum alias blanditiis accusamus et ab, doloremque ipsam deserunt amet labore numquam tempore?</p>
					<h4>Stage 2</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae eveniet obcaecati totam quam dolores, voluptas ipsam numquam natus repudiandae architecto laborum tempora, amet debitis impedit aspernatur quaerat consequuntur quae nihil!</p>
				</div>
				
				<div class="py-4 col-lg-6 col-md-12 d-flex flex-row flex-wrap justify-content-around">
					<a href="">
						<div class="projectImages desat-animated dropShadow-2">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('//unsplash.it/1020/?random') }}" alt=""></div>
						</div>
					</a>
					<a href="">
						<div class="projectImages desat-animated dropShadow-2">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('//unsplash.it/1020/?random') }}" alt=""></div>
						</div>
					</a>
					<a href="">
						<div class="projectImages desat-animated dropShadow-2">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('//unsplash.it/1020/?random') }}" alt=""></div>
						</div>
					</a>
					<a href="">
						<div class="projectImages desat-animated dropShadow-2">
							<div class="expandFS"><i class="fa fa-expand text-white"></i></div>
				            <div class="imageComp imageBase"><img src="{{ asset('//unsplash.it/1020/?random') }}" alt=""></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection