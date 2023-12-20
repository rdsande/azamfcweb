<div class="uk-position-relative uk-margin-medium js-example shop-home-section">
    <div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: true">
        <!-- Product -->
        <div>
            <a href="{{ url('http://localhost/afcshop/product/home-kit-2023-24/')}}">
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <!-- Product Image -->
                            <img src="{{ asset('img/kits/home.png')}}" width="1800" height="1200" alt="" class="uk-transition-scale-up uk-transition-opaque">
                        </div>
                        <div class="uk-card-body">
                            <span class="product-elem"></span>
                            <!-- Product Title -->
                            <h3 class="uk-card-title">HOME KIT</h3>
                            <button class="uk-button uk-button-primary" uk-toggle="target: #my-id" type="button"> View Product </button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Product -->
        <div>
            <a href="{{ url('http://localhost/afcshop/product/away-kit-2023-24/')}}">
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <!-- Product Image -->
                            <img src="{{ asset('img/kits/away.png')}}" width="1800" height="1200" alt="" class="uk-transition-scale-up uk-transition-opaque">
                        </div>
                        <div class="uk-card-body">
                            <span class="product-elem"></span>
                            <!-- Product Title -->
                            <h3 class="uk-card-title">AWAY KIT</h3>
                            <button class="uk-button uk-button-primary" uk-toggle="target: #my-id" type="button"> View Product </button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- Product -->
        <div>
            <a href="{{ url('http://localhost/afcshop/product/third-kit-2023-24/')}}">
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <!-- Product Image -->
                            <img src="{{ asset('img/kits/third.png')}}" width="1800" height="1200" alt="" class="uk-transition-scale-up uk-transition-opaque">
                        </div>
                        <div class="uk-card-body">
                            <span class="product-elem"></span>
                            <!-- Product Title -->
                            <h3 class="uk-card-title">THIRD KIT</h3>
                            <button class="uk-button uk-button-primary" uk-toggle="target: #my-id" type="button"> View Product </button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>