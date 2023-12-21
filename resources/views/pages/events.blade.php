@extends('layouts.app')

@section('content')
<!-- Breadcrumb -->
<div class="page-brdc">
    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
        style="background-image: url(img/breadcrumbs/image2.png);">
        <h1 class="page-title"> EVENTS </h1>
    </div>
</div>

<!-- Section begin -->
<div class="uk-section pull-top-two whiteptn team-inner">
    <div class="uk-container uk-container-medium">
        <div class="home-posts team-section shadow-one uk-padding">
            <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center" uk-grid
                uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: false">
                <div class="uk-padding">
                    <!-- Achievement -->
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <!-- <img src="{{ asset('img/latest/afc1.jpg')}}" alt="" uk-cover>
                            <canvas width="600" height="400"></canvas> -->
                            <iframe loading=“lazy” width="100%" height="360"
                                src="https://www.youtube.com/embed/8QO2fQBwVqM" title="LIVE:  AZAM FC FESTIVAL 2020"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">AZAM FESTIVAL - 2020</h3>
                                <p>Listen to the Vice-chairman's (Mr. Omary Kuwe) interview prior to the event</p>
                                <p><audio controls>
                                        <source src="{{asset('audio/kuwe.mp3')}}" type="audio/mp3" />
                                    </audio></p>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement -->
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <!-- <img src="{{ asset('img/latest/afc1.jpg')}}" alt="" uk-cover>
                            <canvas width="600" height="400"></canvas> -->
                            <iframe loading=“lazy” width="100%" height="360"
                                src="https://www.youtube.com/embed/7NfG_HpYMyQ"
                                title="LIVE -  AZAM FC INAZINDUA NEMBO MPYA - AZAM TV 14/08/2021" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">SIKU YA MTOTO WA AZAM (AZAM CHILD DAY) | 2020</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement -->
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <!-- <img src="{{ asset('img/latest/afc1.jpg')}}" alt="" uk-cover>
                            <canvas width="600" height="400"></canvas> -->
                            <iframe loading=“lazy” width="100%" height="360"
                                src="https://www.youtube.com/embed/o381W8-_NJI"
                                title="LIVE -  AZAM FC INAZINDUA NEMBO MPYA - AZAM TV 14/08/2021" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">SIKU YA MTOTO WA AZAM (AZAM CHILD DAY)| 2021</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement -->
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <!-- <img src="{{ asset('img/latest/afc1.jpg')}}" alt="" uk-cover>
                            <canvas width="600" height="400"></canvas> -->
                            <iframe loading=“lazy” width="100%" height="360"
                                src="https://www.youtube.com/embed/oQf10GlcVBk"
                                title="LIVE -  AZAM FC INAZINDUA NEMBO MPYA - AZAM TV 14/08/2021" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">NEW AZAM FC LOGO LAUNCHING | Aug 14, 2021</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement -->
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <!-- <img src="{{ asset('img/latest/afc1.jpg')}}" alt="" uk-cover>
                            <canvas width="600" height="400"></canvas> -->
                            <iframe loading=“lazy” width="100%" height="360"
                                src="https://www.youtube.com/embed/k9SqC3fv-fs"
                                title="LIVE -  AZAM FC INAZINDUA NEMBO MPYA - AZAM TV 14/08/2021" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">AZAMKA | 2022</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement -->
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <!-- <img src="{{ asset('img/latest/afc1.jpg')}}" alt="" uk-cover>
                            <canvas width="600" height="400"></canvas> -->
                            <iframe loading=“lazy” width="100%" height="360"
                                src="https://www.youtube.com/embed/J05ZZRV_8kE"
                                title="AZAMKA 2022 | Tazama utambulisho wa wachezaji uliofanywa na Azam FC"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">LED PERIMETER BOARDS LAUNCHING - 2023</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection