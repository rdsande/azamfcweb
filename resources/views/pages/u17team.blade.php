@extends('layouts.app')

@section('content')

<!-- Sort -->

<!-- Breadcrumb -->
<div class="page-brdc">
    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle"
        style="background-image: url(img/breadcrumbs/image1.png);">
        <h1 class="page-title"> UNDER 20 ACADEMY </h1>
    </div>
</div>

<!-- Section begin -->
<div class="uk-section pull-top-two whiteptn team-inner pllist">
    <div class="uk-container uk-container-medium">
        <div class="home-posts team-section shadow-one">

            <!-- Team -->

            <div class="posts-type-one team-display">
                <!-- Goalkeepers -->
                <!-- Header -->
                <div class="widget-header-wrapper first">
                    <div class="widget-header-wrapper__header">
                        <header class="widget-header  ">
                            <h2 class="widget-header__title">Goalkeepers</h2>
                        </header>
                    </div>
                </div>
                <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s uk-text-center" uk-grid>
                    @include('includes/academy13.goalkeepers')
                </div>

                <!-- Defenders -->
                <!-- Header -->
                <div class="widget-header-wrapper ">
                    <div class="widget-header-wrapper__header">
                        <header class="widget-header  ">
                            <h2 class="widget-header__title">DEFENDERS</h2>
                        </header>
                    </div>
                </div>
                <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-4@s uk-text-center" uk-grid>
                    @include('includes/academy13.defenders')
                </div>

                <!-- Midfielders -->
                <!-- Header -->
                <div class="widget-header-wrapper ">
                    <div class="widget-header-wrapper__header">
                        <header class="widget-header  ">
                            <h2 class="widget-header__title">MIDFIELDERS</h2>
                        </header>
                    </div>
                </div>
                <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-4@s uk-text-center" uk-grid>
                    @include('includes/academy13.midfielders')
                </div>

                <!-- Forwards -->
                <!-- Header -->
                <div class="widget-header-wrapper ">
                    <div class="widget-header-wrapper__header">
                        <header class="widget-header  ">
                            <h2 class="widget-header__title">FORWARDS</h2>
                        </header>
                    </div>
                </div>
                <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-4@s uk-text-center" uk-grid>
                    @include('includes/academy13.forwards')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection