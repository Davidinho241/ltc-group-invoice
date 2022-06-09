<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>
    <link rel="icon" href="{{asset("template/img/logo.png")}}" type="image/png">

    <link rel="stylesheet" href="{{asset("template/css/bootstrap1.min.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/themefy_icon/themify-icons.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/swiper_slider/css/swiper.min.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/select2/css/select2.min.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/niceselect/css/nice-select.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/owl_carousel/css/owl.carousel.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/gijgo/gijgo.min.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/font_awesome/css/all.min.css")}}" />
    <link rel="stylesheet" href="{{asset("template/vendors/tagsinput/tagsinput.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/datatable/css/jquery.dataTables.min.css")}}" />
    <link rel="stylesheet" href="{{asset("template/vendors/datatable/css/responsive.dataTables.min.css")}}" />
    <link rel="stylesheet" href="{{asset("template/vendors/datatable/css/buttons.dataTables.min.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/text_editor/summernote-bs4.css")}}" />

    <link rel="stylesheet" href="{{asset("template/vendors/morris/morris.css")}}">

    <link rel="stylesheet" href="{{asset("template/vendors/material_icon/material-icons.css")}}" />

    <link rel="stylesheet" href="{{asset("template/css/metisMenu.css")}}">

    <link rel="stylesheet" href="{{asset("template/css/style1.css")}}" />
    <link rel="stylesheet" href="{{asset("template/css/colors/default.css")}}" id="colorSkinCSS">
</head>
<body class="crm_body_bg">



<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="/"><img src="{{asset("template/img/logo.png")}}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{asset("template/img/menu-icon/1.svg")}}" alt="">
                <span>Dashboard</span>
            </a>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="{{asset("template/img/menu-icon/6.svg")}}" alt="">
                <span>Service</span>
            </a>
            <ul>
                <li><a href="#">Service 001</a>
                    <ul>
                        <li><a href="$">Transactions</a></li>
                    </ul>
                </li>
                <li><a href="#">Service 002</a>
                    <ul>
                        <li><a href="$">Transactions</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</nav>


<section class="main_content dashboard_part">

    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area">
                        <div class="search_inner">
                            <form action="#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search here...">
                                </div>
                                <button type="submit"> <img src="{{asset("template/img/icon/icon_search.svg")}}" alt=""> </button>
                            </form>
                        </div>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="profile_info">
                            <img src="{{asset("template/img/client_img.png")}}" alt="#">
                            <div class="profile_info_iner">
                                <p>Welcome Admin!</p>
                                <h5>Travor James</h5>
                                <div class="profile_info_details">
                                    <a href="#">Log Out <i class="ti-shift-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">

                                <div class="modal-content cs_modal">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Log in</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row social_login_btn">
                                                <div class="form-group col-md-12 text-center">
                                                    <a href="#" class="btn_1 full_width"><i class="fab fa-facebook-square"></i>Log in with Facebook</a>
                                                </div>
                                                <div class="form-group col-md-12 text-center">
                                                    <a href="#" class="btn_1 full_width"><i class="fab fa-google"></i>Log in with Google</a>
                                                </div>
                                            </div>
                                            <div class="border_style">
                                                <span>Or</span>
                                            </div>
                                            <div class="">
                                                <input type="text" class="form-control" placeholder="Enter your email">
                                            </div>
                                            <div class="">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <a href="#" class="btn_1 full_width text-center">Log in</a>
                                            <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal" href="#"> Sign Up</a></p>
                                            <div class="text-center">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by<a href="#"> David KALLA</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>



<script src="{{asset("template/js/jquery1-3.4.1.min.js")}}"></script>

<script src="{{asset("template/js/popper1.min.js")}}"></script>

<script src="{{asset("template/js/bootstrap1.min.js")}}"></script>

<script src="{{asset("template/js/metisMenu.js")}}"></script>

<script src="{{asset("template/vendors/count_up/jquery.waypoints.min.js")}}"></script>

<script src="{{asset("template/vendors/chartlist/Chart.min.js")}}"></script>

<script src="{{asset("template/vendors/count_up/jquery.counterup.min.js")}}"></script>

<script src="{{asset("template/vendors/swiper_slider/js/swiper.min.js")}}"></script>

<script src="{{asset("template/vendors/niceselect/js/jquery.nice-select.min.js")}}"></script>

<script src="{{asset("template/vendors/owl_carousel/js/owl.carousel.min.js")}}"></script>

<script src="{{asset("template/vendors/gijgo/gijgo.min.js")}}"></script>

<script src="{{asset("template/vendors/datatable/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("template/vendors/datatable/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("template/vendors/datatable/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("template/vendors/datatable/js/buttons.flash.min.js")}}"></script>
<script src="{{asset("template/vendors/datatable/js/jszip.min.js")}}"></script>
<script src="{{asset("template/vendors/datatable/js/pdfmake.min.js")}}"></script>
<script src="{{asset("template/vendors/datatable/js/vfs_fonts.js")}}"></script>
<script src="{{asset("template/vendors/datatable/js/buttons.html5.min.js")}}"></script>
<script src="{{asset("template/vendors/datatable/js/buttons.print.min.js")}}"></script>
<script src="{{asset("template/js/chart.min.js")}}"></script>

<script src="{{asset("template/vendors/progressbar/jquery.barfiller.js")}}"></script>

<script src="{{asset("template/vendors/tagsinput/tagsinput.js")}}"></script>

<script src="{{asset("template/vendors/text_editor/summernote-bs4.js")}}"></script>
<script src="{{asset("template/vendors/apex_chart/apexcharts.js")}}"></script>

<script src="{{asset("template/js/custom.js")}}"></script>


<script src="{{asset("template/js/active_chart.js")}}"></script>
<script src="{{asset("template/vendors/apex_chart/radial_active.js")}}"></script>
<script src="{{asset("template/vendors/apex_chart/stackbar.js")}}"></script>
<script src="{{asset("template/vendors/apex_chart/area_chart.js")}}"></script>
<script src="{{asset("template/vendors/apex_chart/bar_active_1.js")}}"></script>
<script src="{{asset("template/vendors/chartjs/chartjs_active.js")}}"></script>

</body>
</html>
