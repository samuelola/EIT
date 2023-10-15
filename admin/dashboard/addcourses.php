
<?php
ob_start();

session_start(); 
include '../../db.php';

if(isset($_SESSION['user_id'])  && $_SESSION['user_type'] =='admin') {

    $the_id = $_SESSION['user_id'];
   
  
} else {

header("location: ../index.php");


}


//get user info

$sql = "SELECT * FROM school WHERE id = $the_id";

$query = mysqli_query($conn,$sql);

$myrell = mysqli_fetch_array($query);



?>

<!doctype html>
<html lang="en">

<head>

   
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- website favicon -->
    <link rel="shortcut icon" href="./assets/img/icons/2022-06-22/5cae772907d4aa2d77f3674a38eb1180.png" type="image/x-icon">

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> -->
    <!-- Bootstrap CSS -->
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/fontawesome/css/all.min.css"
        rel="stylesheet">



    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/typicons.font/src/font/typicons.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/mmenu-light/dist/mmenu-light.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/OwlCarousel2/css/owl.carousel.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/OwlCarousel2/css/owl.theme.default.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/video-popup/videoPopUp.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/Magnific-Popup/dist/magnific-popup.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/sweetalert/sweet-alert.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/scrolling-tabs/dist/jquery.bs4-scrolling-tabs.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/toastr/toastr.css"
        rel="stylesheet">

    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/datatables/dataTables.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/datatables/dataTables.bootstrap4.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/datatables/responsive.bootstrap4.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/datatables/buttons.bootstrap4.min.css"
        rel="stylesheet">

    <link
        href="application/modules/frontend/views/themes/default/assets/css/style.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/css/frontends.css"
        rel="stylesheet">
    <script
        src="application/modules/frontend/views/themes/default/assets/js/virtualpaginate.js">
    </script>
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/raty/lib/jquery.raty.css"
        rel="stylesheet">
    <link
        href=""
        rel="stylesheet">

    <link href="./assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css"
        rel="stylesheet">
    <link
        href="application/modules/frontend/views/themes/default/assets/plugins/select2/dist/css/select2.min.css"
        rel="stylesheet">
    <link rel="stylesheet"
        href="application/modules/frontend/views/themes/default/assets/css/jquery-ui.css">
    <script
        src="application/modules/frontend/views/themes/default/assets/plugins/jquery/jquery.js">
    </script>
    <script type="text/javascript"
        src="application/modules/frontend/views/themes/default/assets/plugins/bootstrap-3-Typeahead/bootstrap3-typeahead.min.js">
    </script>
    <script
        src="application/modules/frontend/views/themes/default/assets/plugins/Chart.js/chart.min.js">
    </script>

<link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
<link rel="manifest" href="../../favicon/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<title>Eko Institute of Technology</title>
    
<!-- ======================= its must be write here ---------------------/ -->
<!-- Meta Pixel Code -->


</head>
<style>
.typeahead .dropdown-item {
    padding: .25rem 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 26px;
    display: block;
    white-space: break-spaces;
}
</style>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5DHBNS" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- <div class="se-pre-con"></div> -->
    <!-- <input type="hidden" id="base_url" value=""> -->
    <input type="hidden" id="enterprise_id" value="1">
    <input type="hidden" id="enterprise_shortname" value="admin">
    <input type="hidden" id="user_type" value="4">
    <input type="hidden" id="user_id" value="ST16U666R88452">
    <input type="hidden" name="CSRF_TOKEN" id="CSRF_TOKEN" value="db8aa951610e2ecca09a614c7eaac243">
    <input type="hidden" id="api_key" value="">
    <input type="hidden" id="cluster" value="">
    <input type="hidden" id="user_ban_login_message" value="">
    <input type="hidden" id="onlynumber_allow" value="@!#$%^&amp;*()_+[]{}?:;|\/~`-=abcdefghijklmnopqrstuvwxyz&gt;&lt;">
    <input type="hidden" id="security_character" value="@!#$%^&amp;*()_+[]{}?;|&#039;`/&gt;&lt;">
    <input type="hidden" id="coursespecial_character" value="@$^*_[]{}`&gt;&lt;">
    <input type="hidden" id="mail_specialcharacter_remove"
        value="!#$%^&amp;*()_+[]{}?:;|&#039;`/&gt;&lt;">
    <input type="hidden" id="examid" value="">
    <input type="hidden" id="popup" value="">
    <input type="hidden" id="segment1" value="allcourse">
    <input type="hidden" id="segment2" value="">
    <input type="hidden" id="segment3" value="">
    <input type="hidden" id="segment4" value="">
    <input type="hidden" id="segment5" value="">
        <!--Start Back to top button -->
    <button type="button" class="btn btn-outline-dark-cerulean btn-top" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!--End Back to top button -->
    <!--Start Navbar -->
    <nav style="z-index:11"
                    class="position-fixed end-0 start-0 top-0 navbar navbar-expand-lg navbar-light navbar-shadow header-sticky navbar-dark-cerulean"
                    id="navbarSticky">
                                        <div>
                        <a href="#menu" class="navbar-toggler me-2">
                            <span class="navbar-toggler-icon"></span>
                        </a>
                        <a class="navbar-brand ms-0 ms-md-2"
                            href="#">
                            <img src="../../eit-white.png"
                                class="img-fluid" alt="" style="width: 140px;
    height: 140px;">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!--mobile nav and category nav-->
                        
                        <!--Navbar search boxdd-->
                        <div class="input-group  ms-3 me-auto d-none d-xl-flex">
                            <!-- <input type="text" class="form-control uiautocomplete"
                                placeholder="What do you want to learn?" aria-label="Recipient's username"
                                aria-describedby="button-addon2" id="uiitem" name="typeahead" autocomplete="off">
                            <button class="btn btn-dark-cerulean" type="button" id="button-addon2"
                                onclick="typeahead_search()">
                                <svg id="Component_1_1" data-name="Component 1 – 1" xmlns="http://www.w3.org/2000/svg"
                                    width="22.734" height="22.734" viewBox="0 0 22.734 22.734">
                                    <g id="Group_16" data-name="Group 16" transform="translate(3.418 4.928)">
                                        <g id="Group_15" data-name="Group 15">
                                            <path id="Path_5" data-name="Path 5"
                                                d="M79.837,111.222a.84.84,0,0,0-1.188,0,5.74,5.74,0,0,0-1.642,4.653.84.84,0,0,0,.835.756c.028,0,.056,0,.084,0a.84.84,0,0,0,.752-.919,4.067,4.067,0,0,1,1.158-3.3A.839.839,0,0,0,79.837,111.222Z"
                                                transform="translate(-76.978 -110.975)" fill="#fff" />
                                        </g>
                                    </g>
                                    <g id="Group_18" data-name="Group 18">
                                        <g id="Group_17" data-name="Group 17">
                                            <path id="Path_6" data-name="Path 6"
                                                d="M9.6,0a9.6,9.6,0,1,0,9.6,9.6A9.614,9.614,0,0,0,9.6,0Zm0,17.526A7.923,7.923,0,1,1,17.526,9.6,7.932,7.932,0,0,1,9.6,17.526Z"
                                                fill="#fff" />
                                        </g>
                                    </g>
                                    <g id="Group_20" data-name="Group 20" transform="translate(14.951 14.951)">
                                        <g id="Group_19" data-name="Group 19">
                                            <path id="Path_7" data-name="Path 7"
                                                d="M344.246,343.059l-6.1-6.1a.84.84,0,1,0-1.188,1.188l6.1,6.1a.84.84,0,0,0,1.188-1.188Z"
                                                transform="translate(-336.708 -336.71)" fill="#fff" />
                                        </g>
                                    </g>
                                </svg>
                            </button> -->
                        </div>
                        <!-- <div class="input-group  ms-3 me-auto d-none d-xl-flex">
                            <input type="text" class="form-control typeahead" placeholder="What do you want to learn?"
                                aria-label="Recipient's username" aria-describedby="button-addon2" id="item"
                                name="typeahead" autocomplete="off">
                            <button class="btn btn-dark-cerulean" type="button" id="button-addon2"
                                onclick="typeahead_search()">
                                <svg id="Component_1_1" data-name="Component 1 – 1" xmlns="http://www.w3.org/2000/svg"
                                    width="22.734" height="22.734" viewBox="0 0 22.734 22.734">
                                    <g id="Group_16" data-name="Group 16" transform="translate(3.418 4.928)">
                                        <g id="Group_15" data-name="Group 15">
                                            <path id="Path_5" data-name="Path 5"
                                                d="M79.837,111.222a.84.84,0,0,0-1.188,0,5.74,5.74,0,0,0-1.642,4.653.84.84,0,0,0,.835.756c.028,0,.056,0,.084,0a.84.84,0,0,0,.752-.919,4.067,4.067,0,0,1,1.158-3.3A.839.839,0,0,0,79.837,111.222Z"
                                                transform="translate(-76.978 -110.975)" fill="#fff" />
                                        </g>
                                    </g>
                                    <g id="Group_18" data-name="Group 18">
                                        <g id="Group_17" data-name="Group 17">
                                            <path id="Path_6" data-name="Path 6"
                                                d="M9.6,0a9.6,9.6,0,1,0,9.6,9.6A9.614,9.614,0,0,0,9.6,0Zm0,17.526A7.923,7.923,0,1,1,17.526,9.6,7.932,7.932,0,0,1,9.6,17.526Z"
                                                fill="#fff" />
                                        </g>
                                    </g>
                                    <g id="Group_20" data-name="Group 20" transform="translate(14.951 14.951)">
                                        <g id="Group_19" data-name="Group 19">
                                            <path id="Path_7" data-name="Path 7"
                                                d="M344.246,343.059l-6.1-6.1a.84.84,0,1,0-1.188,1.188l6.1,6.1a.84.84,0,0,0,1.188-1.188Z"
                                                transform="translate(-336.708 -336.71)" fill="#fff" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div> -->
                        <ul class="navbar-nav flex-row align-items-center">
                                                        <!-- student purchase  course list-->
                           
                            <!--student-dropdown Notification-->
                                                        <!--student-dropdown wishlist-->
                           
                            
                            <!--student -- dropdown cart-->
                            <!-- cart load here  -->
                            <div class="card_add"></div>
                           
                            <!--student -- dropdown user-->
                            <!-- student notification  -->
                            
                            <!-- student notification end -->
                            <li class="nav-item dropdown dmenu dropdown-user">
                                <a class="nav-link dropdown-toggle" href="#" id="user" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <img class="user-avatar"
                                        src="assets/img/icons/default.png" alt="">
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right sm-menu animate slideIn"
                                    aria-labelledby="user" style="background-color:#333;color:#fff;">
                                    <div class="user-holder">
                                        <div class="user-header">
                                            <div class="align-items-center d-flex mb-3">
                                                <img src="assets/img/icons/default.png"
                                                    alt="" class="img-user rounded-circle mb-0">
                                                <div class="p_info ms-3">
                                                    <h6 class="mb-2 text-white">Samuel                                                    </h6>
                                                    <p class="mb-0">Student
                                                        Account</p>
                                                </div>
                                            </div><!-- img-user -->
                                        </div><!-- user-header -->
                                        <a href="/dashboard/index.php"
                                            class="dropdown-item"><i class="fas fa-building"></i> Dashboard</a>
                                        <a href="./student-profile-dashboard"
                                            class="dropdown-item"><i class="far fa-user"></i>Profile/CV</a>
                                        <a href="./student-activity/"
                                            class="dropdown-item"><i class="fas fa-hospital"></i>Activity</a>
                                        <a href="./student-notification"
                                            class="dropdown-item"><i class="fas fa-clipboard-list"></i>notifications</a>
                                        <!-- <a href="student-settings-affiliation" class="dropdown-item"><i class="fas fa-users"></i>Manage Affiliation</a> -->
                                        <a href="./coming-soon" class="dropdown-item"><i
                                                class="fas fa-users"></i>Manage Affiliation</a>
                                        <a href="./student-settings-account"
                                            class="dropdown-item"><i class="fas fa-cog"></i>Settings</a>
                                        <!-- <a href="student-settings-payments" class="dropdown-item"><i class="fas fa-dollar-sign"></i>Payments & Payouts</a> -->
                                        <a href="./student-settings-payments"
                                            class="dropdown-item"><i class="fas fa-dollar-sign"></i>Payments & Payouts</a>
                                        <a href="../logout"
                                            class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                                        <!-- // #8a8a8a -->
                                    </div>
                                </div>
                            </li>

                            <!-- start instructor menu  -->

                                                    </ul>
                    </div>
                </nav>
                                                <div class="modal m-t-40 " id="modal_info">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h6 class="modal-title modal_ttl"></h6>
                                <!-- <button type="button" class="close" data-bs-dismiss="modal">&times;</button> -->
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body" id="info">

                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--End Navbar-->
                <input type="hidden" id="popup" value="">
                <!--============ its for header file call close =============-->
