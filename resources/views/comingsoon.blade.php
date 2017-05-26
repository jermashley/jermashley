<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>JermAshley | Coming Soon</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
         <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-76972352-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
    <body>
        <div class="fillViewport">
            <div class="fillContainerComp">
                <div class="fillContainerComp fillContainerColorDark"></div>
                <div class="fillContainerComp fillContainerTexture"></div>
                <div class="fillContainerComp fillContainerImage">
                    <img src="{{ asset('images/downSplashBG.jpg')}}" alt="">
                </div>
            </div>

            <div class="fillContainerComp d-flex flex-column justify-content-center">
                <div class="d-flex flex-row justify-content-around flex-wrap">
                    <div class="col-lg-6 col-md-12 text-center">
                        <img src="{{ asset('images/jermashley_logo.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center">
                        <h1 class="display-3 text-center text-uppercase text-white">Coming Soon!</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center stickBottom py-4 mb-4">
            <a href="https://www.facebook.com/photo.jermashley/" target="_blank"><i class="fa fa-facebook-official text-white mx-4" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/photo.jermashley/" target="_blank"><i class="fa fa-instagram text-white mx-4" aria-hidden="true"></i></a>
            <a href="https://www.flickr.com/photos/jermashley/" target="_blank"><i class="fa fa-flickr text-white mx-4" aria-hidden="true"></i></a>
        </div>


        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

        </script>
    </body>
</html>
