<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
       <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width">
 
    <link rel="stylesheet" href="css/bootstrap.min.css" />**
    <link rel="stylesheet" href="css/elegant.min.css" />***
    <link rel="stylesheet" href="css/color-default.min.css" />**
    <link rel="stylesheet" href="css/perfect-scrollbar.min.css" />***
    <!-- START TEMPLATE GLOBAL CSS -->
    <link rel="stylesheet" href="css/components.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css"/>
    
    <link rel="stylesheet" href="css/font-awesome.min.css"/>**
    
    <!-- END TEMPLATE GLOBAL CSS -->
    <!-- START LAYOUT CSS -->
    <link rel="stylesheet" href="css/layout.css" />
    <!-- END LAYOUT CSS -->

    <title>Dukkangi Admin</title>
</head>
<body>
                                    <!-- Header -->
<div class="wrapper">
    <header id="header">
    <div class="row">
        <div class="col-sm-4 col-xl-2 header-left">
            <div class="logo float-xs-left">
                <a href="#"><img src="../../../assets/global/image/web-logo.png" alt="logo"></a>
            </div>
            <button class="left-menu-toggle float-xs-right">
                <i class="icon_menu toggle-icon"></i>
            </button>
            <button class="right-menu-toggle float-xs-right">
                <i class="arrow_carrot-left toggle-icon"></i>
            </button>
        </div>

        <div class="col-sm-8 col-xl-10 header-right">
            <div class="header-inner-right">

                <div class="float-default chat">
                    <div class="right-icon">
                        <a href="#" data-plugin="fullscreen">
                            <i class="arrow_expand"></i>
                        </a>
                    </div>
                </div>
                <div class="user-dropdown">
                    <div class="btn-group">
                        <a href="#" class="user-header dropdown-toggle" data-toggle="dropdown"
                           data-animation="slideOutUp" aria-haspopup="true"
                           aria-expanded="false">
                            <img src="css/download.png" width="128" height="32" alt="Profile image"/>
                        </a>
                        <div class="dropdown-menu drop-profile">
                            <div class="userProfile">
                                <img src="../../../assets/global/image/img_128x128.png" alt="Profile image"/>
                                <h5>Miler Hussey</h5>
                                <p>milerhussey@yahoo.com</p>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="btn left-spacing link-btn" href="#" role="button">Link</a>
                            <a class="btn left-second-spacing link-btn" href="#" role="button">Link 2</a>
                            <a class="btn btn-primary float-xs-right right-spacing" href="#" role="button">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>





    <!-- Left Side Bar --> 
    <aside id="sidebar">
        <div class="sidebar-search">
            <input id="left-menu-search" type="search" class="form-control input-sm" placeholder="Search...">
            <a href="javascript:void(0)"><i class="search-close icon_search"></i></a>
        </div>
        <div class="sidebar-menu">
            <ul class="nav site-menu live-search-list" id="site-menu" data-plugin="custom-scroll" data-suppress-scroll-x="true" data-height="100%">
                <li class="menu-title"><i class="icon_compass_alt"></i><span>Main Menu</span>
                    <ul class="main-menu">
                        <li class="sub-item">
                            <a href="javascript:void(0)"><span>Dashboard</span>
                                <span class="float-xs-right"><i class="icon_plus"></i></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li>
                                    <a href="dashboard_v1.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="dashboard_v2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="dashboard_v3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="crm_dashboard.html">CRM Dashboard</a>
                                </li>
                                <li>
                                    <a href="hospital_dashboard.html">Hospital Dashboard</a>
                                </li>
                                <li>
                                    <a href="server_dashboard.html">Server Dashboard</a>
                                </li>
                                <li>
                                    <a href="analytics_dashboard.html">Analytics Dashboard</a>
                                </li>
                                <li>
                                    <a href="real_estate_dashboard.html">Real estate Dashboard</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <div class="sidebar-extra">
            <a href="#"><i class="icon_lock-open_alt"></i></a>
            <a href="#"><i class="icon_key_alt"></i></a>
            <a href="#"><i class="icon_lock_alt"></i></a>
        </div>
    </aside>
  <section id="content-wrapper" class="form-elements">
        <!-- START PAGE TITLE -->
        <div class="site-content-title">
            <h2 class="float-xs-left content-title-main" style="margin-top: 50px">Dashboard</h2> 
           <!-- START BREADCRUMB -->
            <ol class="breadcrumb float-xs-right" style="margin-top: 50px">
                <li class="breadcrumb-item">
                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <!-- END BREADCRUMB -->
        </div>
            <!-- END PAGE TITLE -->




            <!-- CONTENT -->
        <div class="contain-inner dashboard-v1">
            <div id="grid">
                
            </div>
        </div>


    </section>

</div>



    <footer id="footer">
        Copyright&copy; 2017, All Rights Reserved.
    </footer>
    <script type="text/javascript" src="js/screenfull.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/thether.min.js"></script>
    <script type="text/javascript" src="js/perfect-scrollbar.jquery.min.js"></script>
    <script type="text/javascript" src="js/site.min.js"></script>
    <script type="text/javascript" src="js/layout.js"></script>
    <script type="text/javascript" src="js/jsgrid.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css"></script>
    <script type="text/javascript" src="js/jsgrid.min.js"></script>
    

    <script>      
    </script>


</body>
</html>