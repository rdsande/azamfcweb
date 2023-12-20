@extends('layouts.app')

@section('content')
<!-- Breadcrumb -->
<div class="page-brdc">
    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(img/breadcrumbs/image2.png);">
        <h1 class="page-title"> EVENTS </h1>
    </div>
</div>

<!-- Section begin -->
<div class="uk-section pull-top-two whiteptn team-inner">
    <div class="uk-container uk-container-medium">
        <div class="home-posts team-section shadow-one uk-padding">
            <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: false">
                <div class="uk-padding">
                    <!-- Achievement -->
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <!-- <img src="{{ asset('img/latest/afc1.jpg')}}" alt="" uk-cover>
                            <canvas width="600" height="400"></canvas> -->
                            <iframe width="100%" height="360" src="https://www.youtube.com/embed/jrEM66zZ0bU" title="LIVE:  AZAM FC FESTIVAL 2020" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">AZAM FESTIVAL - 2020</h3>
                                <p>Tamasha la kwanza la Azam FC lililofanyika katika uwanja wa Chamazi Complex jijini
                                    Dar es Salaam Aug 23, 2020 </p>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement -->
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <!-- <img src="{{ asset('img/latest/afc1.jpg')}}" alt="" uk-cover>
                            <canvas width="600" height="400"></canvas> -->
                            <iframe width="100%" height="360" src="https://www.youtube.com/embed/b4L0GKdm-jA" title="LIVE -  AZAM FC INAZINDUA NEMBO MPYA - AZAM TV 14/08/2021" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">SIKU YA MTOTO WA AZAM | 2021</h3>
                                <p>KLABU ya Azam FC leo imezindua nembo mpya itakayoanza kutumika mara moja na kuachana
                                    na ya zamani iliyokuwa inatumika tangu kuanzishwa kwa timu mwaka 2004.
                                    Zoezi hilo lilifanyika katika hoteli ya Serena Jijini Dar es Salaam na
                                    kuhudhuriwa na watu mbalimbali wakiwemo viongozi wa Shirikisho la Soka Tanzania
                                    (TFF) na Waziri wa Habari, Utamaduni, Sanaa na Michezo, Innocent Bashungwa. </p>
                            </div>
                        </div>
                    </div>

                    <!-- Achievement -->
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <!-- <img src="{{ asset('img/latest/afc1.jpg')}}" alt="" uk-cover>
                            <canvas width="600" height="400"></canvas> -->
                            <iframe width="100%" height="360" src="https://www.youtube.com/embed/oQf10GlcVBk" title="LIVE -  AZAM FC INAZINDUA NEMBO MPYA - AZAM TV 14/08/2021" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                            <iframe width="100%" height="360" src="https://www.youtube.com/embed/k9SqC3fv-fs" title="LIVE -  AZAM FC INAZINDUA NEMBO MPYA - AZAM TV 14/08/2021" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                            <iframe width="100%" height="360" src="https://www.youtube.com/embed/J05ZZRV_8kE" title="AZAMKA 2022 | Tazama utambulisho wa wachezaji uliofanywa na Azam FC" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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