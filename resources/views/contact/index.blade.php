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
                    <h4>Quick About Me</h4>
                    <p>Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless amplifiers, and wireless headset telephone.</p>

                    <p>You can get a wireless headset that is completely without wires or one that requires a belt pack. The ones that are completely wire free are made up of a headset worn on your head that talks to a base unit that is attached to your telephone with no wire connections between your headset and your phone. These wireless headset products represent the latest in sophisticated technology for communication or listening. Examples of wireless headset models are the Plantronics CS50, Plantronics CS55, the Plantronics 510S and the GN Netcom 9120.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 contactForm">
                <h4>Send me a Message</h4>
                <div class="contactFormCard dropShadow-1">
                    <form class="" action="index.html" method="post">
                        <input name="name" type="text" class="" id="name" aria-describedby="name" placeholder="Your Name">
                        <input name="email" type="email" class="" id="email" aria-describedby="email" placeholder="Email Address">
                        <textarea name="message" type="text" id="message" aria-describedby="message" rows="5" placeholder="Type Your Message Here"></textarea>
                        <button>Submit</button>
                    </form>
                </div>
                <div class="formFooter">
                    <h5>You can also reach me by e-mail at <a href="mailto:jerm@jermashley.me">jerm@jermashley.me</a>, or by using the form.</h5>
                </div>
            </div>
        </div>

    </div>

@endsection
