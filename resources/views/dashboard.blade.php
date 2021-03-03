<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">



<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/vendors/css/tables/datatable/datatables.min.css">


<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/vendors/css/charts/apexcharts.css">


<!-- END: Vendor CSS-->
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/vendors/css/forms/select/select2.min.css">
<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/components.css">
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/themes/dark-layout.css">
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/themes/semi-dark-layout.css">
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/vendors/css/extensions/sweetalert2.min.css">
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/core/colors/palette-gradient.css">

<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/pages/dashboard-ecommerce.css">
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/pages/card-analytics.css">


<!-- END: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/css/pages/app-user.css">
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css"
    href="https://uat.evirtualpay.com/vp_interface/includes_new/assets/css/style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">





<style>
body {
    zoom: 80% !Important;
}

#divLoading {
    display: none;
}

#divLoading.show {
    display: block;
    position: fixed;
    z-index: 100;
    background-image: url('http://loadinggif.com/images/image-selection/3.gif');
    background-color: #666;
    opacity: 0.4;
    background-repeat: no-repeat;
    background-position: center;
    left: 0;
    bottom: 0;
    right: 0;
    top: 0;

}

#loadinggif.show {
    left: 50%;
    top: 50%;
    position: absolute;
    z-index: 101;
    width: 32px;
    height: 32px;
    margin-left: -16px;
    margin-top: -16px;
}
</style>
<!-- END: Custom CSS-->
<style type="text/css">
.breadcrumb-item {
    display: none !important;
}

.header-navbar-shadow {
    background: #1a1423 !important;
}