<!-- Main content -->    

<div class="content_search" style="margin-top:70px">
    <div class="bg-alice-blue py-3 py-lg-4">
    <div class="container-lg">
        <!--Start breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase mb-3 mb-lg-4">
                <!-- <li class="breadcrumb-item"><a href="#">Photo &amp; Video</a></li> -->
                <!-- <li class="breadcrumb-item"><a href="#">Photography</a></li> -->
                <!-- <li class="breadcrumb-item active" aria-current="page">The Art Of Filmmaking And Editing</li> -->
            </ol>
        </nav>
        <!--End breadcrumb-->
        <div class="row">
            <div class="col-md-3 pe-xl-5 d-none d-md-block sticky-content">
                <!--Start Sidebar Filter-->
                <div class="sidebar-filter">
                    <h4 class="fw-bold text-dark-cerulean mb-4"><a
                            href="../dashboard">Dashboard</a></h4>
                    <hr class="my-2 bg-dark-cerulean">
                   
                                                            <h6 class="fw-semi-bold text-dark-cerulean mt-3 cat_radio"><a style="color: #07477D;"
                            href="#">
                            
                            <label
                                class="ms-2">Menu</label></a></h6>
                    <ul class="list-unstyled cat-list my-3 cat_radio">
                        <hr class="my-2 bg-dark-cerulean">

                            <!-- <li>
                                    <a
                                href="#">
                                
                                <label
                                    class="ms-2">Profile</label>
                                </a>
                            </li> -->
                                                                        <li><a
                                href="addcourses">
                                
                                <label
                                    class="ms-2">Add Courses</label></a></li>
                                                <hr class="my-2 bg-dark-cerulean">
                    </ul>

                                                            <!-- <h6 class="fw-semi-bold text-dark-cerulean mt-3 cat_radio"><a style="color: #07477D;"
                            href="category-course/C27KYUDJ">
                            
                            <label
                                class="ms-2">Design</label></a></h6>
                    <ul class="list-unstyled cat-list my-3 cat_radio">
                        <hr class="my-2 bg-dark-cerulean">

                                                                        <li><a
                                href="category-course/C27SXSJW">
                                
                                <label
                                    class="ms-2">UX/UI Design</label></a></li>
                                                                        <li><a
                                href="category-course/C27G9MF4">
                                
                                <label
                                    class="ms-2">Animation</label></a></li>
                                                                        <li><a
                                href="category-course/C13Z8OZN">
                                
                                <label
                                    class="ms-2">Design Software</label></a></li>
                                                                        <li><a
                                href="category-course/C20TNLIZ">
                               
                                <label
                                    class="ms-2">Video Design</label></a></li>
                                                <hr class="my-2 bg-dark-cerulean">
                    </ul> -->

                       

                </div>
                <!--End Sidebar filter-->
            </div>

            <div class="col-md-9 sticky-content">
                                                <!--Start Category Banner-->
                <div class="category-banner text-white p-4 p-sm-5 mb-4 position-relative overflow-hidden">
                    <div class="bottom-0 end-0 position-absolute start-0 top-0">
                        <img src="application/modules/frontend/views/themes/default/assets/img/category-banner-bg.jpg" alt="" class="img-fluid wh-sm-100">
                    </div>
                    <div class="position-relative">
                        <h2 class="fw-semi-bold">Admin Dashboard</h2>
                        <!-- <p class="mb-0">Find what fascinates you as you explore these  courses.</p> -->
                    </div>
                    <!-- <button type="button" class="btn btn-dark-cerulean">Get Started </button> -->
                </div>
                <!--End Category Banner-->
                <!--Start Course Search-->
                
                <!--End Course Search-->
                <!--Start Course Filter-->
                <ul class="list-inline d-flex align-items-center">
                    <li class="list-inline-item me-auto">
                        
                    </li>
                    <li class="list-inline-item d-none d-md-inline-block">
                        <!-- <input type="hidden" value="" id="course_cat_id">
                        <select class="form-select rounded-0" aria-label="Default select example" id="course_filters">
                            <option selected>Type</option>
                            <option value="1">Popular</option>
                            <option value="2">Free</option>
                            <option value="3"> Govt</option>

                        </select> -->
                    </li>
                    <li class="list-inline-item d-none d-md-inline-block">
                        <!-- <select class="form-select rounded-0" aria-label="Default select example" id="daywise_filters">
                            <option selected>Published</option>
                            <option value="7">Last 7 Days</option>
                            <option value="8">Last 1 month</option>
                            
                        </select> -->
                    </li>
                    <!-- <li class="list-inline-item d-none d-md-inline-block">
                                <select class="form-select rounded-0" aria-label="Default select example">
                                    <option selected>Filters</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </li> -->
                    <li class="list-inline-item d-md-none">
                        <button class="btn btn-dark-cerulean btn-filter" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <i class="fas fa-filter"></i>
                        </button>
                    </li>
                </ul>
                <!--End Course Filter-->
                <!--Start offcanvas filter-->
                
                <input type="hidden" name="category_type" id="category_type">
                <div id="alldata">
                    <div class="row justify-content-center gx-3 gy-4">
                        <!-- <input type="hidden" value="" id="category_id"> -->

                                                
                                   <!-- put form course here -->             
                                                
                     <div class="col-md-1">

                     </div>
                     
                     <div class="col-md-10">
                        <h5>Add Course</h5><br>
                     <form action="#" class="myform1" id="learner_myform" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <!-- <input type="hidden" name="csrf_test_name" value="809bef91cc09ca0b1bf24aea2860e2ff" />
                     -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-1" for="email">Course Title</label>
                                    <input class="form-control form-control-lg" name="title" type="text" id="title"
                                        placeholder="Enter your title" tabindex="1" required="" autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="mb-3" style="position : relative">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <label class="form-label mb-0" for="password">Course Description</label><a class="fs-sm" href="#"
                                            class="text-decoration-underline"></a>
                                    </div>
                                    <input class="form-control form-control-lg" name="desc" type="text" id="desc"
                                        placeholder="Enter Description" tabindex="2">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3" style="position : relative">
                                    <div class="d-flex align-items-center justify-content-between mb-1">
                                        <label class="form-label mb-0" for="password">Author</label><a class="fs-sm" href="#"
                                            class="text-decoration-underline"></a>
                                    </div>
                                    <input class="form-control form-control-lg" placeholder="Enter Author" name="author" type="text" id="author"
                                        tabindex="2" required="">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">

                                    <div class="mb-3" style="position : relative">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <label class="form-label mb-0" for="password">Course Level</label><a class="fs-sm" href="#"
                                                class="text-decoration-underline"></a>
                                        </div>
                                        <select name="level" id="level" class="form-control form-control-lg">
                                        <option value="">--Select--</option>
                                            <option value="Beginner Level">Beginner Level</option>
                                            <option value="Intermediate Level">Intermediate Level</option>
                                            <option value="Advanced Level">Advanced Level</option>
                                        </select>
                                        
                                    </div>
                            </div>

                        </div>
                       
                       

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="mb-3" style="position : relative">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <label class="form-label mb-0" for="password">Cover Image</label><a class="fs-sm" href="#"
                                                class="text-decoration-underline"></a>
                                        </div>
                                        <input class="form-control form-control-lg" name="image" type="file" id="image"
                                            tabindex="2" required="">
                                        
                                    </div>
                            </div>
                            <div class="col-md-6">
                                   <div class="mb-3" style="position : relative">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <label class="form-label mb-0" for="password">Discount Price</label><a class="fs-sm" href="#"
                                                class="text-decoration-underline"></a>
                                        </div>
                                        <input class="form-control form-control-lg" placeholder="Enter Discount Price" name="price" type="number" id="price"
                                            tabindex="2">
                                        
                                    </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                    <div class="mb-3" style="position : relative">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <label class="form-label mb-0" for="password">Youtube Link</label><a class="fs-sm" href="#"
                                                class="text-decoration-underline"></a>
                                        </div>
                                        <input placeholder="Enter Youtube Link" class="form-control form-control-lg" name="youtube_link" type="text" id="youtube_link"
                                            tabindex="2" required="">
                                        
                                    </div>
                            </div>
                            <div class="col-md-6">
                                   <div class="mb-3" style="position : relative">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <label class="form-label mb-0" for="password">Price</label><a class="fs-sm" href="#"
                                                class="text-decoration-underline"></a>
                                        </div>
                                        <input class="form-control form-control-lg" name="old_price" type="number" id="old_price"
                                            tabindex="2">
                                        
                                    </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                    <div class="mb-3" style="position : relative">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <label class="form-label mb-0" for="password">Add Category</label><a class="fs-sm" href="#"
                                                class="text-decoration-underline"></a>
                                        </div>
                                        <select name="category" id="category"  class="form-control form-control-lg" onchange="Load_Category(this.value)">

                                        <option value="">--Select Category--</option>

                                        <?php 
                                            $allcategory = "SELECT * FROM category";
                                            $result = mysqli_query($conn, $allcategory);

                                            while($catrow = mysqli_fetch_assoc($result)){

                                                ?><option value="<?php echo $catrow['id']; ?>"><?php echo $catrow['categories']; ?></option><?php

                                            }
                                        
                                        ?>

                                        </select>
                                        
                                        
                                    </div>
                            </div>
                            <div class="col-md-6">
                                   <div class="mb-3" style="position : relative">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <label class="form-label mb-0" for="password">Subcategory</label><a class="fs-sm" href="#"
                                                class="text-decoration-underline"></a>
                                        </div>

                                        <select name="subcategory" id="s_DataO" class="form-control form-control-lg">
                                            <option value="">--select Subcategory--</option>
                                        </select>
                                        
                                        
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="mb-3" style="position : relative">
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <label class="form-label mb-0" for="password">Type</label><a class="fs-sm" href="#"
                                                class="text-decoration-underline"></a>
                                        </div>
                                        <select class="form-control form-control-lg" name="type" id="type">
                                            <option value="free">Free</option>
                                            <option value="Popular">Popular</option>
                                            <option value="Govt">Govt</option>
                                        </select>
                                        
                                    </div>
                            </div>
                            
                        </div>

                        
                        <div class="row">
                            <div class="col-md-6">

                            <button id="admincourse" class="btn btn-dark-cerulean btn-lg w-100 admincourse" type="button"
                            >Add Course</button>
                            </div>
                        </div>
                        

                        
                    </form> 
                     </div>

                     <div class="col-md-1"></div>
                                                
                                               
                                                
                                             
                         
                                            </div>
                                        <div class="text-center mt-5">
                        <!-- <div id="load47">
                            <button type="button" onClick="all_course_load('47')"
                                class="btn btn-lg btn-dark-cerulean load" id="47">
                                Browse more Courses
                                <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="28.56" height="15.666"
                                    viewBox="0 0 28.56 15.666">
                                    <path id="right-arrow_3_" data-name="right-arrow (3)"
                                        d="M20.727,107.5l-1.272,1.272,5.661,5.661H0v1.8H25.116l-5.661,5.661,1.272,1.272,7.833-7.833Z"
                                        transform="translate(0 -107.5)" fill="#fff"></path>
                                </svg>
                            </button>
                        </div> -->
                    </div>
                                    </div>
            </div>
        </div>
    </div>
