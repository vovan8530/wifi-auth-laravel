<!DOCTYPE html>
<html lang="en">
<head>
    <title>wifi system</title>
    <!--  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">

    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Microsoft Tiles -->
    <meta name="msapplication-config" content="browserconfig.xml">

    <meta name="csrf-token" content="{{csrf_token()}}">

    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">

    <!--  -->

</head>

<body style="background-image: url({{asset('img/mountain.jpg')}});">

<!--[if lte IE 11]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="mainWrapper">

    <div class="contentWrapper">
        <!--  -->

        <!--  -->

        <!-- Start of page code insertion here -->
        <div id="homePage" class="homePage page">

            <main class="main">
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            @if($settings[0]->settings_value !== '')
                                <a href="{{url($settings[0]->settings_value)}}" class="nav-item__link">
                            @else
                                <a href="#" class="nav-item__link">
                            @endif
                                <img class="nav-item__img nav-item__img--insta" src="{{asset('img/icons/insta.png')}}" alt="">
                            </a>
                        </li>
                        <li class="nav-item">
                            @if($settings[1]->settings_value !== '')
                                <a href="{{url($settings[1]->settings_value)}}" class="nav-item__link">
                            @else
                                <a href="#" class="nav-item__link">
                            @endif
                                <img class="nav-item__img nav-item__img--calendar" src="{{asset('img/icons/calendar.png')}}" alt="">
                            </a>
                        </li>
                        <li class="nav-item">
                            @if($settings[2]->settings_value !== '')
                                <a href="{{url($settings[2]->settings_value)}}" class="nav-item__link">
                            @else
                                <a href="#" class="nav-item__link">
                            @endif
                                <img class="nav-item__img nav-item__img--map" src="{{asset('img/icons/map.png')}}" alt="">
                                </a>
                        <li class="nav-item">
                            @if($settings[3]->settings_value !== '')
                                <a href="{{url($settings[3]->settings_value)}}" class="nav-item__link">
                            @else
                                <a href="#" class="nav-item__link">
                            @endif
                                <img class="nav-item__img nav-item__img--plate" src="{{asset('img/icons/plate.png')}}" alt="">
                                </a>
                        </li>
                        <li class="nav-item">
                            @if($settings[4]->settings_value !== '')
                                <a href="{{url($settings[4]->settings_value)}}" class="nav-item__link">
                             @else
                                <a href="#" class="nav-item__link">
                            @endif
                                <img class="nav-item__img nav-item__img--rocks" src="{{asset('img/icons/rocks.png')}}" alt="">
                                </a>
                        </li>
                        <li class="nav-item">
                            @if($settings[5]->settings_value !== '')
                                <a href="{{url($settings[5]->settings_value)}}" class="nav-item__link">
                            @else
                                <a href="#" class="nav-item__link">
                            @endif
                                <img class="nav-item__img nav-item__img--fb" src="{{asset('img/icons/fb.png')}}" alt="">
                                </a>
                        </li>
                    </ul>
                </nav>

                <div class="permission">
                    <div class="checkbox-item">
                        <label class="checkbox-label">
                            <input value="" name="confirm" type="checkbox" class="form-checkbox form-checkbox--hidden">
                            <span class="checkboxbtn"></span>
                            <span class="form-checkbox-subtitle">@lang('By entering your e-mail address and clicking on the button, you agree to receive a regular newsletter (this can be unsubscribed at any time).')</span>
                        </label>
                    </div>

                    <div class="checkbox-item">
                        <label class="checkbox-label">
                            <input value="" name="confirm" type="checkbox" class="form-checkbox form-checkbox--hidden">
                            <span class="checkboxbtn"></span>
                            <span class="form-checkbox-subtitle">@lang('By logging into the WLAN you accept the')
                                <button href="#" class="border-b show-popupTerms--js">@lang('Terms of Use.')</button>
                            </span>
                        </label>
                    </div>
                </div>

                <ul class="nav-login">
                    <li class="login-item disabled">
                        <div class="login-item__icon-wrap">
                        <a href="{{route('auth')}}" class="button-login--js">
                            <img class="login-item__img login-item__img--mail" src="{{asset('img/icons/mail.png')}}" alt="">
                        </a>
                        </div>
                        <a href="{{route('auth')}}" class="button button-login--js">Wlan <span class="uppercase">login</span></a>
                    </li>
                    <li class="login-item disabled">
                        <div class="login-item__icon-wrap">
                        <a href="{{route('auth.social', ['provider' => 'facebook'])}}" class="button-login--js">
                            <img class="login-item__img login-item__img--fb" src="{{asset('img/icons/fb-bg.png')}}" alt="">
                        </a>
                        </div>
                        <a href="{{route('auth.social', ['provider' => 'facebook'])}}" class="button button-login--js">Facebook <span class="uppercase">login</span></a>
                    </li>
                    <li class="login-item disabled">
                        <div class="login-item__icon-wrap">
                        <a href="{{route('auth.social', ['provider' => 'google'])}}" class="button-login--js">
                            <img class="login-item__img login-item__img--google" src="{{asset('img/icons/google.png')}}" alt="">
                        </a>
                        </div>
                        <a href="{{route('auth.social', ['provider' => 'google'])}}" class="button button-login--js">Gmail <span class="uppercase">login</span></a>
                    </li>
                </ul>
            </main>
        </div>

        <!-- End of page code insertion here -->


    </div>
    <!--  -->
    <div id="pageOverlay" class="pageOverlay"></div>
    <!--  -->
    <div id="popupMessage" class="popupMessage popup">
        <div class="popupWrapper">
            <div class="popupContentWrapper">
                <h2>@if( LaravelLocalization::getCurrentLocale()=='de')
                        {{$settings[6]->settings_value}}
                    @else
                        {{$settings[7]->settings_value}}
                    @endif
                </h2>
            </div>
            <div class="popupFooter">
                    <button class="button-close popupCloseButton" title="close"></button>
            </div>
        </div>
    </div>

    <div id="popupTerms" class="popupTerms popup">
        <div class="popupWrapper">
            <div class="popupContentWrapper">
                @if( LaravelLocalization::getCurrentLocale()=='de')
                    {!! $settings[8]->settings_value !!}
                @else
                    {!!$settings[9]->settings_value!!}
                @endif
            </div>
            <div class="popupFooter">
                    <button class="button-close popupCloseButton" title="close"></button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!--________SCRIPTS______-->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>

<script src="{{asset('js/index.min.js')}}"></script>

<!--  -->
</body>

</html>
