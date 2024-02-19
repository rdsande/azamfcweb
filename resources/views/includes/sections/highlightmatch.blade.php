<img src="{{ asset('img/breadcrumbs/image3.png')}}" uk-img="loading: eager" class="uk-animation-kenburns" width="1800"
    height="600" alt="">
<div class="uk-overlay-primary uk-position-cover"></div>
<div class="uk-overlay uk-position-center uk-light">
    <div class="highlight-score-section" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 100">
        <!-- Label -->
        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
            <div class="uk-width-auto@m uk-align-center">
                <span class="uk-label outline"> Next Match </span>
            </div>
        </div>
        <!-- Teams -->
        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
            <!-- Home team -->
            <div class="uk-width-auto@m">
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-column-1-2">
                        <p>TABORA UTD</p>
                        <!-- Home team logo -->
                        <p>
                            <img src="{{ asset('img/teamlogos/tabora.png')}}" alt="team" />
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-width-auto@m vsv">
                <div class="uk-card uk-card-default uk-card-body">
                    <span> VS </span>
                </div>
            </div>
            <!-- Away team -->
            <div class="uk-width-auto@m">
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="uk-column-1-2">
                        <!-- Away team logo -->
                        <p>
                            <img src="{{ asset('img/logo.png')}}" alt="team" />
                        </p>
                        <p>AZAM FC</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Date Info -->
        <div class="uk-child-width-expand@s uk-text-center" uk-grid>
            <div class="uk-width-auto@m uk-align-center">
                <p class="stadium-details"> 19/02/2024 <span class="boldfont">| TABORA</span> </p>
            </div>
        </div>
    </div>
</div>