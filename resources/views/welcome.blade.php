<!DOCTYPE html>
<html class="loaded" lang="en" data-textdirection="ltr" style="--vh:7.31px;">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title>Login - Virtual Pay Portal</title>
    <link rel="apple-touch-icon"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://evirtualpay.com/v2/vp_interface/includes_new/assets/css/style.css">
    <!-- END: Custom CSS-->

    <link rel="icon" href="https://www.virtual-pay.io/wp-content/uploads/2019/06/cropped-VirtualPay-favicon-32x32.png"
        sizes="32x32">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">


</head>


<body
    class="vertical-layout 1-column navbar-floating footer-static bg-full-screen-image blank-page blank-page pace-done menu-hide vertical-overlay-menu"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column" cz-shortcut-listen="true">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>


    <div class="app-content content" style="background-color:#1a1423 !important">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper" style="background-color:#1a1423 !important">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card  rounded-0 mb-0" style="background-color:#2E2937;width:80%">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="https://evirtualpay.com/v2/vp_interface/includes_new/images//payment.png"
                                        alt="branding logo" style="width:80%">
                                </div>

                                <div class="col-lg-6 col-12 p-0 " style="border-left:1px solid lightgrey">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>
                                        </div>
                                        <p class="px-2"></p>

                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <!-- action="https://evirtualpay.com/v2/vp_interface/login -->
                                                <form method="POST" action="">
                                                    <!-- value="IhyhqnrEE6rJYkmpD8qXbP1Kjav5QC2DQMNxUg8e" -->
                                                    <input type="hidden" name="_token" value="">
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input id="email" type="email" class="form-control "
                                                            name="email" value="" required="" autocomplete="email"
                                                            autofocus="">
                                                        <div class="form-control-position">
                                                            <!-- class = "feather" -->
                                                            <i class="fa fa-user icon-user"></i>
                                                        </div>
                                                        <label for="user-name">E-Mail Address</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input id="password" type="password" class="form-control "
                                                            name="password" required="" autocomplete="current-password">
                                                        <div class="form-control-position">
                                                            <!-- class = "feather" -->
                                                            <i class="fa fa-lock icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                    </fieldset>

                                                    <div
                                                        class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <button type=""
                                                                        class="btn btn-primary float-left  waves-effect waves-light"><a
                                                                            href="dashboard">Login</a> </button>
                                                                    &nbsp;&nbsp;&nbsp; <a style="float: right;" href="">
                                                                        Forgot Password</a>

                                                                </div>
                                                            </fieldset>

                                                        </div>



                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>




    <script src="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/vendors/js/vendors.min.js"></script>

    <script src="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/js/core/app-menu.js"></script>
    <script src="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/js/core/app.js"></script>
    <script src="https://evirtualpay.com/v2/vp_interface/includes_new/app-assets/js/scripts/components.js"></script>

</body>

</html>