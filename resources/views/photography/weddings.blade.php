@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Photography</h1>

        <div class="galleryContainer">
            <div class="galleryLinks">
                <ul class="list-unstyled">
                    <li class="current"><h5><a href="/photography/weddings">Wedding</a></h5></li>
                    <li><h5><a href="/photography/family">Family</a></h5></li>
                    <li><h5><a href="/photography/portraits">Portraits</a></h5></li>
                </ul>
            </div>

            <div class="gallerySlider">
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div></a>
                </div>
                <div class="photoStack">
                    <a href="#"><div class="photoCard photoCardGallery dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div></a>
                </div>
            </div>

        </div>
    </div>


@endsection
