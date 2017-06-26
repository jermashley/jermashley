@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Photography</h1>

        <div class="galleryContainer">
            <div class="galleryLinks">
                <ul class="list-unstyled">
                    <li class="current"><h5><a href="/photography/weddings">Wedding</a></h5></li>
                    <li><h5><a href="/photography/portraits">Portraits</a></h5></li>
                    <li><h5><a href="/photography/point-n-shoot">Point-n-Shoot</a></h5></li>
                </ul>
            </div>

            <div class="gallerySlider">
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/1-hughes_140921_173335_full-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/1-hughes_140921_173335_full-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/2-692A7991-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/2-692A7991-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/3-692A6481-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/3-692A6481-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/4-DSC_0159_2-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/4-DSC_0159_2-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/5-692A7913-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/5-692A7913-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/6-692A2105-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/6-692A2105-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/7-692A5568-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/7-692A5568-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/8-692A8016-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/8-692A8016-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/9-692A7145-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/9-692A7145-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/10-692A6435-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/10-692A6435-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="{{ asset('images/galleries/weddings/11-692A0030-min.jpg') }}" data-fancybox="weddings"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/weddings/11-692A0030-min.jpg') }}" alt=""></div></a>
                </div>
            </div>

        </div>
    </div>


@endsection
