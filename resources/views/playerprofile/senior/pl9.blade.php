@extends('layouts.app')
<!-- Chart Js -->
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@section('content')


<!-- Header Container Players -->
<div class="uk-section head-inner">
    <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-grid-match players-section-container"
        uk-grid>
        <div>
            <div class="uk-bg-highlight bg-h-light uk-padding">
                <div class="plyr-container"
                    uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: true">
                    <img src="{{asset('img/players/profiles/player18.png')}}" class="playerprfl" loading="lazy" />
                </div>
                <div class="player-no">
                    <!-- <h1>29</h1> -->
                </div>
                <div class="player-pos">
                    <h1> 20 </h1>
                    <!-- <a href="/"><span class="uk-label">SENIOR TEAM</span></a> -->
                </div>
            </div>
        </div>
        <div>
            <div class="uk-background-primary uk-padding uk-light">
                <div class="player-details-info"
                    uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: true">
                    <h3> NATHANIEL RAPHAEL CHILAMBO </h3>
                    <h2 class="uk-heading-line uk-text-right uk-text-warning posspan">
                        <span>DEFENDER</span>
                    </h2>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Player Summary top -->
<div class="uk-section bg-white-type-two sec-relative brd-down contain-short-stats">
    <div class="uk-container uk-container-medium">
        <div class="uk-grid-small uk-child-width-expand@s uk-text-center shadow-two" uk-grid uk-height-match
            uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: false">
            <div>
                <div class="uk-card uk-card-default uk-card-body inner-info-plyr">
                    <div uk-grid>
                        <div class="uk-width-auto@m">
                            <img src="{{ asset('img/icons/formation.svg')}}" class="icon-item" />
                        </div>
                        <div class="uk-width-expand@m">
                            <span class="title-sm-main">POSITION<br /></span>
                            <span class="title-sm-tp">DEFENDER</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body inner-info-plyr">
                    <div uk-grid>
                        <div class="uk-width-auto@m">
                            <img src="{{ asset('img/icons/flag.svg')}}" class="icon-item" />
                        </div>
                        <div class="uk-width-expand@m">
                            <span class="title-sm-main">NATIONALITY <br /></span>
                            <span class="title-sm-tp"> TANZANIA</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body inner-info-plyr">
                    <div uk-grid>
                        <div class="uk-width-auto@m">
                            <img src="{{ asset('img/icons/time.svg')}}" class="icon-item" />
                        </div>
                        <div class="uk-width-expand@m">
                            <span class="title-sm-main">BIRTHDATE<br /></span>
                            <span class="title-sm-tp">03.02.2004</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body inner-info-plyr">
                    <div uk-grid>
                        <div class="uk-width-auto@m">
                            <img src="{{ asset('img/icons/pitch.svg')}}" class="icon-item" />
                        </div>
                        <div class="uk-width-expand@m">
                            <span class="title-sm-main">HEIGHT <br /></span>
                            <span class="title-sm-tp">168CM</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body inner-info-plyr">
                    <div uk-grid>
                        <div class="uk-width-auto@m">
                            <img src="{{ asset('img/icons/ball.svg')}}" class="icon-item" />
                        </div>
                        <div class="uk-width-expand@m">
                            <span class="title-sm-main">PREVIOUS CLUB<br /></span>
                            <span class="title-sm-tp">RUVU SHOOTING</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body inner-info-plyr">
                    <div uk-grid>
                        <div class="uk-width-auto@m">
                            <img src="{{ asset('img/icons/gametime.svg')}}" class="icon-item" />
                        </div>
                        <div class="uk-width-expand@m">
                            <span class="title-sm-main">YEAR JOINED <br /></span>
                            <span class="title-sm-tp">2022</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Player Details -->
