<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>AZAM FC | Official Website of Azam Football Club | Tanzania Premier League</title>
    <meta name="description"
        content="Welcome to the official website of AZAM FC, a renowned football club in Tanzania competing in the prestigious Tanzania Premier League. Stay updated with the latest news, match schedules, player profiles, and exclusive content related to AZAM FC's journey towards sporting excellence and success on the national and international stages.">
    <meta name="keywords"
        content="AZAM FC, Azam Football Club, Azam Football Club Academy, AZAMFC, AZAMFC Academy, Tanzania Premier League, Tanzanian Football, Soccer, Football Club, Sports, Matches, Players, Team, News, Updates, Official Website, Championships, Tournaments, Success, Excellence, Sporting Events, Football Community, Tanzania Football, East African Football.">
    <meta name="author" content="Tekleo Digital">
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Azam Football Club">
    <meta property="og:description"
        content="Welcome to the official website of AZAM FC, a renowned football club in Tanzania competing in the prestigious Tanzania Premier League. Stay updated with the latest news, match schedules, player profiles, and exclusive content related to AZAM FC's journey towards sporting excellence and success on the national and international stages.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.azamfc.co.tz">
    <meta property="og:image" content="{{ asset('img/azamfc-smcover.jpg')}}">

    <!-- Twitter -->
    <meta name="twitter:card" content="Azam Football Club">
    <meta name="twitter:title" content="Azam FC">
    <meta name="twitter:description"
        content="Welcome to the official website of AZAM FC, a renowned football club in Tanzania competing in the prestigious Tanzania Premier League. Stay updated with the latest news, match schedules, player profiles, and exclusive content related to AZAM FC's journey towards sporting excellence and success on the national and international stages.">
    <meta name="twitter:image" content="{{ asset('img/azamfc-smcover.jpg')}}">
    <meta name="twitter:creator" content="@azamfc">

    <!-- Canonical URL -->
    <!-- <link rel="canonical" href="https://www.azamfc.co.tz"> -->

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/logo.png')}}" type="image/x-icon">

    <!-- CSS -->
    <link rel="preload" href="{{ asset('css/main.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </noscript>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;800;900&family=Work+Sans:ital,wght@0,300;0,400;0,600;0,800;0,900;1,300;1,600;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    @stack('scripts')

    <!-- Loader -->
    <style>
    .afc-fullpage-loader {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        background: #fff;
        z-index: 9999;
        opacity: 1;
        transition: opacity 0.5s;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .afc-fullpage-loader .afc-fullpage-loader__logo {
        position: relative;
    }

    .afc-fullpage-loader .afc-fullpage-loader__logo:after {
        content: "";
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        -webkit-animation: shine 2.5s infinite cubic-bezier(0.42, 0, 0.58, 1);
        animation: shine 2.5s infinite cubic-bezier(0.42, 0, 0.58, 1);
        background: rgba(255, 255, 255, 0.8);
        /* FF3.6-15 */
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, white 50%, rgba(255, 255, 255, 0) 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00ffffff", endColorstr="#00ffffff", GradientType=1);
        /* IE6-9 */
    }

    @-webkit-keyframes shine {
        0% {
            transform: translateX(-100%) skew(-30deg);
        }

        100% {
            transform: translateX(200%) skew(-30deg);
        }
    }

    @keyframes shine {
        0% {
            transform: translateX(-100%) skew(-30deg);
        }

        100% {
            transform: translateX(200%) skew(-30deg);
        }
    }

    .afc-fullpage-loader--invisible {
        opacity: 0;
    }
    </style>

</head>

<body>
    <!-- Loader Start -->
    <div class="afc-fullpage-loader">
        <div class="afc-fullpage-loader__logo">
            <img src="{{asset('img/logo.png')}}" alt="loading" />
        </div>
    </div>
    <!-- Loader End -->

    <!-- Mobile phone alert to install app -->
    <div class="app-inst-alert">
        <div class="uk-alert-primary" uk-alert>
            <a href class="uk-alert-close" uk-close></a>
            <p>Download on the AZAMFC app on <strong>App Store</strong> or <strong>Google Play Store</strong>
            <div id="mobileDiv" style="display: none;">
                This is a mobile device with the following OS: <span id="os"></span>
            </div>
            </p>
        </div>
    </div>
    <!-- Header Desktop Begin-->
    <header class="site-header afc-fullwidth" id="site-header">
        <div class="nav-core">
            <div class="nav-primary">
                <!-- top navigation - desktop -->
                <div class="nav-top">
                    <div class="nav-top-left" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500">

                        <div uk-alert class="alert-type-one">
                            <a href="http://localhost/afcshop/" uk-toggle="target: #my-id" type="button">
                                Get your AZAMFC new kits | &#128293; <span class="cta-btn-one"> BUY
                                </span>
                                <!-- <a class="uk-alert-close" uk-close></a> -->
                            </a>
                        </div>

                    </div>
                    <div class="nav-top-right">
                        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                            <div class="uk-navbar-left">
                                <ul class="uk-navbar-nav">
                                    <!-- <li class="acct-btn"><a href="{{ url('login')}}">
                                            <button class="uk-button uk-button-default btn-afc-min">
                                                <span class="btn-img">
                                                    <i class="ri-user-6-fill"></i>
                                                </span>
                                                <label> Ingia </label>
                                            </button>
                                        </a>
                                    </li>
                                    <li class="acct-btn"><a href="{{ url('register')}}">
                                            <button class="uk-button uk-button-default btn-afc-secondary">
                                                <span class="btn-img">
                                                    <img src="{{ asset('img/logo-light.svg')}}" alt="logo" />
                                                </span>
                                                <label> Jiunge </label>
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="nav-item-round">
                                                <img src="{{ asset('img/lang/sw.png')}}" alt="Change Language" title="Language" id="langSwitch">
                                            </span>
                                        </a>
                                        <div class="uk-navbar-dropdown">
                                            <ul class="uk-nav uk-navbar-dropdown-nav" id="selectLang">
                                                <li class="lang-select" data-src="{{ asset('img/lang/sw.png')}}"><a href="#">
                                                        <img src="{{ asset('img/lang/sw.png')}}" alt="Change Language" title="Language">
                                                        <label> Swahili </label>

                                                    </a>
                                                </li>
                                                <li class="lang-select" data-src="{{ asset('img/lang/en.png')}}"><a href="#">
                                                        <img src="{{ asset('img/lang/en.png')}}" alt="Change Language" title="Language">
                                                        <label> English </label>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <li><a href="#">
                                            <span class="nav-item-round" type="button"
                                                uk-toggle="target: #offcanvas-overlay">
                                                <i class="ri-menu-line"></i>
                                            </span>
                                        </a></li>
                                    <div id="offcanvas-overlay" uk-offcanvas="flip: true">
                                        <div class="uk-offcanvas-bar">

                                            <button class="uk-offcanvas-close" type="button" uk-close></button>


                                            <h3>AZAM FOOTBALL CLUB</h3>

                                            <p>Azam Football Club is a professional football club based in Chamazi,
                                                Temeke, Dar es Salaam, Tanzania, that competes in the Tanzanian Premier
                                                League. Nicknamed Wana Lambalamba, Chamazi Millionaires or the Bakers,
                                                the club was founded as Mzizima Football Club in 2004, changed its name
                                                to Azam Sports Club in 2005, then Azam Football Club in 2006 and moved
                                                to its current stadium, Azam Complex Chamazi, in 2010.</p>

                                            <div>
                                                <a href="" class="uk-icon-button uk-margin-small-right" uk-icon=""><i
                                                        class="ri-facebook-circle-line"></i></a>
                                                <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon=""> <i
                                                        class="ri-twitter-line"></i></a>
                                                <a href="" class="uk-icon-button" uk-icon=""> <i
                                                        class="ri-youtube-line"></i> </a>
                                                <a href="" class="uk-icon-button" uk-icon=""><i
                                                        class="ri-linkedin-box-line"></i></a>
                                            </div>
                                        </div>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- main navigation -->
                <div class="nav-middle main-nav">
                    <div class="logo-container">
                        <div class="logo-wrap">
                            <a href="/">
                                @include('includes.logo')
                            </a>
                        </div>
                    </div>
                    <div class="nav-middle-left">
                        <nav class="uk-navbar-container uk-navbar-transparent">
                            <div class="uk-container">
                                <div uk-navbar>
                                    <div class="uk-navbar-left">
                                        <ul class="uk-navbar-nav">
                                            @include('includes.main-navigation')
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="nav-middle-right">
                        <nav class="uk-navbar-container uk-navbar-transparent">
                            <div class="uk-container">
                                <div uk-navbar>
                                    <div class="uk-navbar-left">
                                        <ul class="uk-navbar-nav">
                                            @include('includes.main-right-navigation')
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Desktop End-->

    <!-- Mobile Header Begin -->
    <nav class="uk-navbar-container mobile-only-nav">
        <div class="uk-container">
            <div uk-navbar>
                <div class="mobile-logo">
                    <a href="/">
                        @include('includes.logo')
                    </a>
                </div>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-toggle uk-navbar-toggle-animate" uk-navbar-toggle-icon href="#"></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            @include('includes.main-navigation')
                            @include('includes.main-right-navigation')
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <!-- Mobile Header End -->
    <!-- Page content Begin-->

    @yield('content')

    <!-- This is the modal -->
    <div id="my-id" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title">Coming soon</h2>
            <button class="uk-modal-close uk-button uk-button-default" type="button">Close</button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="afc-footer">
        <div class="uk-container uk-container-small uk-margin-large-top">
            <h3 class="uk-heading-line uk-text-center uk-light"><span>PARTNERS & SPONSORS</span></h3>
            <div class="uk-container">
                @include('includes/sections.sponsors')
            </div>
        </div>
        <a href="#" uk-totop uk-scroll></a>
        <div class="uk-section">
            <div class="uk-container" uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 100; repeat: true">
                <h1 class="ftr-highlight-txt">Timu Bora, Bidhaa Bora!</h1>
            </div>
            <div class="uk-container uk-container-xsmall">
                <!-- <div class="socialmediacontainer">
                    <ul>
                        <li><a href="/"> <i class="ri-instagram-line"></i> </a></li>
                        <li><a href="/"> <i class="ri-twitter-line"></i> </a></li>
                        <li><a href="/"> <i class="ri-facebook-circle-line"></i> </a></li>
                        <li><a href="/"> <i class="ri-youtube-line"></i> </a></li>
                    </ul>
                </div> -->
                <!-- <div class="logo-bg-footer uk-text-center">
                    <a target="_blank" href="https://bakhresa.com"><img src="{{ asset('img/bglogo.svg')}}"
                            alt="A division of Bakhresa Group Logo" title="Bakhresa Group Logo" /></a>
                </div> -->
            </div>
        </div>
        <div class="uk-section full100">
            <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center uk-margin-large-top uk-grid-match footer-id"
                uk-grid>
                <div>
                    <div class="uk-bg-highlight uk-padding">
                        <div>
                            <ul class="uk-list uk-list-hyphen">
                                <li><a href="/"> Contact us </a></li>
                                <li><a href="/"> Privacy </a></li>
                                <li><a href="/"> Cookies </a></li>
                                <li><a href="/"> Terms & Conditions </a></li>
                            </ul>
                        </div>
                        <span class="ftr-copy"> &copy; Azam Football Club, 2023 | Website & App by <a
                                href="https://tekleodigital.co.tz" target="_blank">Tekleo
                                Digital</a> <img src="https://flagcdn.com/16x12/tz.png" srcset="https://flagcdn.com/32x24/tz.png 2x,
    https://flagcdn.com/48x36/tz.png 3x" width="16" height="12" alt="Ukraine"> </span>
                    </div>
                </div>
                <div>
                    <div class="uk-background-primary uk-padding uk-light">
                        <!-- <div class="table-standings">
                            <iframe frameborder="0" scrolling="yes" id="fs-62951"
                                src="https://www.fastscore.com/widgets/standings/26134/62951?ff=1&fs=12&lh=18&bg=FFFFFF&fc=212529&tfc=2E59A2&ifc=AFAFAF&lbc=DEE2E6&sbr=true&sci=true&sha=true&stl=true&slc=true&tlg=true&tlk=false&mp=true&mw=true&md=true&ml=true&gl=true&gd=true&f=true"
                                style="width: 100%"></iframe>
                            <div style="text-align:right;font-size:0.9em;line-height:1.0em">Powered by <a
                                    href="https://www.fastscore.com">FastScore.com</a><br><br></div>
                            <script>
                            let iframe = document.querySelector("#fs-62951");
                            window.addEventListener("message", function(e) {
                                let message = e.data;
                                iframe.style.height = message.height + "px";
                                iframe.style.width = message.width + "px";
                            }, false);
                            </script>
                        </div> -->
                        <div class="footer-contact">
                            <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center" uk-grid>
                                <div>
                                    <div>
                                        <div class="ftr-logo">
                                            @include('includes.logo')
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="ftr-contact-details">
                                        <h4>AZAM FOOTBALL CLUB</h4>
                                        <ul class="uk-list">
                                            <li> Azam Chamazi Complex, </li>
                                            <li> P.O BOX 2517, Dar es salaam </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid uk-align-center">
                                <div class="socialmediacontainer">
                                    <ul>
                                        <li><a href="https://instagram.com/azamfcofficial" target="_blank"> <i
                                                    class="ri-instagram-line"></i> </a></li>
                                        <li><a href="https://twitter.com/azamfc" target="_blank"> <i
                                                    class="ri-twitter-line"></i> </a></li>
                                        <li><a href="https://facebook.com/azamfc" target="_blank"> <i
                                                    class="ri-facebook-circle-line"></i> </a></li>
                                        <li><a href="https://youtube.com/@azamfcofficial." target="_blank"> <i
                                                    class="ri-youtube-line"></i> </a></li>
                                        <li><a href="https://tiktok.com/@azamfcofficial" target="_blank"><i
                                                    class="ri-tiktok-line"></i></a></li>
                                        <li><a href="https://whatsapp.com/channel/0029Va8qaVnAu3aVWGTTd72a"
                                                target="_blank"> <i class="ri-whatsapp-line"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <script>
    const loaderEl = document.getElementsByClassName('afc-fullpage-loader')[0];
    document.addEventListener('readystatechange', (event) => {
        // const readyState = "interactive";
        const readyState = "complete";

        if (document.readyState == readyState) {
            loaderEl.classList.add('afc-fullpage-loader--invisible');

            setTimeout(() => {
                loaderEl.parentNode.removeChild(loaderEl);
            }, 2000)
        }
    });
    </script>
    <script>
    //AZAMFC TV
    const modalTriggers = document.querySelectorAll('.modal-trigger');
    const modalOverlay = document.querySelector('.modal-overlay');
    const modalContent = document.querySelector('.modal-content');

    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const iframeSrc = trigger.getAttribute('data-src');
            modalContent.innerHTML = `<iframe class="modal-iframe" src="${iframeSrc}"></iframe>`;
            modalOverlay.style.display = 'block';
            modalContent.style.display = 'block';
        });
    });

    modalOverlay.addEventListener('click', () => {
        modalOverlay.style.display = 'none';
        modalContent.style.display = 'none';
        modalContent.innerHTML = ''; // Clear iframe content
    });
    </script>
    <!-- <script>
    let scrollpos = window.scrollY
    const header = document.querySelector("#site-header")
    const header_height = 100

    const add_class_on_scroll = () => header.classList.add("fixed-header")
    const remove_class_on_scroll = () => header.classList.remove("fixed-header")

    window.addEventListener('scroll', function() {
        scrollpos = window.scrollY;

        if (scrollpos >= header_height) {
            add_class_on_scroll()
        } else {
            remove_class_on_scroll()
        }

    })
    </script> -->

    <script>
    // Function to detect if the user is on a mobile device
    function isMobile() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    if (isMobile()) {
        // Get the user's OS
        var os;
        if (/(Android)/i.test(navigator.userAgent)) {
            os = "Android";
        } else if (/(iPhone|iPad|iPod)/i.test(navigator.userAgent)) {
            os = "iOS";
        } else if (/(Windows Phone)/i.test(navigator.userAgent)) {
            os = "Windows Phone";
        } else {
            os = "Other";
        }

        // Display the mobileDiv and set the OS text
        document.getElementById("mobileDiv").style.display = "block";
        document.getElementById("os").textContent = os;
    }
    </script>
</body>

</html>