.btn {
    cursor: pointer;
}
</style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-left-sidebar chat-application navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">


    <div id="divLoading">
    </div>


    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">


        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class=" fa fa-expand      "></i></a></li>
                        </ul>


                    </div>
                    <ul class="nav navbar-nav float-right">
                        <!-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>-->
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="fa fa-expand"></i></a></li>
                        <!--<li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>-->

                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" onclick="open_edit()">
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name text-bold-600">User</span><span
                                        class="user-status">Administrator</span></div><span><img class="round fff"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQUAAADBCAMAAADxRlW1AAABgFBMVEX29vZQmOTsuIk7TlxJMCtxQDL29vfSpXtQmOXsuIr////wvIzxvI7wuYZGNif19/bFmXJIlub/TmvjsYReSTba19VXRDKrel3z2sFlMiZrOSw1IAVCKiemqrY7Tl04SVXp9PyKWkXToHpIkdxdltPOtKAuRFM5GRE+IBlILSQ8Ih7z+fxWldtHKR3Q5Pavzu16STdyPSp1qd5Qc5VtfIa8tLJhT0uWclmQueVbPTHd7PlPc6J3XEKzi2maeVtbRzVqmc3iu5rBj26LosBfcZVvp+E8LiH3kID1UmiCUj5djcapyeivgmJWgq1KZ4HI3vJBWWuUoKpXaHW+x8/p5eSNgX59bmuso6HIwsDCu7iaj4yDdnNuXltTPjkuAwAxDQBCOkNKUGaIZlBEOkJHTF9ENDNrT0R5ncaQo755XkNsTzbov5l5cHtmS1BjYHjixakjDQCWQEZyNjXeUGRiaITAdmX1rov3e3ljVma2n5OGd2ZSWl1Ob4vGpYehjHlIUFQhj/+7AAARRUlEQVR4nO2di1/aVhvHCWrIDYFG5ZVR7kVuVlApagtTV22larXa6+q7jXXtqmv3rnvfXuztX3/POUkgd07AJoHx+2xWRZJzvnlu55Lg8Yw00kgjjTTSSCONNNIgKuB0A9wh0ukGuEDM8bHTTXBczPH9uSjjYZh/qkEwDHP8+MFcLnef8Ty89jgAf+N0m2wU6D7o7nT1/rW5XHR8fPy4Op776RFg8uTpP8A5YOePjx89fvjkx6cnc3O5wjjS02u58fGT4+rTudy/h5tCAFzpRw/vPz2Jgt7ncoXouEx58P9JAZhF9JrT7fyWYpjpJ0/zc6rOa5V7OLyBgSGrYgDoptzQOgTJVE/mcBBACo8YoZAcsrQZYKavzeEhgJp7OIx1Q8Dz5CdMOxAx/IjsYKhQMNMnOSsMoFOcTANzGCYKzONC3iKE8fFo4fFQJQrmoYWIINPcMOXLXiEADPeHBkPvEBCG4YgMzKOfeoYAMDwZDms4LvQBYXwcDDGd7kH/Ipmn1ihEo+qywukuXICYx3OqPhqpAJVffV6rrSo45AbfJ0jPibxH+Xp9t1Frq4UEv2vs1uv1YMrH0yzH8qtK6xj4kRVTlZtCPshCcUjoO+lHVpAXiuaCCica8FE2CUYP16IKCLQXR2xDgeFkwIcTzLTMFAp1FosBEFeTY5ib7hjD4OEIJFZ+6QwfCrscLgTay8mtIb+/kmgfdKAwBDye4kKp9HObQqGGDQFZQz3f9qX8s1JpoYgOSw4UBOAMdzMhqjnfhtDi0EXGx+DrJMxoiUpv3YVuMWBD7cRKmqKopfneLAGKpVuSV8xfB8dKy9xiMIQMgSAIKSwUGpYhALPhJAzzN+HBQqW7g5AyJWMNFIEhgGZTUliItixDQOJaglPkfyGggDkUHe2gJa1lQqjRVFP07FUL8UBpEEJsyD8jBAyhzJrr9zgItsAspENio5uCKRSCvZkCiA0+dIT8ryVCPGR6AXpFwO0xUvQG1OTrKDhGb/QKAZZPyBh+y7SPibzC3RACnsSiaAhQN+cFU2At5UiFeGQM0aZEAXjFYsLtXrG2JYMgpIjo895NgfayKEDKKIBcseXy4CDGRfGqEc/yaPjQOwUYGWC2zMspgNyz5lKnAI0KBK6WlI1FiXKe7tUbhKIBTjbkr8sPDI581aUYAAUlBNDWX1GtgD2S1DcGGB/nlRQgBrc6xdW0sqlE6TcpNvZDAU65qCmAVHHV6e6qRaL/VJYALxgMbPne/QGK9vJ6FITY4CqhGmZNDQHYQr734rkjGBi0FCAGeF63OIYw2E1kNO0UKOz25xCAwo2oHgWCyiQ8LoqRsCFFebEkp1Dw9U2hpU+BCC0W3QMBilnRgYAo9BkWvHAq1oACEVpx1UgbDKB0GkmA6Bh93jaFrjho/e/ZekFdL7QxLLhn8xOpzZGC44JMGa0pHAKuPdBAHKsXM1nxRY6TvwmmSkUFLTsDyJekOyCAyKhNDxIFefnMcrSvXrtxOjV1eqNW15oG3XnRR3Mde/DlZGNKtbklPC6ZjCzqBgWhdpTVTKyvcTrT1qRmXp7bney8PNXwtV/n8/mf9Tm7KDQE9IOCMI4o+ITLTHN8A3XvtNVoNGovT6c0JSUbnDp9CV5stARYNV7kwD2X5pp0lF5wR8WgUy6JFMCYMs8LFEAXQcdadZ6Ga5LA/3ltAmWFF4Hj8PUWtAdxiopt5Z7BoxmghjWksx4BrgOpVymI2p8XZxy54Mz3My0fi1s7cKyvBd4h2AtXz/1iwIBwS9Vw18Af4HW6nhMGlKwPdMnaNAPL1cF7hJLLZ0aBSt91GoFhfkDtI148F7rB1mdmLM/AssGZGWF9l2v98UI3FwunQXnCUTErhqYQWq9y4ZTgA3wDQLA420JzwQYP0iXtZVNhrrpu6HjO54k1w2tEvdjwc0lpLCVt0LBmDeKbuXCS9W+8MDxTGgZIB1MFYxgaqfUNv5dNJmV+QCv+sSAumWS9/g1DawgtOrsp8mraKIMRVT+4mMmyus9wF0/XbqveRJcBBa+/qu98FCykA6RztlBcNLTS9TPY5WSEV/QN+nrDfKzNchpMfARS8J6tG55tkXGwZrhqHBp/p5Epz/KK/nCogGwYY+D4YL0eVJVU/CxwLBAmfzcMkGkHJ2MZQ1MgQpf9AoWUvEOgBpgCmjGakOX4ljCMaMg5sKlZFF78lw0pIGNwSGvGBVOHgsLaX36PKBhs6YAVgjSa8sn+pDsFIu3MXCyc+DQYS8oohGc3FVMFp4jC9/ozsqDCnJmq1YPB4O7LmRmfDM5smO1CgVpxyCUCiZJho0QKrJpCTfAIvcAA/P50qs4LG0FZ38vO9Ay7iUEBFJDOcFgwbpQuBRAvfVMAw8wpr4UA5Dv1cbC+hHGVpTt/g0OBCC04wsBT3DIe4hjYAjB6YOstfQheiYAcGzYFasuZzT7GadKYApx1oy0Pq3AoOJUsTWKjMYVehEchtOIEhKLRhKgjFEAZnXHAJQKmDiGj0O8yJa4tOOISZsWCnEK4jz1NorhdLAqhO/ZTKG6ZN+kHukOhX1sQj0L/YHpKJ7KE8fSK0KTMBmp/BI2DcGQ8E8XVIojChmkkEidbbFXArGRCbULzC2FhTKzfbV4pYwpJRMFf7XLKkO1LE13CAkFRmSt+SEEzzdKhEFTK+A/LkIL/T3NTgLnSbgpMxrxFcPL1ih9QiKgKRVQfog7TPgUEn9cojPIRQMF/ZZ3qQoHK2DvXQpoNqtsYMtUzQCFldI1Zr08Bwch12BSgcFbNdPEHwvbhdcBsLaZzbYj1PyoR3bul4CpcKpXarG8iBOBf8BNPc5KdyMXtRip/rBvOb8op2L0+c6fblUH3R1A3K5GklgLLpcLlSgSpnNxNliPi9+GUztQsCI6VmxgMYMVgLwSTuTYFiuuVCXVgAN1KJSORibbk30aSKQ00OjJRuY5zNnvn3UhhEIHBgWoCCpuc0sjpsJyBWpGwyiXYTUChiXc6MJSwM02YTTMpmgX6taO8usDAld1WMQEu1OEA90GXwS+7JUlRNq9YYqQIRKH0ChqDYtJtc1bsO1KlHObbMULgoRyGctAUXhkvCStOZ3OSuNs9bQl6XQH9kkcGbgdd8d2UWDByfr+fE8vI1C56TW48LA9+UXmN4w9AIVuTRNf6uX11bkIKO53VBTYFTCGyw9fr/9Lqzzq/A8xBtobBol9gpgi7Jx8DXROlRKGJzL/c7heoJicmynR9+zv0hEulqv+p82UYILk2szJyEv19fjoUbB1cdxtFdCgQ7yti5Bd6RsMfNtn69vZ9DQTP5HYdZoSJCSE8snQYMcANC3avSmBTEF0CmsMm2tYFO7nDsb7tye8ePJpWqDozue1jYdwAmOAOsE3BEPAdwubxVACvaEKzgatSBgSVYWpTMAUvPTk5uf2dSuB3nFcwBlBQh8tSBl3FzJOwbLKVgtlShEqvK7LKAHYMFpNcY3tSq224ZsVHOn8qmMJr7HNRW66kAIyhqSkUodfzOhAmJ3kxcijLKNzYCCnYuXRtwRYomTEIQvMuID6CXr/566+/Zrdnwdc30BTQjja6rPzzynvcU9luC9ieKiVLudAV52rbb/6+fenSpdvo66W/32wL6/l876YAopBbKRDEf5XGIFbU9P8uKfU/lB/ZoNKDLEQF2ylYiI7CYEJOQZxx4G7dljG4fUvc9KwcbFXwEwRhb1wgrVEgqD3VqFGqJN++kzjcfvdWrJRSKlPYs3Qmd+YIoW1qn9iRhs4s9/bWu3fvbr1tP7mG3lH7Q7c5VwcpmOyD14FAld4rfSLcvhNG/uQy6CVhpT+8shSA7K6asCtosXWZV1oMqNep8E55R9wtTWsgPLeQH6BsXr3HHVO2MTQ1GFh06WdRpTiLqLBqCKsWIdg6piQ9pFUKWgw7KZ6j272GY04+taOCACOjJQ42T0LjzrLIMKicYiIyUS5H5D9NqLKDZUuwea6JNN/TZIChpC6lTVV5ZR0CYfPjCDBnX5UYiJuruBwqkde4MysKCvbOvprcJ2SGofk+gsWh8mrP+uHtv3fIdK+jGYe97hwqlVc3e4HswG4WiwVDu51Uqfl6wmRpaiISgQx6gmD7Zj/sqXgdDsSH3eSE/iJdJLIT/mCpZlYobfMu4C77/EwV+uDz+TbDScXanLh8HfT5PvTK14G9fok+KUBt7oaTO4hFOVnb3UwJv/3QqyUACgl7IXiY3sIjAV1CoqCvD6Gej7xl+91TlmvotkJXeBMI/JWebcHuTRwedHt1j80NXfF6DTjwvNffBwX7b7juqW4SKfjRLKuahLDj0X+l5+zjwP3WmHt6jCmgjVzaLZ99UFhk7L+nsueKQaKgrx4pUA49laPLRmhtO6FCUCYUaEgBihI3Mlk4hxM3EwZwV2zRxCMQUcpk1l9AbZiYgte/8eIH8DfrmUyphN6GTXnRgbtESGyXgACae0v7B7HsOesHMoMAOQCxZ19jB/tLe80SQWFtb3PsJjqsLAH6kNn7dBCPx8fGxrJf0EJkFwpI7MfYGHhT/ODTXgYLBMgQjtw9RnYfV0IE+zFEYAxRwL59iAMUkOLx2D4E0ZX2ikP33JvthaYEM1jqIACKnYvberpTAB7RfhuwiKWuHBx6Rk3AcAMsJf6X+TQmQwApfMTyBpr2sp+zinfGY5/MOTh1UynQgnEVDe1AxQBQyH7GvIuKPY8p3wmOZWoPdk8ttEWaxcfSnshA0ZvYAw7HGmjvRlxJAXGI7Rmez7GnFcFgZDCwBIawr7YDKT5iGQP3QA1B8Iv9jEEBAYaTzj2fRn9TOEXsxfQhjMXihj4hMxLuS1b/7fExfXNw9sFV6gedCkVvacmAAcTwVcKg83xH8YshBMhhSQ+8s8+tCuhEBsrIG6R+fDYvGlj63BgC8gqXmYJHJzJQmQNTCCBRnJ+ZBAf280czCADDgWZPgwOTTEqp77ynmhCCbmxrK/v1y5nB42nYjXNNdtBiUK1gorvtnX38q/JOCappFBeV5vD1ywanftgjGEJ9/jFubggChpjycxTSd4URhINPcoOPw+58zkem24Vsc8h+/PL5jOPETyVkOXrj8/nXLO7b5RboyJBaLflsS7eYoAIR//jg/AvS+YOv2WwMk4EsNlDCbULOP+vTc0fCQJXMs4MOCYACaQyfAAo68f12ckrfcfrpjkjS+jVFmNQJZl3qRfElyR+cG0Yp1P4IkT0L7tBj52UY9kT7c83HSKAHQmNHxgsSipCUY2NJrVCesBwU+hQKDSE35AdJCTDWs+APF4RhjxI+SMM1WkuXDmyGMDZ2UHLoeYZ6QiXbQg/5oV/Fl9wTFAQxhxil7wUre+iKSkGu4rLdGLLLLigZ1bIbQ3YZpQdXkYAf3HzPTgzZexCC6z7YmbQVgwDBJR+mopR9GBAEd3yIiFZ2YZAswZ0i7QmRMDA6+Fz4biLJog11Q/bQzZbggcGKufytMWQvO7CLy6qYo+y3LKbj2SPGvc7QEZP4hjEyey/hurLZQCg4fJM5FxgSBsESUE3LHMW+hTlkY0eDYggocjGJb5Ays8sD4w2SmKODi+Ig+Fb2YHAMoSNYOlxcssjCiOD6/Kgn5nj5gjjEs8vHA5EftUJR8t4FcIhn7w2iM4iCH7rSP4esyMB1UwmWxBwtZ3HXovUYLA+wHchEMmuHYz0ZRDw7drg2FAzQEJghoUFYAxGHZkAy7p1MsSqhjoIgcEuILEQwcDUShkgSWMThQVcScEvDwSGwgoGOhmYKMMXE0eE9tHEjrhlvxdHv7x0eHRdhceDCidWLU4BhimtHlw+XD8aknSwClIPlw8OjtSIzhH5goAB6xCl53H7QJ7j86KGnA14WWBEp++oJBIYlCfQgUvUTafTS8Mqkn/8UBCONNNJII4000kgDqP8DzEujlmR7bRUAAAAASUVORK5CYII="
                                        height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" id="edit_menu" style="display:none"><a
                                    class="dropdown-item" href=""><i class="  fa fa-edit "></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="/"><i
                                        class=" fa fa-power-off  "></i> Logout</a>
                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="1C5h289Ij2qc89RhfsIGTN4cvsa52ND56aBBHYPq">
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </nav>

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true"
        style="background-color:#1a1423">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="#">

                            <img src="https://uat.evirtualpay.com/vp_interface/includes_new/images//payment.png"
                                alt="branding logo" style="width:100%">
                        </a></li>

                </ul>
        </div>

        <div class="main-menu-content">

            <style>
            .main-menu.menu-light .navigation>li ul li {
                color: white;
                background: #2E2937;
            }
            </style>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">





                <li class=" nav-item" id=""><a href="dashboard"><i class="fa fa-home nav-icon"></i><span
                            class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>






                <li class=" nav-item" id="transactions_li"><a href="monitoring"><i class="fa fa-eye"></i><span
                            class="menu-title" data-i18n="Dashboard" active="true">Monitoring</span></a>
                </li>









                <li class=" nav-item" id="transaction_report_li"><a href=""><i class="fa fa-check-circle"></i><span
                            class="menu-title" data-i18n="Dashboard">Successful
                            Transactions</span></a>
                </li>







                <li class=" nav-item" id="payment_li"><a href=""><i class="fa fa-shopping-bag"></i><span
                            class="menu-title" data-i18n="Dashboard">My Checkout Page</span></a>
                </li>







                <li class=" nav-item" id="refund_li"><a href=""><i class="fa fa-undo"></i><span class="menu-title"
                            data-i18n="Dashboard">Refund Request
                            <button type="button" class="btn btn-danger btn-circle btn-sm" style="width: 30px; 
            height: 30px; 
            padding: 6px 0px; 
            border-radius: 15px; 
            font-size: 11px; 
            text-align: center; ">17 </button>



                        </span></a>

                </li>






                <li class=" nav-item" id="settlement_li"><a href=""><i class="  fa fa-angle-double-right   "></i><span
                            class="menu-title" data-i18n="Dashboard">Settlements</span></a>
                </li>






                <li class=" nav-item" id="settlement_li"><a href=""><i class="fa fa-bars"></i><span class="menu-title"
                            data-i18n="Dashboard">Reports</span></a>
                </li>



                <!--   -->

                <li class=" nav-item"><a href="#"><i class="fa fa-user"></i><span class="menu-title"
                            data-i18n="Ecommerce">User Management</span></a>
                    <ul class="menu-content show" style="background: #2E2937 ;">


                        <li class=" nav-item" id="user_li"><a href=""><i class=" fa fa-user "></i><span
                                    class="menu-title" data-i18n="Dashboard">User
                                    Management</span></a>
                        </li>





                        <li class=" nav-item" id="roles_li"><a href=""><i class="  fa fa-key   "></i><span
                                    class="menu-title" data-i18n="Dashboard">Role
                                    Management</span></a>
                        </li>



                    </ul>

                </li>



                <li class=" nav-item" id="api_li"><a href="#"><i class=" fa fa-plug    "></i><span class="menu-title"
                            data-i18n="Dashboard">My API</span></a>
                    <ul class="menu-content show" style="background: #2E2937 ;">


                        <li class=" nav-item" id="api_li"><a href=""><i class="fa fa-key"></i><span class="menu-title"
                                    data-i18n="Dashboard">API Credentials
                                </span></a>
                        </li>


                        <li class=" nav-item" id="api_li"><a href=""><i class=" fa fa-question-circle "></i><span
                                    class="menu-title" data-i18n="Dashboard">User Guide</span></a>
                        </li>



                    </ul>

                </li>




                <li class=" nav-item"> <a class="dropdown-item" href="/"><i class="fa fa-power-off"></i>
                        Logout</a>
                    <form id="logout-form" action="welcome" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="1C5h289Ij2qc89RhfsIGTN4cvsa52ND56aBBHYPq">
                    </form>

                </li>



                <li class=" nav-item">
                </li>
                <li class=" nav-item">

                </li>
                <li class=" nav-item">

                </li>






            </ul>

            <script>
            function osticket() {
                $("#frm_support").submit();
            }
            </script>


        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">

        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">


            <form method="POST" action="" enctype="multipart/form-data" class="add_user_form" id="export_btn">

                <input type="hidden" name="_token" value="gASzd3tZfEzxPAeUM7HuCairWkiB8sFInBuKWGXG">
                <div class="content-header row">
                    <div class="content-header-left col-md-12 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-8">
                        <div class="card text-center">
                            <div class="card-content">
                                <div class="card-body">
                                    <div style="font-size:40px;display:inline">USD 14,456
                                    </div>
                                    <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                                        <div class="avatar-content">
                                            <i class="fa fa-usd" style="font-size:40px;color:#9D1B92"></i>
                                        </div>
                                    </div>


                                    <div class="card-body">
                                        <div id="goal-overview-chart" class="mt-75"></div>
                                        <div class="row text-center mx-0">
                                            <div
                                                class="col-6 border-top border-right d-flex align-items-between flex-column py-1">
                                                <p class="mb-50">Total Value USD 14,456</p>
                                                <p class="font-large-1 text-bold-700" id="usd_rec"></p>
                                            </div>
                                            <div class="col-6 border-top d-flex align-items-between flex-column py-1">
                                                <p class="mb-70">Refund USD 1,000</p>
                                                <p class="font-large-1 text-bold-700" id="usd_ref"></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>



        </div> -->
        <!-- END: Content-->

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->

        <!-- END: Footer-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js" integrity="sha512-eSeh0V+8U3qoxFnK3KgBsM69hrMOGMBy3CNxq/T4BArsSQJfKVsKb5joMqIPrNMjRQSTl4xG8oJRpgU2o9I7HQ==" crossorigin="anonymous"></script> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA==" crossorigin="anonymous" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"
            integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g=="
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css"
            integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw=="
            crossorigin="anonymous" />

        <!-- BEGIN: Vendor JS-->
        <script src="https://uat.evirtualpay.com/vp_interface/includes_new/app-assets/vendors/js/vendors.min.js">
        </script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <!-- END: Page Vendor JS-->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>



        <!-- BEGIN: Page JS-->

        <!-- Typeahead.js Bundle -->
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


        <script>
        $(window).bind("load", function() {
            $(".nav-item").removeClass('active');
            $("#dashboard_li").addClass('active');
        });

        $(document).ready(function() {
            reload();
        });


        function reload1() {
            reload();

            var ss = $("#stat_filter").val();


            setTimeout(function() {
                $("#stat_filter").val(ss).trigger('change');
            }, 1000);





        }

        function reload() {

            var filter = $("#stat_filter").val();
            var merchant_id = $("#merchant_id").val();
            $.ajax({
                type: "GET",
                url: "https://uat.evirtualpay.com/vp_interface/dashboard/data/" + filter + "/" + merchant_id,
                success: function(data) {

                    data = JSON.parse(data);

                    $("#statistic").html(data.statistic);
                    $("#usd_ref").html(parseFloat(data.usd_ref).toFixed(2));
                    $("#usd_rec").html(parseFloat(data.usd_rec).toFixed(2));
                    $("#gbp_ref").html(parseFloat(data.gbp_ref).toFixed(2));
                    $("#gbp_rec").html(parseFloat(data.gbp_rec).toFixed(2));
                    $("#eur_ref").html(parseFloat(data.eur_ref).toFixed(2));
                    $("#eur_rec").html(parseFloat(data.eur_rec).toFixed(2));
                    $("#kes_rec").html(parseFloat(data.kes_rec).toFixed(2));
                    $("#kes_ref").html(parseFloat(data.kes_ref).toFixed(2));
                    $("#ugx_ref").html(parseFloat(data.ugx_ref).toFixed(2));
                    $("#ugx_rec").html(parseFloat(data.ugx_rec).toFixed(2));
                    $("#tsh_ref").html(parseFloat(data.tsh_ref).toFixed(2));
                    $("#tsh_rec").html(parseFloat(data.tsh_rec).toFixed(2));

                    $("#current_month_amount").html(data.current_month_amount.toFixed(2));
                    $("#last_month_amount").html(data.last_month_amount.toFixed(2));

                    $("#ten_trans").html(data.table_transaction);
                    $("#pending_bank_settlements").html(data.pending_transcation);

                    var usd_rec = parseFloat(data.usd_rec);

                    var usd_ref = parseFloat(data.usd_ref)
                    var usd_per = (usd_rec * 100) / (usd_rec + usd_ref);


                    var gbp_rec = parseFloat(data.gbp_rec);
                    var gbp_ref = parseFloat(data.gbp_ref);
                    var gbp_per = (gbp_rec * 100) / (gbp_rec + gbp_ref);

                    var eur_rec = parseFloat(data.eur_rec);
                    var eur_ref = parseFloat(data.eur_ref);
                    var eur_per = (eur_rec * 100) / (eur_rec + eur_ref);

                    var kes_rec = parseFloat(data.kes_rec);
                    var kes_ref = parseFloat(data.kes_ref);
                    var kes_per = (kes_rec * 100) / (kes_rec + kes_ref);

                    var ugx_rec = parseFloat(data.ugx_rec);
                    var ugx_ref = parseFloat(data.ugx_ref);
                    var ugx_per = (ugx_rec * 100) / (ugx_rec + ugx_ref);

                    var tsh_rec = parseFloat(data.tsh_rec);
                    var tsh_ref = parseFloat(data.tsh_ref);
                    var tsh_per = (tsh_rec * 100) / (tsh_rec + tsh_ref);

                    usd_per = usd_per.toFixed(2);

                    gbp_per = gbp_per.toFixed(2);
                    eur_per = eur_per.toFixed(2);
                    kes_per = kes_per.toFixed(2);
                    ugx_per = ugx_per.toFixed(2);
                    tsh_per = tsh_per.toFixed(2);

                    if (usd_per == 'NaN')
                        usd_per = 0;

                    if (gbp_per == 'NaN')
                        gbp_per = 0;

                    if (eur_per == 'NaN')
                        eur_per = 0;

                    if (kes_per == 'NaN')
                        kes_per = 0;

                    if (ugx_per == 'NaN')
                        ugx_per = 0;

                    if (tsh_per == 'NaN')
                        tsh_per = 0;


                    var $primary = '#7367F0';
                    var $success = '#28C76F';
                    var $danger = '#EA5455';
                    var $warning = '#FF9F43';
                    var $info = '#00cfe8';
                    var $primary_light = '#A9A2F6';
                    var $danger_light = '#f29292';
                    var $success_light = '#55DD92';
                    var $warning_light = '#ffc085';
                    var $info_light = '#1fcadb';
                    var $strok_color = '#b9c3cd';
                    var $label_color = '#e7e7e7';
                    var $white = '#fff';

                    $("#revenue-chart").html('');


                    $("#goal-overview-chart1").html('');

                    $("#goal-overview-chart2").html('');

                    $("#goal-overview-chart3").html('');

                    $("#goal-overview-chart4").html('');

                    $("#goal-overview-chart5").html('');

                    $("#goal-overview-chart").html('');


                    // revenue-chart Chart
                    // -----------------------------

                    var revenueChartoptions = {
                        chart: {
                            height: 270,
                            toolbar: {
                                show: false
                            },
                            type: 'line',
                        },
                        stroke: {
                            curve: 'smooth',
                            dashArray: [0, 8],
                            width: [4, 2],
                        },
                        grid: {
                            borderColor: $label_color,
                        },
                        legend: {
                            show: false,
                        },
                        colors: [$danger_light, $strok_color],

                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                inverseColors: false,
                                gradientToColors: [$primary, $strok_color],
                                shadeIntensity: 1,
                                type: 'horizontal',
                                opacityFrom: 1,
                                opacityTo: 1,
                                stops: [0, 100, 100, 100]
                            },
                        },
                        markers: {
                            size: 0,
                            hover: {
                                size: 5
                            }
                        },
                        xaxis: {
                            labels: {
                                style: {
                                    colors: $strok_color,
                                }
                            },
                            axisTicks: {
                                show: false,
                            },
                            categories: data.cat,
                            axisBorder: {
                                show: false,
                            },
                            tickPlacement: 'on',
                        },
                        yaxis: {
                            tickAmount: 5,
                            labels: {
                                style: {
                                    color: $strok_color,
                                },
                                formatter: function(val) {
                                    return val > 999 ? (val / 1000).toFixed(2) + 'k' : val;
                                }
                            }
                        },
                        tooltip: {
                            x: {
                                show: false
                            }
                        },
                        series: [{
                                name: "This Month",
                                data: data.current_transaction
                            },
                            {
                                name: "Last Month",
                                data: data.last_transaction
                            }
                        ],

                    }

                    var revenueChart = new ApexCharts(
                        document.querySelector("#revenue-chart"),
                        revenueChartoptions
                    );

                    revenueChart.render();












                    // Goal Overview  Chart
                    // -----------------------------

                    var goalChartoptions = {
                        chart: {
                            height: 250,
                            type: 'radialBar',
                            sparkline: {
                                enabled: true,
                            },
                            dropShadow: {
                                enabled: true,
                                blur: 3,
                                left: 1,
                                top: 1,
                                opacity: 0.1
                            },
                        },
                        colors: [$success],
                        plotOptions: {
                            radialBar: {
                                size: 120,
                                startAngle: -150,
                                endAngle: 150,
                                hollow: {
                                    size: '77%',
                                },
                                track: {
                                    background: $strok_color,
                                    strokeWidth: '50%',
                                },
                                dataLabels: {
                                    name: {
                                        show: false
                                    },
                                    value: {
                                        offsetY: 18,
                                        color: '#99a2ac',
                                        fontSize: '3rem'
                                    }
                                }
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                type: 'horizontal',
                                shadeIntensity: 0.5,
                                gradientToColors: ['#00b5b5'],
                                inverseColors: true,
                                opacityFrom: 1,
                                opacityTo: 1,
                                stops: [0, 100]
                            },
                        },
                        series: [usd_per],
                        stroke: {
                            lineCap: 'round'
                        },

                    }

                    var goalChart = new ApexCharts(
                        document.querySelector("#goal-overview-chart"),
                        goalChartoptions
                    );

                    goalChart.render();




                    var goalChartoptions1 = {
                        chart: {
                            height: 250,
                            type: 'radialBar',
                            sparkline: {
                                enabled: true,
                            },
                            dropShadow: {
                                enabled: true,
                                blur: 3,
                                left: 1,
                                top: 1,
                                opacity: 0.1
                            },
                        },
                        colors: [$success],
                        plotOptions: {
                            radialBar: {
                                size: 120,
                                startAngle: -150,
                                endAngle: 150,
                                hollow: {
                                    size: '77%',
                                },
                                track: {
                                    background: $strok_color,
                                    strokeWidth: '50%',
                                },
                                dataLabels: {
                                    name: {
                                        show: false
                                    },
                                    value: {
                                        offsetY: 18,
                                        color: '#99a2ac',
                                        fontSize: '3rem'
                                    }
                                }
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                type: 'horizontal',
                                shadeIntensity: 0.5,
                                gradientToColors: ['#00b5b5'],
                                inverseColors: true,
                                opacityFrom: 1,
                                opacityTo: 1,
                                stops: [0, 100]
                            },
                        },
                        series: [gbp_per],
                        stroke: {
                            lineCap: 'round'
                        },

                    }

                    var goalChart1 = new ApexCharts(
                        document.querySelector("#goal-overview-chart1"),
                        goalChartoptions1
                    );

                    goalChart1.render();




                    var goalChartoptions2 = {

                        chart: {
                            height: 250,
                            type: 'radialBar',
                            sparkline: {
                                enabled: true,
                            },
                            dropShadow: {
                                enabled: true,
                                blur: 3,
                                left: 1,
                                top: 1,
                                opacity: 0.1
                            },
                        },
                        colors: [$success],
                        plotOptions: {
                            radialBar: {
                                size: 120,
                                startAngle: -150,
                                endAngle: 150,
                                hollow: {
                                    size: '77%',
                                },
                                track: {
                                    background: $strok_color,
                                    strokeWidth: '50%',
                                },
                                dataLabels: {
                                    name: {
                                        show: false
                                    },
                                    value: {
                                        offsetY: 18,
                                        color: '#99a2ac',
                                        fontSize: '3rem'
                                    }
                                }
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                type: 'horizontal',
                                shadeIntensity: 0.5,
                                gradientToColors: ['#00b5b5'],
                                inverseColors: true,
                                opacityFrom: 1,
                                opacityTo: 1,
                                stops: [0, 100]
                            },
                        },
                        series: [eur_per],
                        stroke: {
                            lineCap: 'round'
                        },

                    }

                    var goalChart2 = new ApexCharts(
                        document.querySelector("#goal-overview-chart2"),
                        goalChartoptions2
                    );

                    goalChart2.render();




                    var goalChartoptions3 = {

                        chart: {
                            height: 250,
                            type: 'radialBar',
                            sparkline: {
                                enabled: true,
                            },
                            dropShadow: {
                                enabled: true,
                                blur: 3,
                                left: 1,
                                top: 1,
                                opacity: 0.1
                            },
                        },
                        colors: [$success],
                        plotOptions: {
                            radialBar: {
                                size: 120,
                                startAngle: -150,
                                endAngle: 150,
                                hollow: {
                                    size: '77%',
                                },
                                track: {
                                    background: $strok_color,
                                    strokeWidth: '50%',
                                },
                                dataLabels: {
                                    name: {
                                        show: false
                                    },
                                    value: {
                                        offsetY: 18,
                                        color: '#99a2ac',
                                        fontSize: '3rem'
                                    }
                                }
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                type: 'horizontal',
                                shadeIntensity: 0.5,
                                gradientToColors: ['#00b5b5'],
                                inverseColors: true,
                                opacityFrom: 1,
                                opacityTo: 1,
                                stops: [0, 100]
                            },
                        },
                        series: [kes_per],
                        stroke: {
                            lineCap: 'round'
                        },

                    }

                    var goalChart3 = new ApexCharts(
                        document.querySelector("#goal-overview-chart3"),
                        goalChartoptions3
                    );

                    goalChart3.render();


                    var goalChartoptions4 = {

                        chart: {
                            height: 250,
                            type: 'radialBar',
                            sparkline: {
                                enabled: true,
                            },
                            dropShadow: {
                                enabled: true,
                                blur: 3,
                                left: 1,
                                top: 1,
                                opacity: 0.1
                            },
                        },
                        colors: [$success],
                        plotOptions: {
                            radialBar: {
                                size: 120,
                                startAngle: -150,
                                endAngle: 150,
                                hollow: {
                                    size: '77%',
                                },
                                track: {
                                    background: $strok_color,
                                    strokeWidth: '50%',
                                },
                                dataLabels: {
                                    name: {
                                        show: false
                                    },
                                    value: {
                                        offsetY: 18,
                                        color: '#99a2ac',
                                        fontSize: '3rem'
                                    }
                                }
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                type: 'horizontal',
                                shadeIntensity: 0.5,
                                gradientToColors: ['#00b5b5'],
                                inverseColors: true,
                                opacityFrom: 1,
                                opacityTo: 1,
                                stops: [0, 100]
                            },
                        },
                        series: [ugx_per],
                        stroke: {
                            lineCap: 'round'
                        },

                    }


                    var goalChart4 = new ApexCharts(
                        document.querySelector("#goal-overview-chart4"),
                        goalChartoptions4
                    );

                    goalChart4.render();



                    var goalChartoptions5 = {

                        chart: {
                            height: 250,
                            type: 'radialBar',
                            sparkline: {
                                enabled: true,
                            },
                            dropShadow: {
                                enabled: true,
                                blur: 3,
                                left: 1,
                                top: 1,
                                opacity: 0.1
                            },
                        },
                        colors: [$success],
                        plotOptions: {
                            radialBar: {
                                size: 120,
                                startAngle: -150,
                                endAngle: 150,
                                hollow: {
                                    size: '77%',
                                },
                                track: {
                                    background: $strok_color,
                                    strokeWidth: '50%',
                                },
                                dataLabels: {
                                    name: {
                                        show: false
                                    },
                                    value: {
                                        offsetY: 18,
                                        color: '#99a2ac',
                                        fontSize: '3rem'
                                    }
                                }
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                type: 'horizontal',
                                shadeIntensity: 0.5,
                                gradientToColors: ['#00b5b5'],
                                inverseColors: true,
                                opacityFrom: 1,
                                opacityTo: 1,
                                stops: [0, 100]
                            },
                        },
                        series: [tsh_per],
                        stroke: {
                            lineCap: 'round'
                        },

                    }

                    var goalChart5 = new ApexCharts(
                        document.querySelector("#goal-overview-chart5"),
                        goalChartoptions5
                    );

                    goalChart5.render();



                    // Client Retention Chart
                    // ----------------------------------










                    var clientChartoptions = {
                        chart: {
                            stacked: true,
                            type: 'bar',
                            toolbar: {
                                show: false
                            },
                            height: 300,
                        },
                        plotOptions: {
                            bar: {
                                columnWidth: '10%'
                            }
                        },
                        colors: [$primary, $danger],
                        series: [{
                            name: 'New Merchants',
                            data: data.users_data
                        }],
                        grid: {
                            borderColor: $label_color,
                            padding: {
                                left: 0,
                                right: 0
                            }
                        },
                        legend: {
                            show: true,
                            position: 'top',
                            horizontalAlign: 'left',
                            offsetX: 0,
                            fontSize: '14px',
                            markers: {
                                radius: 50,
                                width: 10,
                                height: 10,
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        xaxis: {
                            labels: {
                                style: {
                                    colors: $strok_color,
                                }
                            },
                            axisTicks: {
                                show: false,
                            },
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                                'Oct', 'Nov', 'Dec'
                            ],
                            axisBorder: {
                                show: false,
                            },
                        },
                        yaxis: {
                            tickAmount: 5,
                            labels: {
                                style: {
                                    color: $strok_color,
                                }
                            }
                        },
                        tooltip: {
                            x: {
                                show: false
                            }
                        },
                    }

                    var clientChart = new ApexCharts(
                        document.querySelector("#client-retention-chart"),
                        clientChartoptions
                    );

                    clientChart.render();


                }

            });


        }
        </script>
        <!-- END: Page JS-->

        <script>
        $(document).on('show.bs.modal', '.modal', function() {
            var zIndex = 1040 + (10 * $('.modal:visible').length);
            $(this).css('z-index', zIndex);
            setTimeout(function() {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass(
                    'modal-stack');
            }, 0);
        });

        function open_edit() {
            if ($('#edit_menu').is(':hidden')) {
                $("#edit_menu").show();
            } else {
                $("#edit_menu").hide();
            }
        }
        </script>



</body>
<!-- END: Body-->

</html>