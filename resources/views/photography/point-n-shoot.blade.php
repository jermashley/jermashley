@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Photography</h1>

        <div class="galleryContainer">
            <div class="galleryLinks">
                <ul class="list-unstyled">
                    <li><h5><a href="/photography/weddings">Wedding</a></h5></li>
                    <li><h5><a href="/photography/portraits">Portraits</a></h5></li>
                    <li class="current"><h5>Point-n-Shoot</h5></li>
                </ul>
            </div>

            <div class="gallerySlider">
                <div class="photoStack dropShadow-4 translateY">
                    <a href="{{ asset('images/galleries/point-n-shoot/IMG_1677-min.jpg') }}" data-fancybox="point-n-shoot"><div class="photoCard photoCardGallery"><img src="{{ asset('images/galleries/point-n-shoot/IMG_1677-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack dropShadow-4 translateY">
                    <a href="{{ asset('images/galleries/point-n-shoot/IMG_1005-min.jpg') }}" data-fancybox="point-n-shoot"><div class="photoCard photoCardGallery"><img src="{{ asset('images/galleries/point-n-shoot/IMG_1005-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack dropShadow-4 translateY">
                    <a href="{{ asset('images/galleries/point-n-shoot/692A5935-min.jpg') }}" data-fancybox="point-n-shoot"><div class="photoCard photoCardGallery"><img src="{{ asset('images/galleries/point-n-shoot/692A5935-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack dropShadow-4 translateY">
                    <a href="{{ asset('images/galleries/point-n-shoot/692A1718-HDR-Pano-min.jpg') }}" data-fancybox="point-n-shoot"><div class="photoCard photoCardGallery"><img src="{{ asset('images/galleries/point-n-shoot/692A1718-HDR-Pano-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack dropShadow-4 translateY">
                    <a href="{{ asset('images/galleries/point-n-shoot/692A4457-min.jpg') }}" data-fancybox="point-n-shoot"><div class="photoCard photoCardGallery"><img src="{{ asset('images/galleries/point-n-shoot/692A4457-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack dropShadow-4 translateY">
                    <a href="{{ asset('images/galleries/point-n-shoot/692A6868-min.jpg') }}" data-fancybox="point-n-shoot"><div class="photoCard photoCardGallery"><img src="{{ asset('images/galleries/point-n-shoot/692A6868-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack dropShadow-4 translateY">
                    <a href="{{ asset('images/galleries/point-n-shoot/692A3849-HDR_large-min.jpg') }}" data-fancybox="point-n-shoot"><div class="photoCard photoCardGallery"><img src="{{ asset('images/galleries/point-n-shoot/692A3849-HDR_large-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack dropShadow-4 translateY">
                    <a href="{{ asset('images/galleries/point-n-shoot/692A4564-min.jpg') }}" data-fancybox="point-n-shoot"><div class="photoCard photoCardGallery"><img src="{{ asset('images/galleries/point-n-shoot/692A4564-min.jpg') }}" alt=""></div></a>
                </div>
            </div>

        </div>
    </div>


@endsection
