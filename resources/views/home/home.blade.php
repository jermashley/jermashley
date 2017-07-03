@extends('common.default')

@section('mainContent')
    @parent
    <div class="d-flex flex-column justify-content-center homeHeroContainer">
        <div class="homeHeroImage imageContainer dropShadow-1">
            <div class="d-flex flex-column justify-content-center" style="height: 100%;">
                <div class="homeHeroText d-flex flex-row justify-content-center">
                    <h1 class="dropShadow-3">designers live to solve the problems we face daily - the mundane annoyances of life - in the most beautiful, elegant way possible.</h1>
                </div>
            </div>
            <div class="imageComp gradientOverlay"></div>
            <div class="imageComp primaryBrandOverlay"></div>
            <div class="imageComp dimmer-1"></div>
            <div class="imageComp imageBase"><img src="{{ asset('images/colored-clouds.jpg') }}" alt=""></div>
        </div>
    </div>
@endsection