</div>


<script>
("use strict");

function all_course_load(ids) {

    var enterprise_shortname = $("#enterprise_shortname").val();
    $.ajax({
        type: "POST",
        url: base_url + enterprise_shortname + "/load-more-allcourse",
        cache: false,
        data: {
            lastid: ids,
            enterprise_shortname: enterprise_shortname,
            csrf_test_name: CSRF_TOKEN,
        },
        success: function(response) {
            $("#alldata").append(response);
            $("#load" + ids).remove();
            $(".removebuton_" + ids).remove();
            $(".hideClass .course").each(function(index) {
                var p_course_id = $(this).attr('id');
                $("#course_subscription_" + p_course_id).first().hide();
                $('#course_subscription_' + p_course_id).first().removeClass('d-flex');
            });
            $(".popup-youtube").YouTubePopUp();

        },
    });
}
</script></div>
<!--======== main content close ==========-->


<!--End Newsletter-->
<!--Start Footer-->

<!--Start Sub Footer-->
<div class="main-footer bg-prussian-blue text-white fw-medium py-5">
    <div class="container-lg">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="footer-logo mb-4">
                <img src="../../eit-white.png"
                        class="img-fluid" alt="" style="margin-top: -80px;
    margin-left: -32px;">
                </div>
<!--                <p class="mb-0 text">
                    Inspiring Excellence, Educating Minds!                </p>-->
                <!-- <p>License No. 283870</p> -->
            </div>
            <div class="col-6 col-sm-6 col-md-3 mt-5 mt-md-0">
                <ul class="nav-list list-unstyled mb-0">
                                            <li><a href="about"
                            class="text-white text-decoration-none mb-3 d-inline-block">About Us</a></li>

                        <li><a href="ins-signup"
                            class="text-white text-decoration-none mb-3 d-inline-block">Become an instructor</a></li>
                        
                        <li><a href="coming-soon"
                            class="text-white text-decoration-none mb-3 d-inline-block">Become an enterprise</a></li>
                    <!-- <li><a href=""
                            class="text-white text-decoration-none mb-3 d-inline-block">Become Our partner</a></li> -->
                </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3 mt-5 mt-md-0">
                <ul class="nav-list list-unstyled mb-0">
                    <!-- <li><a href=""
                            class="text-white text-decoration-none mb-3 d-inline-block">Request new course</a></li> -->
                    <li><a href="contact"
                            class="text-white text-decoration-none mb-3 d-inline-block">Contact Us</a></li>
                    <li><a href="faq-page"
                            class="text-white text-decoration-none mb-3 d-inline-block">FAQ</a></li>
                    <li><a href="affiliate" class="text-white text-decoration-none mb-3 d-inline-block">Become an affiliate</a></li>
                    <!-- <li><a href="coming-soon"
                            class="text-white text-decoration-none mb-3 d-inline-block">Feedback</a></li> -->
                    
                </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
                <ul class="nav-list list-unstyled mb-0">

                    <li><a href="terms-condition"
                            class="text-white text-decoration-none mb-3 d-inline-block">Terms &amp; Conditions</a>
                    </li>
                    <li><a href="refund-policy"
                            class="text-white text-decoration-none mb-3 d-inline-block">Refund and Return Policy</a>
                    </li>
                    <li><a href="privacy-policy"
                            class="text-white text-decoration-none mb-3 d-inline-block">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--End Footer-->
