@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Contact</h1>

        <div class="contactContainer row p-0">

            <div class="col-lg-6 col-md-12">
                <div class="contactImage dropShadow-1">
                    <div class="imageComp gradientOverlay"></div>
                    <div class="imageComp primaryBrandOverlay"></div>
                    <div class="imageComp imageBase"><img src="{{ asset('images/jerm-portrait.jpg') }}" alt=""></div>
                </div>
                <div class="about">
                    <p>Hi there, I'm Jeremiah Ashley, a digital designer and photographer currently working at <a href="//prologuetechnology.com/">Prologue Technology</a>, a logistics software company, and doing freelance work.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 contactForm">
                <h4>Send me a Message</h4>
                <div class="contactFormCard dropShadow-1">
                    <form class=""  method="post" action="{{ route('email') }}">
                        {{ csrf_field() }}
                        <input name="name" type="text" class="" id="name" aria-describedby="name" placeholder="Your Name">
                        <input name="email" type="email" class="" id="email" aria-describedby="email" placeholder="Email Address">
                        <textarea name="message" type="text" id="message" aria-describedby="message" rows="5" placeholder="Type Your Message Here"></textarea>
                        <button type="submit" role="button">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
