@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Contact</h1>

        <div class="container-fluid row">
            <div class="col-lg-4 col-md-12 checker-red">
                <div class="imageComp contactImage">
                    <div class="imageComp gradientOverlay"></div>
                    <div class="imageComp primaryBrandOverlay"></div>
                    <div class="imageComp imageBase"><img src="{{ asset('images/jerm-portrait.jpg') }}" alt=""></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 checker-green">

            </div>
            <div class="col-lg-4 col-md-12 checker-blue">

            </div>
        </div>

    </div>

@endsection