<!--Start Sub Footer-->
<div class="sub-footer bg-prussian-blue text-white py-4">
    <div class="container-lg d-sm-flex align-items-center justify-content-between">
        <!-- <div class="text-center text-md-start">
            <span class="copy d-block d-md-inline-block">
                            </span>
        </div> -->
        <!-- <div class="text-center">
            <span class=" d-block d-md-inline-block">
                Secured with SSL            </span>
        </div> -->
        <div class="text-center text-md-start">
            <span class="fw-semi-bold ms-3 px-3 py-2 text-warning"><h4> Hotline +234 9158602376 </h4></span>
        </div>
        <!--Start Footer Social Icon-->
        <!-- lead inhouse by @Salehin 26062022 -->
        <!--Start Footer Social Icon-->
        <ul class="footer-social list-unstyled mb-0 d-flex align-items-center justify-content-center mt-3 mt-sm-0">
            <li class="me-3 d-none d-md-block">Follow Us On : </li>
            <li class="mx-1">
                <a
                    href="https://web.facebook.com/ekoinstituteoftechnology">
                    <!-- <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.234863 8.88536V5.48922C0.325483 5.43618 0.432579 5.41839 0.535563 5.43928H2.26458C2.29982 5.39374 2.32477 5.34117 2.33774 5.28514C2.35072 5.22912 2.3514 5.17096 2.33976 5.11465V3.74121C2.32902 2.92806 2.61143 2.13807 3.13565 1.51485C3.65988 0.891624 4.3911 0.476544 5.1964 0.345065C5.45302 0.302702 5.71325 0.285972 5.97321 0.295122H8.32868C8.3788 0.444951 8.35374 3.36663 8.32868 3.59138C8.22341 3.62423 8.11201 3.63277 8.00293 3.61635H6.29896C6.20148 3.62983 6.11059 3.67309 6.03879 3.74017C5.96699 3.80725 5.91782 3.89485 5.89803 3.99092V4.09081C5.86492 4.48946 5.85655 4.88977 5.87297 5.28945C5.99827 5.43928 6.0985 5.38933 6.22379 5.38933H7.97787C8.07038 5.37416 8.16525 5.38276 8.25351 5.41431C8.0781 6.51306 7.90269 7.63678 7.75234 8.78548C7.12589 8.81045 6.52449 8.7605 5.94815 8.78548C5.8783 8.88778 5.85133 9.01323 5.87297 9.13508V14.6039C5.64745 14.6538 2.66552 14.6788 2.36482 14.6288C2.32371 14.5171 2.30663 14.398 2.3147 14.2792V9.30988C2.33154 9.23772 2.33356 9.16292 2.32064 9.08997C2.30772 9.01701 2.28013 8.94742 2.23952 8.88536H0.234863ZM4.94582 6.3882C4.92885 6.35766 4.92021 6.32322 4.92076 6.28831V3.94098C4.9274 3.79145 4.9704 3.64577 5.04605 3.51646C5.16058 3.27186 5.34035 3.06331 5.56572 2.91358C5.79109 2.76386 6.0534 2.67871 6.32402 2.66743C6.6654 2.63381 7.0088 2.62547 7.35141 2.64245C7.40149 2.2027 7.40149 1.75871 7.35141 1.31896C7.26425 1.28259 7.1702 1.26555 7.07577 1.26902H5.77274C5.58644 1.26927 5.40102 1.29447 5.22146 1.34393C4.70417 1.4743 4.24147 1.76425 3.89944 2.17236C3.55742 2.58048 3.35357 3.08587 3.31703 3.61635C3.34209 4.46538 3.31703 5.28945 3.31703 6.13848C3.31703 6.2134 3.34209 6.31328 3.31703 6.36323C3.29766 6.38273 3.27396 6.39741 3.24784 6.40609C3.22172 6.41476 3.19392 6.41719 3.16668 6.41317H1.58801C1.46272 6.41317 1.33743 6.36323 1.18708 6.48809C1.17058 6.94601 1.17895 7.4045 1.21214 7.86153C1.30883 7.89414 1.41206 7.90271 1.51284 7.8865H2.99127C3.09151 7.91147 3.2168 7.86153 3.31703 7.96141V10.9081C3.31703 11.7321 3.29197 12.5562 3.29197 13.3803C3.2865 13.4248 3.29036 13.47 3.3033 13.513C3.31624 13.5559 3.33798 13.5958 3.36715 13.63C3.88412 13.6844 4.40582 13.676 4.92076 13.605V7.8865H5.89803C6.22366 7.91602 6.55163 7.90764 6.8753 7.86153C7.0006 7.63678 6.95048 7.38706 7.0006 7.16232C7.05303 6.92453 7.07825 6.68159 7.07577 6.43814L4.94582 6.3882Z" fill="white"/>
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><linearGradient id="Ld6sqrtcxMyckEl6xeDdMa" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"/><stop offset="1" stop-color="#007ad9"/></linearGradient><path fill="url(#Ld6sqrtcxMyckEl6xeDdMa)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"/><path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"/>
                </svg>


                </a>
            </li>
            <li class="mx-1">
                <a
                    href="https://www.linkedin.com/company/eko-institute-of-technology/mycompany/?viewAsMember=true">
                    <!-- <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.620618 10.3326C0.745595 10.3201 0.871516 10.3201 0.996493 10.3326C1.73011 10.3908 2.46686 10.3992 3.20162 10.3575C3.82128 10.3467 4.43335 10.2196 5.00582 9.98297C5.05593 9.958 5.13111 9.93302 5.15617 9.88308C5.15775 9.86384 5.16673 9.84595 5.18122 9.83314C5.15617 9.75822 5.08099 9.73325 5.00582 9.70828C4.31574 9.41966 3.76688 8.8727 3.47726 8.18501C3.42714 8.03518 3.35197 7.88535 3.30185 7.71055C3.17752 7.33774 3.00032 6.98456 2.77563 6.66174C2.47605 6.20097 2.31918 5.66252 2.32458 5.1135C2.29952 4.78887 2.32458 4.46424 2.32458 4.13961C2.32458 3.81498 2.47493 4.18955 2.57516 4.08967C2.49376 3.80185 2.42685 3.51014 2.3747 3.21566C2.34518 2.89948 2.35359 2.58093 2.39976 2.26674C2.44138 1.95702 2.52571 1.6545 2.65034 1.36776C2.77727 1.09369 2.91948 0.826904 3.07633 0.568667C3.10887 0.566828 3.14112 0.575576 3.16824 0.593591C3.19536 0.611607 3.21587 0.637915 3.22668 0.668554C3.59321 1.32091 4.11895 1.8706 4.75523 2.26674C5.51414 2.82426 6.34963 3.27 7.236 3.59023C7.53803 3.69147 7.84822 3.76666 8.16316 3.81498C8.19092 3.82665 8.22074 3.83267 8.25086 3.83267C8.28099 3.83267 8.31081 3.82665 8.33857 3.81498C8.3777 3.77637 8.40717 3.72913 8.42458 3.67707C8.44199 3.62501 8.44687 3.5696 8.4388 3.51532C8.49167 2.72466 8.83073 1.98 9.393 1.41968C9.95526 0.859358 10.7025 0.521468 11.4959 0.468781C12.4732 0.393866 13.0746 0.568667 14.0268 1.19296C14.1651 1.21999 14.3086 1.19318 14.4277 1.11804L15.2547 0.768441L15.4301 0.693526C15.5106 0.657031 15.5994 0.642429 15.6874 0.6512C15.7754 0.659972 15.8595 0.691807 15.9312 0.743469C15.9938 0.808609 16.0365 0.890189 16.0543 0.978646C16.072 1.0671 16.0641 1.15877 16.0315 1.2429L15.8811 1.64245C15.9312 1.76731 16.0064 1.74233 16.0816 1.74233C16.5577 1.84222 16.708 2.21679 16.4324 2.61634C16.1787 3.01826 15.8662 3.38018 15.5052 3.69012C15.4158 3.76346 15.3428 3.85471 15.291 3.95795C15.2392 4.06119 15.2097 4.17413 15.2045 4.28944C15.1263 6.1142 14.478 7.86903 13.3502 9.30873C12.2047 10.808 10.5616 11.8524 8.71444 12.2554C7.89315 12.4425 7.05024 12.5181 6.20861 12.4801C5.41012 12.4258 4.62013 12.2835 3.85314 12.0556C3.04967 11.7864 2.28352 11.4173 1.57283 10.9569C1.29719 10.7571 0.996491 10.5823 0.695792 10.4075C0.395093 10.2327 0.620618 10.3825 0.620618 10.3326ZM6.50931 7.63564L5.80768 7.83541L5.15617 8.01021C4.9557 8.08512 4.70512 8.06015 4.52971 8.20998C4.52741 8.23704 4.53066 8.26428 4.53928 8.29004C4.5479 8.3158 4.56169 8.33954 4.57983 8.35981C4.80567 8.59212 5.06806 8.78612 5.35663 8.93416C5.79506 9.08402 6.24893 9.18453 6.70978 9.23382C6.98238 9.24955 7.25185 9.2999 7.51165 9.38365L6.88519 9.83314L6.23367 10.2826C6.02868 10.4274 5.81056 10.5528 5.58216 10.6572C5.35663 10.7821 5.10605 10.857 4.88053 10.9569C4.63991 11.009 4.40493 11.0843 4.17889 11.1816C4.23543 11.2503 4.31606 11.2949 4.40442 11.3065C5.67843 11.6561 7.01631 11.7074 8.31351 11.4563C10.0538 11.1313 11.6091 10.1692 12.6737 8.75936C13.7067 7.46235 14.2951 5.86942 14.3526 4.21452C14.3462 4.01748 14.3833 3.82144 14.4613 3.64023C14.5392 3.45902 14.6561 3.29705 14.8036 3.16572L15.5303 2.54143C15.5614 2.51817 15.5867 2.488 15.6041 2.45333C15.6215 2.41865 15.6305 2.38042 15.6305 2.34165C15.2547 2.31668 14.9038 2.51645 14.5029 2.54143C14.7591 2.27932 15.0017 2.00427 15.2296 1.71736C15.1043 1.64245 15.0542 1.69239 15.0041 1.74233L14.4027 2.01702C14.2598 2.1135 14.0862 2.1541 13.9152 2.13107C13.7441 2.10804 13.5876 2.02298 13.4755 1.89216C13.1794 1.61055 12.8029 1.42734 12.398 1.36776C12.0995 1.32211 11.7965 1.31372 11.4959 1.34279C9.96736 1.49262 9.14043 2.916 9.29078 4.16458C9.34054 4.30174 9.34054 4.45194 9.29078 4.5891C8.79784 4.70972 8.28399 4.71826 7.78729 4.61407C7.19365 4.52217 6.61847 4.33673 6.08332 4.06469C5.15544 3.62823 4.28794 3.07429 3.50232 2.41657C3.48585 2.37923 3.45679 2.3488 3.42018 2.33056C3.38357 2.31231 3.34171 2.30741 3.30185 2.31668C3.25174 2.34165 3.25174 2.3916 3.22668 2.44154C3.14514 3.07604 3.30616 3.71788 3.67773 4.2395C3.8754 4.47788 4.11273 4.68061 4.37936 4.83882L5.15617 5.41316C4.9458 5.48118 4.7258 5.51491 4.50465 5.51305C4.29701 5.54206 4.08782 5.55874 3.8782 5.56299C3.66834 5.53041 3.45373 5.54752 3.25174 5.61294C3.30529 5.86301 3.41402 6.09808 3.57005 6.30108C3.72608 6.50409 3.9255 6.66994 4.15384 6.7866C4.4541 6.96355 4.77355 7.10597 5.10605 7.21112L6.50931 7.63564Z" fill="white"/>
                    </svg> -->
                    <img src="../../iconr.png" width="48px" height="48px"/>


                </a>
            </li>
            <li class="mx-1">
                <a
                    href="https://www.instagram.com/ekoinstituteoftechnology/">
                    <!-- <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.31467 14.6538H3.73134C2.88692 14.6337 2.07507 14.3251 1.43183 13.7795C0.788583 13.234 0.35302 12.4847 0.198119 11.6572C0.148323 11.4022 0.123153 11.1429 0.122947 10.8831V3.99092C0.119881 3.10604 0.437673 2.24983 1.01782 1.57991C1.59798 0.909998 2.40143 0.471474 3.28029 0.345066L3.83157 0.295123H10.8228C11.7766 0.288848 12.6947 0.656585 13.3788 1.31896C13.7401 1.64933 14.029 2.05056 14.2274 2.49747C14.4257 2.94439 14.5293 3.42734 14.5315 3.91601C14.5315 6.31328 14.5565 8.68559 14.5315 11.0579C14.5054 11.9082 14.1878 12.7239 13.6315 13.3691C13.0752 14.0143 12.3139 14.4501 11.4743 14.6039L10.8228 14.6538H7.31467ZM13.3537 7.48695V3.91601C13.3286 3.27069 13.0584 2.65898 12.5978 2.20465C12.1373 1.75032 11.5207 1.4873 10.873 1.46879H3.40558C2.8085 1.57539 2.26892 1.89014 1.88331 2.35676C1.49769 2.82339 1.29118 3.41148 1.30069 4.01589V11.0079C1.28513 11.355 1.363 11.6999 1.52621 12.0068C2.02737 12.9058 2.77912 13.4801 3.85663 13.4801H10.7978C11.0006 13.4798 11.2025 13.4546 11.3992 13.4052C12.5769 13.1305 13.3788 12.0318 13.3537 11.0329V7.48695Z" fill="white"/>
                    <path d="M7.33976 3.81613C9.1189 3.71624 11.0233 5.23951 11.0233 7.48696C11.0234 8.44959 10.6414 9.37316 9.96066 10.0562C9.27996 10.7392 8.35583 11.1262 7.38988 11.1328C6.90075 11.1361 6.4158 11.0429 5.96295 10.8587C5.5101 10.6744 5.0983 10.4027 4.75127 10.0592C4.40423 9.7157 4.12881 9.30716 3.94087 8.85713C3.75293 8.4071 3.65618 7.92446 3.65619 7.43702C3.65619 5.31443 5.53556 3.71624 7.33976 3.81613ZM7.33976 9.98412C7.6719 9.98754 8.00136 9.92444 8.30857 9.79858C8.61578 9.67273 8.89451 9.48667 9.12821 9.25145C9.36191 9.01623 9.54583 8.73663 9.66906 8.42924C9.79229 8.12185 9.85232 7.79293 9.84559 7.46199C9.84575 7.12766 9.77853 6.7967 9.64792 6.48874C9.51732 6.18078 9.32599 5.90209 9.08528 5.6692C8.84457 5.43631 8.55938 5.25397 8.24663 5.13297C7.93388 5.01197 7.59993 4.9548 7.26459 4.96483C6.64044 5.03563 6.06502 5.33521 5.65021 5.80533C5.23541 6.27544 5.01086 6.88248 5.02023 7.50842C5.02961 8.13435 5.27224 8.73444 5.70094 9.19201C6.12964 9.64958 6.71377 9.93191 7.33976 9.98412Z" fill="white"/>
                    <path d="M11.9505 3.61633C11.9551 3.72579 11.9357 3.83493 11.8934 3.93606C11.8511 4.03719 11.7871 4.12786 11.7059 4.20167C11.6247 4.27548 11.5282 4.33064 11.4232 4.36326C11.3183 4.39587 11.2074 4.40516 11.0985 4.39045C10.992 4.38753 10.8872 4.36279 10.7906 4.31778C10.6941 4.27276 10.6079 4.20844 10.5374 4.1288C10.4669 4.04916 10.4136 3.95592 10.3808 3.85487C10.348 3.75382 10.3364 3.64712 10.3468 3.54142C10.3597 3.33387 10.4533 3.13952 10.6077 2.99964C10.7621 2.85976 10.9651 2.78537 11.1737 2.79227C11.2811 2.78815 11.3882 2.80706 11.4877 2.84772C11.5872 2.88837 11.6768 2.94983 11.7505 3.02794C11.8241 3.10605 11.8801 3.199 11.9146 3.3005C11.9491 3.40201 11.9613 3.50971 11.9505 3.61633Z" fill="white"/>
                    </svg> -->

                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"/><stop offset=".328" stop-color="#ff543f"/><stop offset=".348" stop-color="#fc5245"/><stop offset=".504" stop-color="#e64771"/><stop offset=".643" stop-color="#d53e91"/><stop offset=".761" stop-color="#cc39a4"/><stop offset=".841" stop-color="#c837ab"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"/><stop offset=".999" stop-color="#4168c9" stop-opacity="0"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"/><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"/><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"/>
                </svg>

                </a>
            </li>
            <li class="mx-1">
                <a
                    href="https://www.youtube.com/@EkoInnovationCentre">
                    <!-- <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.12004 12.5051H5.06061C4.56653 12.5179 4.07418 12.4418 3.60723 12.2804C2.97296 12.0624 2.40517 11.6865 1.95781 11.1882C1.51045 10.6899 1.19839 10.0859 1.05129 9.43361C0.960134 9.04073 0.918052 8.63813 0.925995 8.23497V4.48923C0.918027 3.98469 1.01176 3.48368 1.20164 3.0159C1.44705 2.33694 1.8769 1.73925 2.44325 1.2895C3.0096 0.839754 3.69018 0.555624 4.40909 0.468797L4.8852 0.418854H13.3048C14.3468 0.418347 15.348 0.822114 16.0964 1.54461C16.8448 2.26711 17.2815 3.25158 17.3141 4.28946V8.63452C17.2858 9.53837 16.9507 10.4059 16.3636 11.0954C15.7764 11.7849 14.9719 12.2554 14.0816 12.4302C13.8005 12.481 13.5153 12.5061 13.2296 12.5051H9.12004ZM9.06993 11.2066H13.0041C13.2391 11.2148 13.4743 11.1981 13.7057 11.1567C14.0608 11.1105 14.4023 10.9911 14.7086 10.8063C15.0149 10.6214 15.2793 10.3751 15.4849 10.0829C15.8084 9.68626 15.9931 9.19526 16.0111 8.68446C16.0111 7.26108 16.0361 5.81272 16.0111 4.36437C16.0041 3.87253 15.8597 3.39237 15.5941 2.97775C15.3285 2.56313 14.9523 2.23045 14.5076 2.01704C14.0621 1.80555 13.5725 1.70283 13.0793 1.71738H5.23601L4.53438 1.76732C4.01647 1.85276 3.53381 2.0838 3.14317 2.43328C2.75253 2.78275 2.47016 3.23613 2.32926 3.74008C2.25749 4.04272 2.22382 4.35309 2.22902 4.66403V8.40977C2.22797 8.65315 2.25318 8.89594 2.3042 9.13395C2.44604 9.72809 2.78603 10.2567 3.26856 10.6332C3.75108 11.0097 4.34756 11.2119 4.96038 11.2066H9.06993Z" fill="white"/>
                    <path d="M11.5507 6.46197C11.3001 6.66174 7.81701 8.73438 7.61655 8.83427V4.08966L11.5507 6.46197Z" fill="white"/>
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px"><linearGradient id="PgB_UHa29h0TpFV_moJI9a" x1="9.816" x2="41.246" y1="9.871" y2="41.301" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f44f5a"/><stop offset=".443" stop-color="#ee3d4a"/><stop offset="1" stop-color="#e52030"/></linearGradient><path fill="url(#PgB_UHa29h0TpFV_moJI9a)" d="M45.012,34.56c-0.439,2.24-2.304,3.947-4.608,4.267C36.783,39.36,30.748,40,23.945,40	c-6.693,0-12.728-0.64-16.459-1.173c-2.304-0.32-4.17-2.027-4.608-4.267C2.439,32.107,2,28.48,2,24s0.439-8.107,0.878-10.56	c0.439-2.24,2.304-3.947,4.608-4.267C11.107,8.64,17.142,8,23.945,8s12.728,0.64,16.459,1.173c2.304,0.32,4.17,2.027,4.608,4.267	C45.451,15.893,46,19.52,46,24C45.89,28.48,45.451,32.107,45.012,34.56z"/><path d="M32.352,22.44l-11.436-7.624c-0.577-0.385-1.314-0.421-1.925-0.093C18.38,15.05,18,15.683,18,16.376	v15.248c0,0.693,0.38,1.327,0.991,1.654c0.278,0.149,0.581,0.222,0.884,0.222c0.364,0,0.726-0.106,1.04-0.315l11.436-7.624	c0.523-0.349,0.835-0.932,0.835-1.56C33.187,23.372,32.874,22.789,32.352,22.44z" opacity=".05"/><path d="M20.681,15.237l10.79,7.194c0.689,0.495,1.153,0.938,1.153,1.513c0,0.575-0.224,0.976-0.715,1.334	c-0.371,0.27-11.045,7.364-11.045,7.364c-0.901,0.604-2.364,0.476-2.364-1.499V16.744C18.5,14.739,20.084,14.839,20.681,15.237z" opacity=".07"/><path fill="#fff" d="M19,31.568V16.433c0-0.743,0.828-1.187,1.447-0.774l11.352,7.568c0.553,0.368,0.553,1.18,0,1.549	l-11.352,7.568C19.828,32.755,19,32.312,19,31.568z"/>
                    </svg>
                </a>
            </li>

           
            
        </ul>
        <!--End Footer Social Icon-->
