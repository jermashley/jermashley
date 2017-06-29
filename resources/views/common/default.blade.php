<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JermAshley</title>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>

    <body>
        <nav class="navbar navbar-toggleable-md navbar-light p-0 m-0">
            <a class="navbar-brand hidden-lg-up" href="/"><div class="mobileLogo"></div></a>
            <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: 0;">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="container w-100 navLinks" id="navFlex">
                    <div id="navFirst" class="">
                        <ul class="list-unstyled m-0">
                            <li><a href="/portfolio">Portfolio</a></li>
                            <li><a href="/photography">Photography</a></li>
                        </ul>
                    </div>

                    <div id="navLogo" class="flex-last">
                        <a href="/"><div class="logo"></div></a>
                    </div>

                    <div id="navLast" class="">
                        <ul class="list-unstyled m-0">
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        @yield('mainContent')

        <footer class="footer">
            <div class="d-flex flex-row justify-content-center">
                <div class="d-flex flex-column">
                    <div>
                        <a href="//www.facebook.com/photo.jermashley/" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="//twitter.com/JermAshley" target="_blank"><i class="fa fa-twitter-square"></i></a>
                        <a href="//www.instagram.com/photo.jermashley/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="//www.flickr.com/photos/jermashley/" target="_blank"><i class="fa fa-flickr"></i></a>
                    </div>
                    <div>
                        <p class="copyright">Jeremiah Ashley &copy; 2017</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
        <script src="{{ asset('js/tether.min.js') }}"></script>
        <script src="{{ mix('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
        <script>
        $(document).on('click',function(){
        $('.collapse').collapse('hide');
        })
        </script>
    </body>
</html>