<div class="uk-section whiteptn ptn4">
    <div class="uk-container uk-container-medium">
        <div class="uk-position-relative uk-margin-medium js-example playr-profile-info">

            <ul uk-tab="swiping: false" role="tablist" class="uk-tab">
                <li class="uk-active" role="presentation"><a href="#" aria-selected="true" role="tab"
                        id="uk-tab-5-tab-0" aria-controls="uk-tab-5-tabpanel-0">Profile</a></li>
                <li role="presentation" class=""><a href="#" aria-selected="false" role="tab" id="uk-tab-5-tab-1"
                        aria-controls="uk-tab-5-tabpanel-1" tabindex="-1">Stats</a></li>
            </ul>

            <ul class="uk-switcher" role="presentation">
                <li class="uk-active" id="uk-tab-5-tabpanel-0" role="tabpanel" aria-labelledby="uk-tab-5-tab-0">
                    <!-- Player Bio -->
                    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div>
                                    His remarkable skills, combined with a keen understanding of the game, make him a
                                    standout player in every match.
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="uk-tab-5-tabpanel-1" role="tabpanel" aria-labelledby="uk-tab-5-tab-1" class="">
                    <!-- Player stats -->
                    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-body">
                                <div class="grid">
                                    <p> <strong>*</strong> Note: This is illustrative data, real data will be updated
                                        soon. Thanks </p>
                                </div>
                                <div class="uk-child-width-expand@s uk-text-center stats-inner" uk-grid>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">
                                            <div class="widget-header-wrapper ">
                                                <div class="widget-header-wrapper__header">
                                                    <header class="widget-header  ">
                                                        <h3 class="widget-header__title"> SHOOTING </h3>
                                                    </header>
                                                </div>
                                            </div>
                                            <div class="stat-cont">
                                                <span class="statmainitem"> Total Shots: <span
                                                        class="statvalue">8</span></span>
                                                <canvas id="shootingStats" width="400" height="400"></canvas>
                                                <script>
                                                var ctx = document.getElementById('shootingStats').getContext('2d');

                                                // Define your data
                                                var data = {
                                                    labels: ['Inaccurate Shots', 'Accurate Shots'],
                                                    datasets: [{
                                                        data: [3, 5],
                                                        backgroundColor: ['red', '#3334b1'],
                                                    }]
                                                };

                                                // Create the doughnut chart
                                                var shootingStats = new Chart(ctx, {
                                                    type: 'doughnut',
                                                    data: data,
                                                    options: {
                                                        plugins: {
                                                            datalabels: {
                                                                color: 'white',
                                                                formatter: function(value, context) {
                                                                    return value +
                                                                        '%';
                                                                }
                                                            }
                                                        }
                                                    }
                                                });
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">
                                            <div class="widget-header-wrapper ">
                                                <div class="widget-header-wrapper__header">
                                                    <header class="widget-header  ">
                                                        <h3 class="widget-header__title"> GOALS </h3>
                                                    </header>
                                                </div>
                                            </div>
                                            <div class="stat-cont">
                                                <span class="statmainitem"> Total Goals: <span class="statvalue"> 6
                                                    </span> | Assists: <span class="statvalue"> 6 </span></span>
                                                <img src="{{asset('img/icons/goal.png')}}" class="goalstat">

                                                <!-- Goal Stats -->
                                                <div class="goals-box" uk-tooltip="title: Goals inside the box">2</div>
                                                <div class="goals-not-box" uk-tooltip="title: Goals outside of the box">
                                                    4
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-card uk-card-default uk-card-body">
                                            <div class="widget-header-wrapper ">
                                                <div class="widget-header-wrapper__header">
                                                    <header class="widget-header  ">
                                                        <h3 class="widget-header__title"> DEFENDING </h3>
                                                    </header>
                                                </div>
                                            </div>
                                            <div class="stat-cont">
                                                <ul class="uk-list uk-list-divider">
                                                    <li>
                                                        <div class="uk-grid-small defending-stat" uk-grid>
                                                            <div class="uk-width-expand" uk-leader>Tackles Won</div>
                                                            <div><span class="num-first">6</span><span
                                                                    clas="num-compare">/11</span></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="uk-grid-small defending-stat" uk-grid>
                                                            <div class="uk-width-expand" uk-leader>Duels Won</div>
                                                            <div><span class="num-first">6</span><span
                                                                    clas="num-compare">/11</span></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="uk-grid-small defending-stat" uk-grid>
                                                            <div class="uk-width-expand" uk-leader>Aerial duels Won
                                                            </div>
                                                            <div><span class="num-first">6</span><span
                                                                    clas="num-compare">/11</span></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="uk-grid-small defending-stat" uk-grid>
                                                            <div class="uk-width-expand" uk-leader>50/50 Won</div>
                                                            <div><span class="num-first">6</span><span
                                                                    clas="num-compare">/11</span></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Video reel -->
    <div class="uk-container uk-container-medium uk-margin">
        <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <div>
                        <h3> <i class="ri-clapperboard-line"></i> VIDEO SHOWREEL</h3>
                        <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                            <div uk-lightbox>
                                <a class="uk-button uk-button-default" href="https://youtu.be/dVcG_fzgiU0"
                                    data-caption="YouTube"> <i class="ri-play-circle-fill"></i> Play Video Reel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Players Related -->
<div class="uk-section bg-gradient-one players-section">
    <div class="uk-container uk-container-medium">
        <div class="floating-results-one shadow-one">
            <!-- Post Header -->
            <div class="widget-header-wrapper light">
                <div class="widget-header-wrapper__header">
                    <header class="widget-header  ">
                        <h2 class="widget-header__title">OTHER PLAYERS</h2>
                    </header>
                </div>

                <div class="widget-header-wrapper__content ">
                    <div class="uk-inline">
                    </div>
                </div>
            </div>
            <!-- Related Players -->
            <div class="results-fixtures-carousel ">
                <div class="uk-section">
                    <div class="uk-container uk-container-medium">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                @include('includes/players.defenders')
                            </ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                                uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                                uk-slidenav-next uk-slider-item="next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer-3r"></div>
</div>


@endsection