<!-- lead inhouse by @Salehin 26062022 -->
        <!--End Footer Social Icon-->
    </div>
   
</div>
<!--End Sub Footer-->


<!-- Messenger Chat Plugin Code -->
<!-- <div id="fb-root"></div> -->

<!-- Your Chat Plugin code -->
<!-- <div id="fb-customer-chat" class="fb-customerchat">
</div> -->

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<style type="text/css">
    /* body{
    background-color: #1B1464;
    font-family: "Nunito Sans";
    } */
    .bg-custom{
    background-color:#130f40;
    }
    .button-fixed{
    bottom: 0;
    position: fixed;
    right: 0;
    border-radius: 4px;
    }
    .fas{
    cursor: pointer;
    font-size: 24px;
    }
    p{
    font-size: 14px;
    }
</style>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "439425919585674");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script>

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

$('#accept_cookies').click(function(){
        let reff = $('#reff').val();
		sessionStorage.setItem('acceptCookies','yes');
		$('#cookies_inner').hide();
		// alert('ref='+user_id);
		setCookie("cname", reff, 30);
	});
	if(sessionStorage.getItem('acceptCookies') == 'yes'){
		$('#cookies_inner').hide();
	}else{
		$('#cookies_inner').show();
	}

</script>


<!-- <iframe class="iframe"  src="https://player.vimeo.com/video/629889510?title=0&byline=0&portrait=0&sidedock=0" width="100%" height="430" frameborder="0" webkitallowfullscreen   mozallowfullscreen allowfullscreen> </iframe> -->
<!-- Optional JavaScript -->
<!-- <script
    src="">
