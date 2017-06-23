@extends('common.default')

@section('mainContent')
    @parent
    <div class="pageContent">
        <h1 class="pageHeading">Photography</h1>

        <div class="d-flex flex-row justify-content-around flex-wrap">
            <div class="d-flex flex-column">
                <div class="photoStack" id="weddings">
                    <div class="photoCard photoCard-1 dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div>
                    <div class="photoCard photoCard-2-fog"></div>
                    <div class="photoCard photoCard-2 dropShadow-1"><img src="https://unsplash.it/1020/?random" alt=""></div>
                    <div class="photoCard photoCard-3-fog"></div>
                    <div class="photoCard photoCard-3 dropShadow-1"><img src="https://unsplash.it/1030/?random" alt=""></div>
                </div>
                <div class="albumTitle">
                    <h4>Wedding</h4>
                </div>
            </div>

            <div class="d-flex flex-column">
                <div class="photoStack" id="family">
                    <div class="photoCard photoCard-1 dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div>
                    <div class="photoCard photoCard-2-fog"></div>
                    <div class="photoCard photoCard-2 dropShadow-1"><img src="https://unsplash.it/1020/?random" alt=""></div>
                    <div class="photoCard photoCard-3-fog"></div>
                    <div class="photoCard photoCard-3 dropShadow-1"><img src="https://unsplash.it/1030/?random" alt=""></div>
                </div>
                <div class="albumTitle">
                    <h4>Family</h4>
                </div>
            </div>

            <div class="d-flex flex-column">
                <div class="photoStack" id="portraits">
                    <div class="photoCard photoCard-1 dropShadow-1"><img src="https://unsplash.it/1010/?random" alt=""></div>
                    <div class="photoCard photoCard-2-fog"></div>
                    <div class="photoCard photoCard-2 dropShadow-1"><img src="https://unsplash.it/1020/?random" alt=""></div>
                    <div class="photoCard photoCard-3-fog"></div>
                    <div class="photoCard photoCard-3 dropShadow-1"><img src="https://unsplash.it/1030/?random" alt=""></div>
                </div>
                <div class="albumTitle">
                    <h4>Portraits</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
