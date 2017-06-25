@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Photography</h1>

        <div class="galleryContainer">
            <div class="galleryLinks">
                <ul class="list-unstyled">
                    <li><h5><a href="/photography/weddings">Wedding</a></h5></li>
                    <li class="current"><h5>Portraits</h5></li>
                    <li><h5><a href="/photography/point-n-shoot">Point-n-Shoot</a></h5></li>
                </ul>
            </div>

            <div class="gallerySlider">
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/692A7595-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/692A4131-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/692A7631-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/692A0067-HDR_watermark-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/692A3514-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/hughes_140921_150518_full-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/692A8201-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/692A9982-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/692A4959-2-min.jpg') }}" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="{{ asset('images/galleries/portraits/692A8136-min.jpg') }}" alt=""></div></a>
                </div>
            </div>

        </div>
    </div>


@endsection