</script> -->
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/bootstrap/js/bootstrap.bundle.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/Sortable/Sortable.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/feather-font/feather.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/mmenu-light/dist/mmenu-light.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/jquery.counterup/jquery.waypoints.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/jquery.counterup/jquery.counterup.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/OwlCarousel2/owl.carousel.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/video-popup/videoPopUp.jquery.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/scrolling-tabs/dist/jquery.bs4-scrolling-tabs.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/modernizr/modernizr.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/sweetalert/sweet-alert.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/theia-sticky-sidebar/dist/ResizeSensor.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/theia-sticky-sidebar/dist/theia-sticky-sidebar.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/ckeditor5-classic/ckeditorjss.js"
    type="text/javascript"></script>

<script
    src="">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/raty/lib/jquery.raty.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/js/jquery.easing.min.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/plugins/toastr/toastr.min.js">
</script>

<script
    src="application/modules/frontend/views/themes/default/assets/js/upload.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/js/custom.js">
</script>
<script
    src="application/modules/frontend/views/themes/default/assets/js/frontends.js">
</script>
<!-- <script type="text/javascript" src="http://cdn.rawgit.com/bassjobsen/Bootstrap-3-Typeahead/master/bootstrap3-typeahead.min.js"></script> -->
<script
    src="application/modules/frontend/views/themes/default/assets/js/jquery-ui.min.js">
