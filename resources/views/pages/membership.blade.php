@extends('layouts.app')

@section('content')
<!-- Breadcrumb -->
<div class="page-brdc">
    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
        style="background-image: url(img/breadcrumbs/image2.png);">
        <h1 class="page-title"> MEMBERSHIP </h1>
    </div>
</div>

<!-- Section begin -->
<div class="uk-section pull-top-two whiteptn team-inner">
    <div class="uk-container uk-container-medium">
        <div class="home-posts team-section shadow-one uk-padding">
            <div class="uk-grid-small uk-child-width-expand@s" uk-grid>
                <div class="uk-container uk-container-medium">

                    <div>
                        <div uk-slider="parallax: true; parallax-start: 100%; parallax-end: 100%;">

                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
                                uk-slider="center: true">

                                <div class="uk-slider-items uk-grid uk-grid-match"
                                    uk-height-viewport="offset-top: true; offset-bottom: 30">
                                    <div class="uk-width-3-4">
                                        <div class="uk-cover-container">
                                            <img src="{{asset('img/cards/blue.png')}}" alt="" uk-cover>
                                            <div class="uk-position-center uk-panel">
                                                <h1>Blue Card</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-3-4">
                                        <div class="uk-cover-container">
                                            <img src="{{asset('img/cards/gold.png')}}" alt="" uk-cover>
                                            <div class="uk-position-center uk-panel">
                                                <h1>Gold Card</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-3-4">
                                        <div class="uk-cover-container">
                                            <img src="{{asset('img/cards/platinum.png')}}" alt="" uk-cover>
                                            <div class="uk-position-center uk-panel">
                                                <h1>Platinum Card</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href
                                    uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href
                                    uk-slidenav-next uk-slider-item="next"></a>

                            </div>

                        </div>
                    </div>

                    <div class="uk-column-1-2 uk-padding">
                        <p>
                            <!-- <img src="{{ asset('img/member.png')}}" /> -->
                        </p>

                        <p>
                            <!-- <h1 class="headings-normal"> KADI ZA WANA AZAMFC</h1> -->
                            <span class="abt-content">
                                <p>More information coming soon.</p>



                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection