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

    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap" rel="stylesheet">

    <!--  -->
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">

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
        <div id="loginPage" class="loginPage page">

            <main class="main">

                <h1 class="title">@lang('Sign In')</h1>

                <img src="{{asset('img/login.png')}}" alt="" class="small-img">

                <div class="form-wrapper">
                    <form action="{{ route('create-user') }}" method="POST" class="form form--sign-in form-val-js">
                        @csrf
                        <div class="form-row">
                            <div class="radio-wrapper--two-items">
                                <div class="radio-item">
                                    <label class="radio-label">
                                        <input value="female" name="gender" type="radio" class="form-radio form-radio--hidden" data-validate="required">
                                        <span class="radiobtn"></span>
                                        <span class="form-radio-subtitle">@lang('Female')</span>
                                    </label>
                                </div>

                                <div class="radio-item">
                                    <label class="radio-label">
                                        <input value="male" name="gender" type="radio" class="form-radio form-radio--hidden" data-validate="required">
                                        <span class="radiobtn"></span>
                                        <span class="form-radio-subtitle">@lang('Male')</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <div class="form-row">
                                <label for="first_name" class="label">@lang('First name')</label>

                                <div class="input-item input-item--with-ico">
                                    <img src="{{asset('img/icons/user-gray.png')}}" alt="" class="input-img">
                                    <input name="first_name" type="text" id="first_name" class="input" data-validate="required">
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="second_name" class="label">@lang('Second name')</label>

                                <div class="input-item input-item--with-ico">
                                    <img src="{{asset('img/icons/user-gray.png')}}" alt="" class="input-img">
                                    <input name="second_name" type="text" id="second_name" class="input" data-validate="required">
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="email" class="label">Email</label>

                                <div class="input-item input-item--with-ico">
                                    <img src="{{asset('img/icons/mail-gray.png')}}" alt="" class="input-img">
                                    <input name="email" type="email" id="email" class="input" data-validate="required">
                                </div>
                            </div>
                        </div>

                        <div class="form-button-wrap">
                            <button class="button button--big">@lang('Sign In')</button>
                        </div>
                    </form>
                </div>

            </main>
        </div>

        <!-- End of page code insertion here -->

    </div>
    <!--  -->

    <!--  -->

    <!--  -->
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