</script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/decoupled-document/ckeditor.js"></script> -->

<input type="hidden" id="security_character" value="@!#$%^&amp;*()_+[]{}?;|&#039;`/&gt;&lt;">
<input type="hidden" id="mail_specialcharacter_remove" value="!#$%^&amp;*()_+[]{}?:;|&#039;`/&gt;&lt;">
<input type="hidden" id="onlynumber_allow" value="@!#$%^&amp;*()_+[]{}?:;|\/~`-=abcdefghijklmnopqrstuvwxyz&gt;&lt;">
<input type="hidden" id="coursespecial_character" value="@$^*_[]{}`&gt;&lt;">

<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.0-rc.1/dist/js.cookie.min.js"></script>

<script>
$('.live_list').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});
</script>

<!-- edit student  profile  -->
<script>
new Sortable(document.getElementById('customhandle'), {
    handle: '.handle', // handle's class
    animation: 150
});
new Sortable(document.getElementById('customhandle2'), {
    handle: '.handle', // handle's class
    animation: 150
});
new Sortable(document.getElementById('gridDemo'), {
    animation: 150,
    ghostClass: 'blue-background-class'
});
</script>

<!-- student dashboard js  -->

<script>
//========== its for typeahead autocomplete =============
//====header and Home explore search input data get here ===== 

(function($) {
    "use strict";
    $("document").ready(function() {
        var CSRF_TOKEN = $('#CSRF_TOKEN').val();
        $('input.typeahead').typeahead({
            highlight: true,
            minLength: 1,
            source: function(query, result) {
                $.ajax({
                    url: base_url + enterprise_shortname +
                        "/autocomplete-course-search-ex",
                    data: {
                        'csrf_test_name': CSRF_TOKEN,
                        query: query
                    },
                    dataType: "json",
                    type: "POST",
                    success: function(data) {
                        result($.map(data, function(item) {
                            return item.name;
                        }));
                    },
                });
            },
            autoSelect: false
        });
    });

}(jQuery));
(function($) {
    "use strict";

    $("document").ready(function() {
        var CSRF_TOKEN = $('#CSRF_TOKEN').val();
        // $('input.typeahead').typeahead({
        //     highlight: true,
        //     minLength: 1,
        //     source: function(query, result) {
        //         $.ajax({
        //             url: base_url + enterprise_shortname +
        //                 "/autocomplete-course-search-ex",
        //             data: {
        //                 'csrf_test_name': CSRF_TOKEN,
        //                 query: query
        //             },
        //             dataType: "json",
        //             type: "POST",
        //             success: function(data) {
        //                 result($.map(data, function(item) {
        //                     // console.log(item.name);
        //                     return item.value;
        //                 }));
        //             },
        //         });
        //     },
        //     autoSelect: false
        // });

        $(".uiautocomplete").autocomplete({
            source: function(request, response) {
                $.ajax({
                    type: "POST",
                    url: base_url + enterprise_shortname +
                        "/autocomplete-course-search",
                    dataType: "json",
                    data: {
                        'csrf_test_name': CSRF_TOKEN,
                        query: request.term,
                        enterprise_id: enterprise_id,
                    },
                    success: function(data) {
                        $("#ui-id-1").addClass("search_autocomplete");
                        // console.log(data);
                        response(data);
                    }
                });
            },
            minLength: 1,
            select: function(event, ui) {
                $("#uiitem").val(ui.item.value);
                // $("#shapla").val(ui.item.course_id);
            }
        });

    });

}(jQuery));
//=================header search button  tigger ===============
"use strict";

function typeahead_search() {
    var item = $("#uiitem").val();
    var base_url = $("#base_url").val();
    var CSRF_TOKEN = $('#CSRF_TOKEN').val();
    if (item == '') {
        toastrErrorMsg("Empty field not allow!");
        return false;
    }
    // location.href = base_url + enterprise_shortname + "/typeahead-search?keyward=" + item;
    location.href = base_url + "typeahead-search?keyward=" + item;
}

//=================Home explore search buttontigger========
"use strict";

function typeahead_explore_search() {
    var item = $("#items").val();
    var base_url = $("#base_url").val();
    var CSRF_TOKEN = $('#CSRF_TOKEN').val();
    if (item == '') {
        toastrErrorMsg("Empty field not allow!");
        return false;
    }
    // location.href = base_url + enterprise_shortname + "/typeahead-search?keyward=" + item;
    location.href = base_url + "typeahead-search?keyward=" + item;
}

//   course page filtering 
$('#course_filters').on('change', function() {
    var course_type = this.value;

    var cat_id = $("#course_cat_id").val();
    $("#category_type").val(course_type);
    $.ajax({
        url: base_url + enterprise_shortname + "/category-course-filtering",
        type: "POST",
        data: {
            'csrf_test_name': CSRF_TOKEN,
            course_type: course_type,
            category_id: cat_id,
            enterprise_shortname: enterprise_shortname
        },
        success: function(r) {

            $("#alldata").html(r);
            $('.popup-youtube').magnificPopup({
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: true,
                fixedContentPos: true
            });

            $(".hideClass .course").each(function(index) {
                var p_course_id = $(this).attr('id');
                $("#course_subscription_" + p_course_id).first().hide();
                $('#course_subscription_' + p_course_id).first().removeClass('d-flex');
            });

        }
    });


});
//===============category_course_search===input item===========
(function($) {
    "use strict";
    $("document").ready(function() {
        var CSRF_TOKEN = $('#CSRF_TOKEN').val();
        var category_id = $('#category_id').val();
        $('input.typeaheads').typeahead({

            highlight: true,
            minLength: 1,
            source: function(query, result) {
                $.ajax({
                    url: base_url + enterprise_shortname +
                        "/autocomplete-category-wise-course-search",
                    data: {
                        'csrf_test_name': CSRF_TOKEN,
                        query: query,
                        category_id: category_id
                    },
                    dataType: "json",
                    type: "POST",
                    success: function(data) {
                        result($.map(data, function(item) {
                            return item.name;
                        }));
                    },
                });
            }
        });
    });

}(jQuery));
//===============category_course_search= button click=============
"use strict";

function typeahead_category_wise_search() {
    var item = $("#items").val();
    var category_id = $('#category_id').val();
    var base_url = $("#base_url").val();
    var CSRF_TOKEN = $('#CSRF_TOKEN').val();
    if (item == '') {
        toastrErrorMsg("Empty field not allow!");
        return false;
    }
    $.ajax({
        url: base_url + enterprise_shortname + "/category-wise-typeahead-search",
        type: "POST",
        data: {
            'csrf_test_name': CSRF_TOKEN,
            item: item,
            category_id: category_id,
            enterprise_shortname: enterprise_shortname
        },
        success: function(r) {
            $("#alldata").html(r);
            //Popup Video
            $('.popup-youtube').magnificPopup({
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: true,
                fixedContentPos: true
            });

            $(".hideClass .course").each(function(index) {
                var p_course_id = $(this).attr('id');
                $("#course_subscription_" + p_course_id).first().hide();
                $('#course_subscription_' + p_course_id).first().removeClass('d-flex');
            });
        }
    });
}

//   course page filtering 
$('#daywise_filters').on('change', function() {
    var course_type = this.value;
    var cat_id = $("#course_cat_id").val();
    $("#category_type").val(course_type);
    $.ajax({
        url: base_url + enterprise_shortname + "/category-course-filtering",
        type: "POST",
        data: {
            'csrf_test_name': CSRF_TOKEN,
            course_type: course_type,
            category_id: cat_id,
            enterprise_shortname: enterprise_shortname
        },
        success: function(r) {
            $("#alldata").html(r);
            $('.popup-youtube').magnificPopup({
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: true,
                fixedContentPos: true
            });
            $(".hideClass .course").each(function(index) {
                var p_course_id = $(this).attr('id');
                $("#course_subscription_" + p_course_id).first().hide();
                $('#course_subscription_' + p_course_id).first().removeClass('d-flex');
            });
        }
    });


});

$(".uiautocomplete").on("keypress", function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        typeahead_search();
    }
});
$(".typeahead").on("keypress", function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        typeahead_explore_search();
    }
});
// category page 
$(".typeaheads").on("keypress", function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        typeahead_category_wise_search();
    }
});

//  savecourse remove
function deleteSavecourse(status, id) {
    var user_type = $("#user_type").val();
    // var student_id = $("#student_id").val();
    var student_id = $("#user_id").val();
    var r = confirm("Do you want to delete?");
    if (r == true) {
        $.ajax({
            url: base_url + "/frontend/frontend/get_coursesavelandigpage",
            type: "POST",
            data: {
                csrf_test_name: CSRF_TOKEN,
                status: status,
                student_id: student_id,
                course_id: id,
            },
            success: function(r) {
                // alert(course_id);
                if (status == 0) {
                    setTimeout(function() {
                        toastr.options = {
                            closeButton: true,
                            progressBar: true,
                            showMethod: "slideDown",
                            timeOut: 1500,
                            onHidden: function() {},
                        };
                        toastr.success('Delete successfully!');
                    }, 1000);
                }
                $("#deleteSavecourse").load(location.href + " #deleteSavecourse");
                $("#countsavedcourse").load(location.href + " #countsavedcourse");
            },
        });
    }
}
</script>
<script>
    // drag and drop    
var el = document.getElementById('page_list');
var sortable = Sortable.create(el, {

    
    onUpdate: function(event, ui) {
        var page_id_array = new Array();
        $('#page_list .crtificate_order').each(function() {
            page_id_array.push($(this).attr("id"));
        });
        console.log(page_id_array);
        var course_id = $("#course_id").val();
        var enterprise_id = $("#enterprise_id").val();
        var user_id = $("#user_id").val();
        $.ajax({
            url: base_url + enterprise_shortname + "/socialIconOrdering",
            method: "POST",
            data: {
                'csrf_test_name': CSRF_TOKEN,
                page_id_array: page_id_array,
                user_id: user_id,
                enterprise_id: enterprise_id,
                course_id: course_id
            },
            success: function(data) {
                // alert(data);
                console.log(data);
            }
        });
    }

});
new Sortable(el, {
    placeholder: "ui-state-highlight",
    ghostClass: 'blue-background-class',
    sort: true,
    handle: ".handle",
    draggable: "id",

});
</script>

<script type="text/javascript">
 $("document").ready(function() {   
    var segment2 = $("#segment2").val();
    
function load_notify_counter() {
    if(segment2 == 'forum-details'){
        return false;
    }
    $.ajax({
        url: base_url + enterprise_shortname + '/nofity_counter',
        type: "POST",
        data: {
            csrf_test_name: CSRF_TOKEN,
            user_id: "ST16U666R88452",
            enterprise_id: "1",
        },
        success: function(r) {
            jQuery("#notify_counter").html(r);
        },
    });
    return false;
}
setInterval(function my_function() {
    if(segment2 == 'forum-details'){
        return false;
    }
    load_notify_counter();
    $("#notifications").load(window.location.href + " #notifications");
    $('.notifications-scroll').each(function() {
        const ps = new PerfectScrollbar($(this)[0]);
    });
}, 2000);
});
$("document").ready(function() {
    load_notify_counter();
    if(segment2 == 'forum-details'){
        return false;
    }
    $("#notifications").load(window.location.href + " #notifications");
    $('.notifications-scroll').each(function() {
        const ps = new PerfectScrollbar($(this)[0]);
    });
});

$("body").on('click', "#read_notificaiton", function() {
    var id = $(this).attr("data-id");
    var userntype = $("#instructor").val();
    var typ = $("#typ").val();
    $.ajax({
        url: base_url + enterprise_shortname + '/nofity-read',
        type: "POST",
        data: {
            csrf_test_name: CSRF_TOKEN,
            user_id: "ST16U666R88452",
            enterprise_id: "1",
            id: id,
        },
        success: function(r) {
            if (typ == 1) {
                if(userntype =="instructor"){
                    location.href = base_url + enterprise_shortname + '/instructor-notifications/';
                }else{

                    // location.href = base_url + enterprise_shortname + '/course-details/' + id;
                    location.href = base_url + enterprise_shortname + '/student-notification/';
                }
            } else if (typ == 2) {
                location.href = base_url + enterprise_shortname + '/event-details/' + id;
            } else if (typ == 3) {
                location.href = base_url + enterprise_shortname + '/forum-details/' + id;

            } else if (typ == 6) {

                location.href = base_url + enterprise_shortname + '/student-notification/';

            }
            load_notify_counter();
            // location.href = base_url + enterprise_shortname + '/forum-details/'+id;
        },
    });
    return false;

});


// course subscription and purchase maintanance 






</script>

<script>
    $(document).ready(function (e) {

        $(document).on('click', '#admincourse', function(event){

           event.preventDefault();  
           
           var formData = new FormData(document.getElementById("learner_myform"));

            var title = $("#title").val();
            var desc = $("#desc").val();
            var level = $("#level").val();
            var author = $("#author").val();
            var image = $("#image").val();
            var price = $("#price").val();
            var category = $("#category").val();
            var subcategory = $("#subcategory").val();
            var type = $("#type").val();

            if (title == "") {
               
               toastrErrorMsg("Title field is required!");
               return false;
           }

        //    if (desc == "") {
               
        //        toastrErrorMsg("Description field is required!");
        //        return false;
        //    }

           if (author == "") {
               
               toastrErrorMsg("Author field is required!");
               return false;
           }

           if (level == "") {
               
               toastrErrorMsg("Level field is required!");
               return false;
           }

           

           if (image == "") {
               
               toastrErrorMsg("Image field is required!");
               return false;
           }

        //    if (price == "") {
               
        //        toastrErrorMsg("Price field is required!");
        //        return false;
        //    }

           if (type == "") {
               
               toastrErrorMsg("Type field is required!");
               return false;
           }

           if (category == "") {
               
               toastrErrorMsg("Category field is required!");
               return false;
           }

           if (subcategory == "") {
               
               toastrErrorMsg("Subcategory field is required!");
               return false;
           }

           

           $.ajax({

            url:'addadmincourse.php',
                type: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function() { 
      
                $(".admincourse").prop('disabled', true); // disable button
                
                    $('.admincourse').html('<div id="spin" class="spinner-border" style="width: 1.5rem;height: 1.5rem;position: relative;top: 2px;"></div>');
                },
                success: function (data) {

                    console.log(data);

                    if(data){
                       
                       setTimeout(function () {
                           toastr.options = {
                           closeButton: true,
                           progressBar: true,
                           showMethod: "slideDown",
                           timeOut: 1500,
                           onHidden: function () {
                               window.location.href = "./";
                           },
                           };
                           toastr.success(data);
                       }, 1000);
                       

                       
                   }
                }
                
           });



           $( "#spin" ).show();
          setTimeout(removeLoader, 500);


        });
    });
    
</script>

<script>

function removeLoader(){
    $( "#spin" ).fadeOut(500, function() {

        $(".admincourse").prop('disabled', false);
        $('.admincourse').html('Sign In');
  });  
}
</script>

<script>
    function Load_Category(id){

        console.log(id);    
    
    var url = "getSubcat.php"; 
    var id = id;
    
    $.ajax({
        url : url,
        type: "POST",
        data:{id:id},
        success: function(data)
        {
            $('#s_DataO').html(data)
			console.log(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error');
        }
    });

    
}
    
</script>


</body>

</html>
