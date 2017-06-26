@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Photography</h1>

        <div class="d-flex flex-row justify-content-around flex-wrap">
            <a href="/photography/weddings">
                <div class="d-flex flex-column">
                    <div class="photoStack" id="weddings">
                        <div class="photoCard photoCard-1"><img src="{{ asset('images/galleries/weddings/hughes_140921_173335_full-min.jpg') }}" alt=""></div>
                        {{-- <div class="photoCard photoCard-2-fog"></div>
                        <div class="photoCard photoCard-2"><img src="{{ asset('images/galleries/weddings/692A7991-min.jpg') }}" alt=""></div>
                        <div class="photoCard photoCard-3-fog"></div>
                        <div class="photoCard photoCard-3"><img src="{{ asset('images/galleries/weddings/692A6481-min.jpg') }}" alt=""></div> --}}
                    </div>
                    <div class="imageTitle">
                        <h4>Wedding</h4>
                    </div>
                </div>
            </a>

            <a href="/photography/portraits">
                <div class="d-flex flex-column">
                    <div class="photoStack" id="portraits">
                        <div class="photoCard photoCard-1"><img src="{{ asset('images/galleries/portraits/692A7595-min.jpg') }}" alt=""></div>
                        {{-- <div class="photoCard photoCard-2-fog"></div>
                        <div class="photoCard photoCard-2"><img src="{{ asset('images/galleries/portraits/692A0067-HDR_watermark-min.jpg') }}" alt=""></div>
                        <div class="photoCard photoCard-3-fog"></div>
                        <div class="photoCard photoCard-3"><img src="{{ asset('images/galleries/portraits/hughes_140921_150518_full-min.jpg') }}" alt=""></div> --}}
                    </div>
                    <div class="imageTitle">
                        <h4>Portraits</h4>
                    </div>
                </div>
            </a>

            <a href="/photography/point-n-shoot">
                <div class="d-flex flex-column">
                    <div class="photoStack" id="point-n-shoot">
                        <div class="photoCard photoCard-1"><img src="{{ asset('images/galleries/point-n-shoot/IMG_1677-min.jpg') }}" alt=""></div>
                        {{-- <div class="photoCard photoCard-2-fog"></div>
                        <div class="photoCard photoCard-2"><img src="{{ asset('images/galleries/point-n-shoot/692A5935-min.jpg') }}" alt=""></div>
                        <div class="photoCard photoCard-3-fog"></div>
                        <div class="photoCard photoCard-3"><img src="{{ asset('images/galleries/point-n-shoot/692A4457-min.jpg') }}" alt=""></div> --}}
                    </div>
                    <div class="imageTitle">
                        <h4>Point-n-Shoot</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
