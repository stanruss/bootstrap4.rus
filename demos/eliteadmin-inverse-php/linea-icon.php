<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"> <a class="logo" href="index.php"><b><!--This is dark logo icon--><img src="../plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="../plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- .Megamenu -->
                    <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Forms Elements</li>
                                    <li><a href="form-basic.php">Basic Forms</a></li>
                                    <li><a href="form-layout.php">Form Layout</a></li>
                                    <li><a href="form-advanced.php">Form Addons</a></li>
                                    <li><a href="form-material-elements.php">Form Material</a></li>
                                    <li><a href="form-float-input.php">Form Float Input</a></li>
                                    <li><a href="form-upload.php">File Upload</a></li>
                                    <li><a href="form-mask.php">Form Mask</a></li>
                                    <li><a href="form-img-cropper.php">Image Cropping</a></li>
                                    <li><a href="form-validation.php">Form Validation</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Advance Forms</li>
                                    <li><a href="form-dropzone.php">File Dropzone</a></li>
                                    <li><a href="form-pickers.php">Form-pickers</a></li>
                                    <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                                    <li><a href="form-wizard.php">Form-wizards</a></li>
                                    <li><a href="form-typehead.php">Typehead</a></li>
                                    <li><a href="form-xeditable.php">X-editable</a></li>
                                    <li><a href="form-summernote.php">Summernote</a></li>
                                    <li><a href="form-bootstrap-wysihtml5.php">Bootstrap wysihtml5</a></li>
                                    <li><a href="form-tinymce-wysihtml5.php">Tinymce wysihtml5</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Table Example</li>
                                    <li><a href="basic-table.php">Basic Tables</a></li>
                                    <li><a href="table-layouts.php">Table Layouts</a></li>
                                    <li><a href="data-table.php">Data Table</a></li>
                                    <li class="hidden"><a href="crud-table.php">Crud Table</a></li>
                                    <li><a href="bootstrap-tables.php">Bootstrap Tables</a></li>
                                    <li><a href="responsive-tables.php">Responsive Tables</a></li>
                                    <li><a href="editable-tables.php">Editable Tables</a></li>
                                    <li><a href="foo-tables.php">FooTables</a></li>
                                    <li><a href="jsgrid.php">JsGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Charts</li>
                                    <li> <a href="flot.php">Flot Charts</a> </li>
                                    <li><a href="morris-chart.php">Morris Chart</a></li>
                                    <li><a href="chart-js.php">Chart-js</a></li>
                                    <li><a href="peity-chart.php">Peity Charts</a></li>
                                    <li><a href="knob-chart.php">Knob Charts</a></li>
                                    <li><a href="sparkline-chart.php">Sparkline charts</a></li>
                                    <li><a href="extra-charts.php">Extra Charts</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-12 m-t-40 demo-box">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-purple"><a href="../eliteadmin-inverse/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 1</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-success"><a href="../eliteadmin/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 2</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-info"><a href="../eliteadmin-ecommerce/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 3</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-inverse"><a href="../eliteadmin-horizontal-navbar/index3.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 4</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-warning"><a href="../eliteadmin-iconbar/index4.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 5</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-danger"><a href="https://themeforest.net/item/elite-admin-responsive-web-app-kit-/16750820" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br/>Buy Now</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav><!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.php"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                <!-- /input-group -->
            </li>
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right">4</span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="index.php">Minimalistic</a> </li>
                    <li> <a href="index2.php">Demographical</a> </li>
                    <li> <a href="index3.php">Analitical</a> </li>
                    <li> <a href="index4.php">Simpler</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> Multipurpose <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">HOT</span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="../eliteadmin-hospital/index.html">Hospital Admin</a> </li>
                    <li> <a href="../eliteadmin-crm/index.html">CRM Admin</a> </li>
                    <li> <a href="../eliteadmin-university/index.html">University Admin</a> </li>
                    <li> <a href="../eliteadmin-music/index.html">Music Admin</a> </li>
                    <li> <a href="../eliteadmin-real-estate/index.html">Real Estate Admin</a> </li>
                    <li role="separator" class="divider"></li>
                    <li> <a href="../eliteadmin-inverse/index.html">Inverse</a></li>
                    <li> <a href="../eliteadmin-colors/index.html">Colors</a></li>
                    <li> <a href="../eliteadmin/index.html">Eliteadmin</a></li>
                    <li> <a href="../eliteadmin-wpmenu/index.html">Wpmenu</a></li>
                    <li> <a href="../eliteadmin-ecommerce/index.html">Ecommerce</a></li>
                    <li> <a href="../eliteadmin-modern/index.html">Modern</a></li>
                    <li> <a href="../eliteadmin-inverse-php/index.php">Basic PHP</a></li>
                    <li> <a href="../eliteadmin-material/index3.html">Material Design</a></li>
                    <li> <a href="../eliteadmin-dark/index.html">Dark</a></li>
                    <li> <a href="../eliteadmin-mini-sidebar/index3.html">Mini Sidebar</a></li>
                    <li> <a href="../eliteadmin-horizontal-navbar/index3.html">Horizontal Boxed Nav</a></li>
                    <li> <a href="../eliteadmin-horizontal-nav-fullwidth/index.html">Horizontal Full Nav</a></li>
                    <li> <a href="../eliteadmin-iconbar/index4.html">Iconbar</a></li>
                    <li> <a href="../eliteadmin-rtl/index.html">Eliteadmin RTL</a></li>
                    <li> <a href="../eliteadmin-inverse-rtl/index.html">Inverse RTL</a></li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                <ul class="nav nav-second-level">
                    <li><a href="cards.html">Cards</a></li>
                    <li><a href="panels-wells.html">Panels and Wells</a></li>
                    <li><a href="panel-ui-block.html">Panels With BlockUI</a></li>
                    <li><a href="panel-draggable.html">Draggable Panel</a></li>
                    <li><a href="portlet-draggable.html">Draggable Portlet</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="bootstrap-switch.html">Bootstrap Switch</a></li>
                    <li><a href="date-paginator.html">Date Paginator</a></li>
                    <li><a href="sweatalert.php">Sweat alert</a></li>
                    <li><a href="typography.php">Typography</a></li>
                    <li><a href="grid.php">Grid</a></li>
                    <li><a href="tabs.php">Tabs</a></li>
                    <li><a href="tab-stylish.php">Stylish Tabs</a></li>
                    <li><a href="modals.php">Modals</a></li>
                    <li><a href="progressbars.php">Progress Bars</a></li>
                    <li><a href="notification.php">Notifications</a></li>
                    <li><a href="carousel.php">Carousel</a></li>
                    <li><a href="list-style.php">List & Media object</a></li>
                    <li><a href="user-cards.php">User Cards</a></li>
                    <li><a href="timeline.php">Timeline</a></li>
                    <li><a href="timeline-horizontal.php">Horizontal Timeline</a></li>
                    <li><a href="nestable.php">Nesteble</a></li>
                    <li><a href="range-slider.php">Range Slider</a></li>
                    <li><a href="ribbons.html">Ribbons</a></li>
                    <li><a href="steps.html">Steps</a></li>
                    <li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>
                    <li><a href="session-timeout.html">Session Timeout</a></li>
                    <li><a href="tooltip-stylish.php">Stylish Tooltip</a></li>
                    <li><a href="bootstrap.php">Bootstrap UI</a></li>
                </ul>
            </li>
            <li> <a href="forms.php" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="form-basic.php">Basic Forms</a></li>
                    <li><a href="form-layout.php">Form Layout</a></li>
                    <li><a href="form-advanced.php">Form Addons</a></li>
                    <li><a href="form-material-elements.php">Form Material</a></li>
                    <li><a href="form-float-input.php">Form Float Input</a></li>
                    <li><a href="form-upload.php">File Upload</a></li>
                    <li><a href="form-mask.php">Form Mask</a></li>
                    <li><a href="form-img-cropper.php">Image Cropping</a></li>
                    <li><a href="form-validation.php">Form Validation</a></li>
                    <li><a href="form-dropzone.php">File Dropzone</a></li>
                    <li><a href="form-pickers.php">Form-pickers</a></li>
                    <li><a href="icheck-control.html">Icheck Form Controls</a></li>
                    <li><a href="form-wizard.php">Form-wizards</a></li>
                    <li><a href="form-typehead.php">Typehead</a></li>
                    <li><a href="form-xeditable.php">X-editable</a></li>
                    <li><a href="form-summernote.php">Summernote</a></li>
                    <li><a href="form-bootstrap-wysihtml5.php">Bootstrap wysihtml5</a></li>
                    <li><a href="form-tinymce-wysihtml5.php">Tinymce wysihtml5</a></li>
                </ul>
            </li>
            <li class="nav-small-cap">--- Proffessional</li>
            <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="starter-page.php">Starter Page</a></li>
                    <li><a href="blank.php">Blank Page</a></li>
                    <li><a href="javascript:void(0)" class="waves-effect">Email Templates<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="../email-templates/basic.php">Basic</a></li>
                            <li> <a href="../email-templates/alert.php">Alert</a></li>
                            <li> <a href="../email-templates/billing.php">Billing</a></li>
                            <li> <a href="../email-templates/password-reset.php">Reset Pwd</a></li>
                        </ul>
                    </li>
                    <li><a href="lightbox.php">Lightbox Popup</a></li>
                    <li><a href="treeview.php">Treeview</a></li>
                    <li><a href="search-result.php">Search Result</a></li>
                    <li><a href="utility-classes.php">Utility Classes</a></li>
                    <li><a href="custom-scroll.php">Custom Scrolls</a></li>
                    <li><a href="login.php">Login Page</a></li>
                    <li><a href="login2.php">Login v2</a></li>
                    <li><a href="animation.php">Animations</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="invoice.php">Invoice</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="register2.php">Register v2</a></li>
                    <li><a href="recoverpw.php">Recover Password</a></li>
                    <li><a href="lock-screen.php">Lock Screen</a></li>
                    <li><a href="400.php">Error 400</a></li>
                    <li><a href="403.php">Error 403</a></li>
                    <li><a href="404.php">Error 404</a></li>
                    <li><a href="500.php">Error 500</a></li>
                    <li><a href="503.php">Error 503</a></li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Charts<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="flot.php">Flot Charts</a> </li>
                    <li><a href="morris-chart.php">Morris Chart</a></li>
                    <li><a href="chart-js.php">Chart-js</a></li>
                    <li><a href="peity-chart.php">Peity Charts</a></li>
                    <li><a href="knob-chart.php">Knob Charts</a></li>
                    <li><a href="sparkline-chart.php">Sparkline charts</a></li>
                    <li><a href="extra-charts.php">Extra Charts</a></li>
                </ul>
            </li>
            <li> <a href="tables.php" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="basic-table.php">Basic Tables</a></li>
                    <li><a href="table-layouts.php">Table Layouts</a></li>
                    <li><a href="data-table.php">Data Table</a></li>
                    <li class="hidden"><a href="crud-table.php">Crud Table</a></li>
                    <li><a href="bootstrap-tables.php">Bootstrap Tables</a></li>
                    <li><a href="responsive-tables.php">Responsive Tables</a></li>
                    <li><a href="editable-tables.php">Editable Tables</a></li>
                    <li><a href="foo-tables.php">FooTables</a></li>
                    <li><a href="jsgrid.php">JsGrid Tables</a></li>
                </ul>
            </li>
            <li> <a href="widgets.php" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
            <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="fontawesome.php">Font awesome</a> </li>
                    <li> <a href="themifyicon.php">Themify Icons</a> </li>
                    <li> <a href="simple-line.php">Simple line Icons</a> </li>
                    <li><a href="linea-icon.php">Linea Icons</a></li>
                    <li><a href="weather.php">Weather Icons</a></li>
                </ul>
            </li>
            <li><a href="inbox.php" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">New</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="chat.php">Chat-message</a></li>
                    <li><a href="javascript:void(0)" class="waves-effect">Inbox<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="inbox.php">Mail box</a></li>
                            <li> <a href="inbox-detail.php">Inbox detail</a></li>
                            <li> <a href="compose.php">Compose mail</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="waves-effect">Contacts<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="contact.php">Contact1</a></li>
                            <li> <a href="contact2.php">Contact2</a></li>
                            <li> <a href="contact-detail.php">Contact Detail</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> <a href="map-google.php" class="waves-effect"><i data-icon="Q" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Google Map</span></a> </li>
            <li> <a href="map-vector.php" class="waves-effect"><i data-icon="S" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Vector Map</span></a> </li>
            <li> <a href="calendar.php" class="waves-effect"><i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                    <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="login.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
            <li class="nav-small-cap">--- Support</li>
            <li><a href="documentation.php" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
            <li><a href="gallery.php" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
            <li><a href="faq.php" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li>
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Starter Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb"><li><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-inverse-php/index.php">Dashboard</a></li><li class="active">Linea icon</li></ol>                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Basic Icons</h3>
                        <p class="text-muted m-b-30">Use <code>linea-basic</code> class like :<code> &lt;div data-icon="a" class="linea-icon linea-basic"&gt;&lt;div&gt; </code></p>
                        <ul class="glyphs character-mapping">
                            <li>
                                <div data-icon="a" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="a"> </li>
                            <li>
                                <div data-icon="b" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="b"> </li>
                            <li>
                                <div data-icon="c" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="c"> </li>
                            <li>
                                <div data-icon="d" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="d"> </li>
                            <li>
                                <div data-icon="e" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="e"> </li>
                            <li>
                                <div data-icon="f" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="f"> </li>
                            <li>
                                <div data-icon="g" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="g"> </li>
                            <li>
                                <div data-icon="h" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="h"> </li>
                            <li>
                                <div data-icon="i" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="i"> </li>
                            <li>
                                <div data-icon="j" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="j"> </li>
                            <li>
                                <div data-icon="k" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="k"> </li>
                            <li>
                                <div data-icon="l" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="l"> </li>
                            <li>
                                <div data-icon="m" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="m"> </li>
                            <li>
                                <div data-icon="n" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="n"> </li>
                            <li>
                                <div data-icon="o" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="o"> </li>
                            <li>
                                <div data-icon="p" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="p"> </li>
                            <li>
                                <div data-icon="q" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="q"> </li>
                            <li>
                                <div data-icon="r" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="r"> </li>
                            <li>
                                <div data-icon="s" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="s"> </li>
                            <li>
                                <div data-icon="t" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="t"> </li>
                            <li>
                                <div data-icon="u" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="u"> </li>
                            <li>
                                <div data-icon="v" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="v"> </li>
                            <li>
                                <div data-icon="w" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="w"> </li>
                            <li>
                                <div data-icon="x" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="x"> </li>
                            <li>
                                <div data-icon="y" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="y"> </li>
                            <li>
                                <div data-icon="z" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="z"> </li>
                            <li>
                                <div data-icon="A" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="A"> </li>
                            <li>
                                <div data-icon="B" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="B"> </li>
                            <li>
                                <div data-icon="C" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="C"> </li>
                            <li>
                                <div data-icon="D" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="D"> </li>
                            <li>
                                <div data-icon="E" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="E"> </li>
                            <li>
                                <div data-icon="F" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="F"> </li>
                            <li>
                                <div data-icon="G" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="G"> </li>
                            <li>
                                <div data-icon="H" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="H"> </li>
                            <li>
                                <div data-icon="I" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="I"> </li>
                            <li>
                                <div data-icon="J" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="J"> </li>
                            <li>
                                <div data-icon="K" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="K"> </li>
                            <li>
                                <div data-icon="L" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="L"> </li>
                            <li>
                                <div data-icon="M" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="M"> </li>
                            <li>
                                <div data-icon="N" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="N"> </li>
                            <li>
                                <div data-icon="O" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="O"> </li>
                            <li>
                                <div data-icon="P" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="P"> </li>
                            <li>
                                <div data-icon="Q" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="Q"> </li>
                            <li>
                                <div data-icon="R" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="R"> </li>
                            <li>
                                <div data-icon="S" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="S"> </li>
                            <li>
                                <div data-icon="T" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="T"> </li>
                            <li>
                                <div data-icon="U" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="U"> </li>
                            <li>
                                <div data-icon="V" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="V"> </li>
                            <li>
                                <div data-icon="W" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="W"> </li>
                            <li>
                                <div data-icon="X" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="X"> </li>
                            <li>
                                <div data-icon="Y" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="Y"> </li>
                            <li>
                                <div data-icon="Z" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="Z"> </li>
                            <li>
                                <div data-icon="0" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="0"> </li>
                            <li>
                                <div data-icon="1" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="1"> </li>
                            <li>
                                <div data-icon="2" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="2"> </li>
                            <li>
                                <div data-icon="3" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="3"> </li>
                            <li>
                                <div data-icon="4" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="4"> </li>
                            <li>
                                <div data-icon="5" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="5"> </li>
                            <li>
                                <div data-icon="6" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="6"> </li>
                            <li>
                                <div data-icon="7" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="7"> </li>
                            <li>
                                <div data-icon="8" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="8"> </li>
                            <li>
                                <div data-icon="9" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="9"> </li>
                            <li>
                                <div data-icon="!" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="!"> </li>
                            <li>
                                <div data-icon="&#34;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&quot;"> </li>
                            <li>
                                <div data-icon="#" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="#"> </li>
                            <li>
                                <div data-icon="$" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="$"> </li>
                            <li>
                                <div data-icon="%" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="%"> </li>
                            <li>
                                <div data-icon="&" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;"> </li>
                            <li>
                                <div data-icon="'" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&#39;"> </li>
                            <li>
                                <div data-icon="(" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="("> </li>
                            <li>
                                <div data-icon=")" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value=")"> </li>
                            <li>
                                <div data-icon="*" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="*"> </li>
                            <li>
                                <div data-icon="+" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="+"> </li>
                            <li>
                                <div data-icon="," class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value=","> </li>
                            <li>
                                <div data-icon="-" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="-"> </li>
                            <li>
                                <div data-icon="." class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="."> </li>
                            <li>
                                <div data-icon="/" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="/"> </li>
                            <li>
                                <div data-icon=":" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value=":"> </li>
                            <li>
                                <div data-icon=";" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value=";"> </li>
                            <li>
                                <div data-icon="<" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&lt;"> </li>
                            <li>
                                <div data-icon="=" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="="> </li>
                            <li>
                                <div data-icon=">" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&gt;"> </li>
                            <li>
                                <div data-icon="?" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="?"> </li>
                            <li>
                                <div data-icon="@" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="@"> </li>
                            <li>
                                <div data-icon="[" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="["> </li>
                            <li>
                                <div data-icon="]" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="]"> </li>
                            <li>
                                <div data-icon="^" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="^"> </li>
                            <li>
                                <div data-icon="_" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="_"> </li>
                            <li>
                                <div data-icon="`" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="`"> </li>
                            <li>
                                <div data-icon="{" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="{"> </li>
                            <li>
                                <div data-icon="|" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="|"> </li>
                            <li>
                                <div data-icon="}" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="}"> </li>
                            <li>
                                <div data-icon="~" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="~"> </li>
                            <li>
                                <div data-icon="\" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="\"> </li>
                            <li>
                                <div data-icon="&#xe000;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe000;"> </li>
                            <li>
                                <div data-icon="&#xe001;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe001;"> </li>
                            <li>
                                <div data-icon="&#xe002;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe002;"> </li>
                            <li>
                                <div data-icon="&#xe003;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe003;"> </li>
                            <li>
                                <div data-icon="&#xe004;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe004;"> </li>
                            <li>
                                <div data-icon="&#xe005;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe005;"> </li>
                            <li>
                                <div data-icon="&#xe006;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe006;"> </li>
                            <li>
                                <div data-icon="&#xe007;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe007;"> </li>
                            <li>
                                <div data-icon="&#xe008;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe008;"> </li>
                            <li>
                                <div data-icon="&#xe009;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe009;"> </li>
                            <li>
                                <div data-icon="&#xe00a;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00a;"> </li>
                            <li>
                                <div data-icon="&#xe00b;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00b;"> </li>
                            <li>
                                <div data-icon="&#xe00c;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00c;"> </li>
                            <li>
                                <div data-icon="&#xe00d;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00d;"> </li>
                            <li>
                                <div data-icon="&#xe00e;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00e;"> </li>
                            <li>
                                <div data-icon="&#xe00f;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00f;"> </li>
                            <li>
                                <div data-icon="&#xe010;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe010;"> </li>
                            <li>
                                <div data-icon="&#xe011;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe011;"> </li>
                            <li>
                                <div data-icon="&#xe012;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe012;"> </li>
                            <li>
                                <div data-icon="&#xe013;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe013;"> </li>
                            <li>
                                <div data-icon="&#xe014;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe014;"> </li>
                            <li>
                                <div data-icon="&#xe015;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe015;"> </li>
                            <li>
                                <div data-icon="&#xe016;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe016;"> </li>
                            <li>
                                <div data-icon="&#xe017;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe017;"> </li>
                            <li>
                                <div data-icon="&#xe018;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe018;"> </li>
                            <li>
                                <div data-icon="&#xe019;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe019;"> </li>
                            <li>
                                <div data-icon="&#xe01a;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01a;"> </li>
                            <li>
                                <div data-icon="&#xe01b;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01b;"> </li>
                            <li>
                                <div data-icon="&#xe01c;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01c;"> </li>
                            <li>
                                <div data-icon="&#xe01d;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01d;"> </li>
                            <li>
                                <div data-icon="&#xe01e;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01e;"> </li>
                            <li>
                                <div data-icon="&#xe01f;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01f;"> </li>
                            <li>
                                <div data-icon="&#xe020;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe020;"> </li>
                            <li>
                                <div data-icon="&#xe021;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe021;"> </li>
                            <li>
                                <div data-icon="&#xe022;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe022;"> </li>
                            <li>
                                <div data-icon="&#xe023;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe023;"> </li>
                            <li>
                                <div data-icon="&#xe024;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe024;"> </li>
                            <li>
                                <div data-icon="&#xe025;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe025;"> </li>
                            <li>
                                <div data-icon="&#xe026;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe026;"> </li>
                            <li>
                                <div data-icon="&#xe027;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe027;"> </li>
                            <li>
                                <div data-icon="&#xe028;" class="linea-icon linea-basic"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe028;"> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Basic Elaborate Icons</h3>
                        <p class="text-muted m-b-30">Use <code>linea-elaborate</code> class like :<code> &lt;div data-icon="a" class="linea-icon linea-elaborate"&gt;&lt;div&gt; </code></p>
                        <ul class="glyphs character-mapping">
                            <li>
                                <div data-icon="a" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="a"> </li>
                            <li>
                                <div data-icon="b" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="b"> </li>
                            <li>
                                <div data-icon="c" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="c"> </li>
                            <li>
                                <div data-icon="d" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="d"> </li>
                            <li>
                                <div data-icon="e" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="e"> </li>
                            <li>
                                <div data-icon="f" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="f"> </li>
                            <li>
                                <div data-icon="g" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="g"> </li>
                            <li>
                                <div data-icon="h" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="h"> </li>
                            <li>
                                <div data-icon="i" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="i"> </li>
                            <li>
                                <div data-icon="j" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="j"> </li>
                            <li>
                                <div data-icon="k" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="k"> </li>
                            <li>
                                <div data-icon="l" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="l"> </li>
                            <li>
                                <div data-icon="m" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="m"> </li>
                            <li>
                                <div data-icon="n" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="n"> </li>
                            <li>
                                <div data-icon="o" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="o"> </li>
                            <li>
                                <div data-icon="p" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="p"> </li>
                            <li>
                                <div data-icon="q" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="q"> </li>
                            <li>
                                <div data-icon="r" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="r"> </li>
                            <li>
                                <div data-icon="s" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="s"> </li>
                            <li>
                                <div data-icon="t" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="t"> </li>
                            <li>
                                <div data-icon="u" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="u"> </li>
                            <li>
                                <div data-icon="v" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="v"> </li>
                            <li>
                                <div data-icon="w" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="w"> </li>
                            <li>
                                <div data-icon="x" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="x"> </li>
                            <li>
                                <div data-icon="y" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="y"> </li>
                            <li>
                                <div data-icon="z" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="z"> </li>
                            <li>
                                <div data-icon="A" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="A"> </li>
                            <li>
                                <div data-icon="B" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="B"> </li>
                            <li>
                                <div data-icon="C" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="C"> </li>
                            <li>
                                <div data-icon="D" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="D"> </li>
                            <li>
                                <div data-icon="E" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="E"> </li>
                            <li>
                                <div data-icon="F" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="F"> </li>
                            <li>
                                <div data-icon="G" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="G"> </li>
                            <li>
                                <div data-icon="H" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="H"> </li>
                            <li>
                                <div data-icon="I" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="I"> </li>
                            <li>
                                <div data-icon="J" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="J"> </li>
                            <li>
                                <div data-icon="K" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="K"> </li>
                            <li>
                                <div data-icon="L" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="L"> </li>
                            <li>
                                <div data-icon="M" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="M"> </li>
                            <li>
                                <div data-icon="N" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="N"> </li>
                            <li>
                                <div data-icon="O" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="O"> </li>
                            <li>
                                <div data-icon="P" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="P"> </li>
                            <li>
                                <div data-icon="Q" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="Q"> </li>
                            <li>
                                <div data-icon="R" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="R"> </li>
                            <li>
                                <div data-icon="S" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="S"> </li>
                            <li>
                                <div data-icon="T" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="T"> </li>
                            <li>
                                <div data-icon="U" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="U"> </li>
                            <li>
                                <div data-icon="V" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="V"> </li>
                            <li>
                                <div data-icon="W" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="W"> </li>
                            <li>
                                <div data-icon="X" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="X"> </li>
                            <li>
                                <div data-icon="Y" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="Y"> </li>
                            <li>
                                <div data-icon="Z" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="Z"> </li>
                            <li>
                                <div data-icon="0" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="0"> </li>
                            <li>
                                <div data-icon="1" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="1"> </li>
                            <li>
                                <div data-icon="2" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="2"> </li>
                            <li>
                                <div data-icon="3" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="3"> </li>
                            <li>
                                <div data-icon="4" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="4"> </li>
                            <li>
                                <div data-icon="5" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="5"> </li>
                            <li>
                                <div data-icon="6" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="6"> </li>
                            <li>
                                <div data-icon="7" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="7"> </li>
                            <li>
                                <div data-icon="8" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="8"> </li>
                            <li>
                                <div data-icon="9" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="9"> </li>
                            <li>
                                <div data-icon="!" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="!"> </li>
                            <li>
                                <div data-icon="&#34;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&quot;"> </li>
                            <li>
                                <div data-icon="#" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="#"> </li>
                            <li>
                                <div data-icon="$" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="$"> </li>
                            <li>
                                <div data-icon="%" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="%"> </li>
                            <li>
                                <div data-icon="&" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;"> </li>
                            <li>
                                <div data-icon="'" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&#39;"> </li>
                            <li>
                                <div data-icon="(" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="("> </li>
                            <li>
                                <div data-icon=")" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value=")"> </li>
                            <li>
                                <div data-icon="*" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="*"> </li>
                            <li>
                                <div data-icon="+" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="+"> </li>
                            <li>
                                <div data-icon="," class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value=","> </li>
                            <li>
                                <div data-icon="-" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="-"> </li>
                            <li>
                                <div data-icon="." class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="."> </li>
                            <li>
                                <div data-icon="/" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="/"> </li>
                            <li>
                                <div data-icon=":" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value=":"> </li>
                            <li>
                                <div data-icon=";" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value=";"> </li>
                            <li>
                                <div data-icon="<" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&lt;"> </li>
                            <li>
                                <div data-icon="=" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="="> </li>
                            <li>
                                <div data-icon=">" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&gt;"> </li>
                            <li>
                                <div data-icon="?" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="?"> </li>
                            <li>
                                <div data-icon="@" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="@"> </li>
                            <li>
                                <div data-icon="[" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="["> </li>
                            <li>
                                <div data-icon="]" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="]"> </li>
                            <li>
                                <div data-icon="^" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="^"> </li>
                            <li>
                                <div data-icon="_" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="_"> </li>
                            <li>
                                <div data-icon="`" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="`"> </li>
                            <li>
                                <div data-icon="{" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="{"> </li>
                            <li>
                                <div data-icon="|" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="|"> </li>
                            <li>
                                <div data-icon="}" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="}"> </li>
                            <li>
                                <div data-icon="~" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="~"> </li>
                            <li>
                                <div data-icon="\" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="\"> </li>
                            <li>
                                <div data-icon="&#xe000;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe000;"> </li>
                            <li>
                                <div data-icon="&#xe001;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe001;"> </li>
                            <li>
                                <div data-icon="&#xe002;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe002;"> </li>
                            <li>
                                <div data-icon="&#xe003;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe003;"> </li>
                            <li>
                                <div data-icon="&#xe004;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe004;"> </li>
                            <li>
                                <div data-icon="&#xe005;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe005;"> </li>
                            <li>
                                <div data-icon="&#xe006;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe006;"> </li>
                            <li>
                                <div data-icon="&#xe007;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe007;"> </li>
                            <li>
                                <div data-icon="&#xe008;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe008;"> </li>
                            <li>
                                <div data-icon="&#xe009;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe009;"> </li>
                            <li>
                                <div data-icon="&#xe00a;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00a;"> </li>
                            <li>
                                <div data-icon="&#xe00b;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00b;"> </li>
                            <li>
                                <div data-icon="&#xe00c;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00c;"> </li>
                            <li>
                                <div data-icon="&#xe00d;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00d;"> </li>
                            <li>
                                <div data-icon="&#xe00e;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00e;"> </li>
                            <li>
                                <div data-icon="&#xe00f;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00f;"> </li>
                            <li>
                                <div data-icon="&#xe010;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe010;"> </li>
                            <li>
                                <div data-icon="&#xe011;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe011;"> </li>
                            <li>
                                <div data-icon="&#xe012;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe012;"> </li>
                            <li>
                                <div data-icon="&#xe013;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe013;"> </li>
                            <li>
                                <div data-icon="&#xe014;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe014;"> </li>
                            <li>
                                <div data-icon="&#xe015;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe015;"> </li>
                            <li>
                                <div data-icon="&#xe016;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe016;"> </li>
                            <li>
                                <div data-icon="&#xe017;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe017;"> </li>
                            <li>
                                <div data-icon="&#xe018;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe018;"> </li>
                            <li>
                                <div data-icon="&#xe019;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe019;"> </li>
                            <li>
                                <div data-icon="&#xe01a;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01a;"> </li>
                            <li>
                                <div data-icon="&#xe01b;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01b;"> </li>
                            <li>
                                <div data-icon="&#xe01c;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01c;"> </li>
                            <li>
                                <div data-icon="&#xe01d;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01d;"> </li>
                            <li>
                                <div data-icon="&#xe01e;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01e;"> </li>
                            <li>
                                <div data-icon="&#xe01f;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01f;"> </li>
                            <li>
                                <div data-icon="&#xe020;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe020;"> </li>
                            <li>
                                <div data-icon="&#xe021;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe021;"> </li>
                            <li>
                                <div data-icon="&#xe022;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe022;"> </li>
                            <li>
                                <div data-icon="&#xe023;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe023;"> </li>
                            <li>
                                <div data-icon="&#xe024;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe024;"> </li>
                            <li>
                                <div data-icon="&#xe025;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe025;"> </li>
                            <li>
                                <div data-icon="&#xe026;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe026;"> </li>
                            <li>
                                <div data-icon="&#xe027;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe027;"> </li>
                            <li>
                                <div data-icon="&#xe028;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe028;"> </li>
                            <li>
                                <div data-icon="&#xe029;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe029;"> </li>
                            <li>
                                <div data-icon="&#xe02a;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02a;"> </li>
                            <li>
                                <div data-icon="&#xe02b;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02b;"> </li>
                            <li>
                                <div data-icon="&#xe02c;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02c;"> </li>
                            <li>
                                <div data-icon="&#xe02d;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02d;"> </li>
                            <li>
                                <div data-icon="&#xe02e;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02e;"> </li>
                            <li>
                                <div data-icon="&#xe02f;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02f;"> </li>
                            <li>
                                <div data-icon="&#xe030;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe030;"> </li>
                            <li>
                                <div data-icon="&#xe031;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe031;"> </li>
                            <li>
                                <div data-icon="&#xe032;" class="linea-icon linea-elaborate"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe032;"> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Ecommerece Icons</h3>
                        <p class="text-muted m-b-30">Use <code>linea-ecommerce</code> class like :<code> &lt;div data-icon="a" class="linea-icon linea-ecommerce"&gt;&lt;div&gt; </code></p>
                        <ul class="glyphs character-mapping">
                            <li>
                                <div data-icon="a" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="a"> </li>
                            <li>
                                <div data-icon="b" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="b"> </li>
                            <li>
                                <div data-icon="c" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="c"> </li>
                            <li>
                                <div data-icon="d" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="d"> </li>
                            <li>
                                <div data-icon="e" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="e"> </li>
                            <li>
                                <div data-icon="f" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="f"> </li>
                            <li>
                                <div data-icon="g" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="g"> </li>
                            <li>
                                <div data-icon="h" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="h"> </li>
                            <li>
                                <div data-icon="i" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="i"> </li>
                            <li>
                                <div data-icon="j" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="j"> </li>
                            <li>
                                <div data-icon="k" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="k"> </li>
                            <li>
                                <div data-icon="l" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="l"> </li>
                            <li>
                                <div data-icon="m" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="m"> </li>
                            <li>
                                <div data-icon="n" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="n"> </li>
                            <li>
                                <div data-icon="o" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="o"> </li>
                            <li>
                                <div data-icon="p" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="p"> </li>
                            <li>
                                <div data-icon="q" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="q"> </li>
                            <li>
                                <div data-icon="r" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="r"> </li>
                            <li>
                                <div data-icon="s" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="s"> </li>
                            <li>
                                <div data-icon="t" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="t"> </li>
                            <li>
                                <div data-icon="u" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="u"> </li>
                            <li>
                                <div data-icon="v" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="v"> </li>
                            <li>
                                <div data-icon="w" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="w"> </li>
                            <li>
                                <div data-icon="x" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="x"> </li>
                            <li>
                                <div data-icon="y" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="y"> </li>
                            <li>
                                <div data-icon="z" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="z"> </li>
                            <li>
                                <div data-icon="A" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="A"> </li>
                            <li>
                                <div data-icon="B" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="B"> </li>
                            <li>
                                <div data-icon="C" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="C"> </li>
                            <li>
                                <div data-icon="D" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="D"> </li>
                            <li>
                                <div data-icon="E" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="E"> </li>
                            <li>
                                <div data-icon="F" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="F"> </li>
                            <li>
                                <div data-icon="G" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="G"> </li>
                            <li>
                                <div data-icon="H" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="H"> </li>
                            <li>
                                <div data-icon="I" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="I"> </li>
                            <li>
                                <div data-icon="J" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="J"> </li>
                            <li>
                                <div data-icon="K" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="K"> </li>
                            <li>
                                <div data-icon="L" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="L"> </li>
                            <li>
                                <div data-icon="M" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="M"> </li>
                            <li>
                                <div data-icon="N" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="N"> </li>
                            <li>
                                <div data-icon="O" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="O"> </li>
                            <li>
                                <div data-icon="P" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="P"> </li>
                            <li>
                                <div data-icon="Q" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="Q"> </li>
                            <li>
                                <div data-icon="R" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="R"> </li>
                            <li>
                                <div data-icon="S" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="S"> </li>
                            <li>
                                <div data-icon="T" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="T"> </li>
                            <li>
                                <div data-icon="U" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="U"> </li>
                            <li>
                                <div data-icon="V" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="V"> </li>
                            <li>
                                <div data-icon="W" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="W"> </li>
                            <li>
                                <div data-icon="X" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="X"> </li>
                            <li>
                                <div data-icon="Y" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="Y"> </li>
                            <li>
                                <div data-icon="Z" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="Z"> </li>
                            <li>
                                <div data-icon="0" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="0"> </li>
                            <li>
                                <div data-icon="1" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="1"> </li>
                            <li>
                                <div data-icon="2" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="2"> </li>
                            <li>
                                <div data-icon="3" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="3"> </li>
                            <li>
                                <div data-icon="4" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="4"> </li>
                            <li>
                                <div data-icon="5" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="5"> </li>
                            <li>
                                <div data-icon="6" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="6"> </li>
                            <li>
                                <div data-icon="7" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="7"> </li>
                            <li>
                                <div data-icon="8" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="8"> </li>
                            <li>
                                <div data-icon="9" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="9"> </li>
                            <li>
                                <div data-icon="!" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="!"> </li>
                            <li>
                                <div data-icon="&#34;" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="&quot;"> </li>
                            <li>
                                <div data-icon="#" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="#"> </li>
                            <li>
                                <div data-icon="$" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="$"> </li>
                            <li>
                                <div data-icon="%" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="%"> </li>
                            <li>
                                <div data-icon="&" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="&amp;"> </li>
                            <li>
                                <div data-icon="'" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="&#39;"> </li>
                            <li>
                                <div data-icon="(" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="("> </li>
                            <li>
                                <div data-icon=")" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value=")"> </li>
                            <li>
                                <div data-icon="*" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="*"> </li>
                            <li>
                                <div data-icon="+" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="+"> </li>
                            <li>
                                <div data-icon="," class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value=","> </li>
                            <li>
                                <div data-icon="-" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="-"> </li>
                            <li>
                                <div data-icon="." class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="."> </li>
                            <li>
                                <div data-icon="/" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="/"> </li>
                            <li>
                                <div data-icon=":" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value=":"> </li>
                            <li>
                                <div data-icon=";" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value=";"> </li>
                            <li>
                                <div data-icon="<" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="&lt;"> </li>
                            <li>
                                <div data-icon="=" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="="> </li>
                            <li>
                                <div data-icon=">" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="&gt;"> </li>
                            <li>
                                <div data-icon="?" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="?"> </li>
                            <li>
                                <div data-icon="@" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="@"> </li>
                            <li>
                                <div data-icon="[" class="linea-icon linea-ecommerce"></div>
                                <input type="text" readonly="readonly" value="["> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Software Icons</h3>
                        <p class="text-muted m-b-30">Use <code>linea-software</code> class like :<code> &lt;div data-icon="a" class="linea-icon linea-software"&gt;&lt;div&gt; </code></p>
                        <ul class="glyphs character-mapping">
                            <li>
                                <div data-icon="a" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="a"> </li>
                            <li>
                                <div data-icon="b" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="b"> </li>
                            <li>
                                <div data-icon="c" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="c"> </li>
                            <li>
                                <div data-icon="d" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="d"> </li>
                            <li>
                                <div data-icon="e" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="e"> </li>
                            <li>
                                <div data-icon="f" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="f"> </li>
                            <li>
                                <div data-icon="g" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="g"> </li>
                            <li>
                                <div data-icon="h" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="h"> </li>
                            <li>
                                <div data-icon="i" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="i"> </li>
                            <li>
                                <div data-icon="j" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="j"> </li>
                            <li>
                                <div data-icon="k" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="k"> </li>
                            <li>
                                <div data-icon="l" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="l"> </li>
                            <li>
                                <div data-icon="m" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="m"> </li>
                            <li>
                                <div data-icon="n" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="n"> </li>
                            <li>
                                <div data-icon="o" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="o"> </li>
                            <li>
                                <div data-icon="p" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="p"> </li>
                            <li>
                                <div data-icon="q" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="q"> </li>
                            <li>
                                <div data-icon="r" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="r"> </li>
                            <li>
                                <div data-icon="s" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="s"> </li>
                            <li>
                                <div data-icon="t" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="t"> </li>
                            <li>
                                <div data-icon="u" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="u"> </li>
                            <li>
                                <div data-icon="v" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="v"> </li>
                            <li>
                                <div data-icon="w" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="w"> </li>
                            <li>
                                <div data-icon="x" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="x"> </li>
                            <li>
                                <div data-icon="y" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="y"> </li>
                            <li>
                                <div data-icon="z" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="z"> </li>
                            <li>
                                <div data-icon="A" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="A"> </li>
                            <li>
                                <div data-icon="B" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="B"> </li>
                            <li>
                                <div data-icon="C" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="C"> </li>
                            <li>
                                <div data-icon="D" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="D"> </li>
                            <li>
                                <div data-icon="E" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="E"> </li>
                            <li>
                                <div data-icon="F" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="F"> </li>
                            <li>
                                <div data-icon="G" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="G"> </li>
                            <li>
                                <div data-icon="H" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="H"> </li>
                            <li>
                                <div data-icon="I" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="I"> </li>
                            <li>
                                <div data-icon="J" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="J"> </li>
                            <li>
                                <div data-icon="K" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="K"> </li>
                            <li>
                                <div data-icon="L" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="L"> </li>
                            <li>
                                <div data-icon="M" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="M"> </li>
                            <li>
                                <div data-icon="N" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="N"> </li>
                            <li>
                                <div data-icon="O" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="O"> </li>
                            <li>
                                <div data-icon="P" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="P"> </li>
                            <li>
                                <div data-icon="Q" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="Q"> </li>
                            <li>
                                <div data-icon="R" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="R"> </li>
                            <li>
                                <div data-icon="S" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="S"> </li>
                            <li>
                                <div data-icon="T" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="T"> </li>
                            <li>
                                <div data-icon="U" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="U"> </li>
                            <li>
                                <div data-icon="V" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="V"> </li>
                            <li>
                                <div data-icon="W" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="W"> </li>
                            <li>
                                <div data-icon="X" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="X"> </li>
                            <li>
                                <div data-icon="Y" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="Y"> </li>
                            <li>
                                <div data-icon="Z" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="Z"> </li>
                            <li>
                                <div data-icon="0" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="0"> </li>
                            <li>
                                <div data-icon="1" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="1"> </li>
                            <li>
                                <div data-icon="2" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="2"> </li>
                            <li>
                                <div data-icon="3" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="3"> </li>
                            <li>
                                <div data-icon="4" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="4"> </li>
                            <li>
                                <div data-icon="5" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="5"> </li>
                            <li>
                                <div data-icon="6" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="6"> </li>
                            <li>
                                <div data-icon="7" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="7"> </li>
                            <li>
                                <div data-icon="8" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="8"> </li>
                            <li>
                                <div data-icon="9" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="9"> </li>
                            <li>
                                <div data-icon="!" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="!"> </li>
                            <li>
                                <div data-icon="&#34;" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&quot;"> </li>
                            <li>
                                <div data-icon="#" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="#"> </li>
                            <li>
                                <div data-icon="$" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="$"> </li>
                            <li>
                                <div data-icon="%" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="%"> </li>
                            <li>
                                <div data-icon="&" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&amp;"> </li>
                            <li>
                                <div data-icon="'" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&#39;"> </li>
                            <li>
                                <div data-icon="(" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="("> </li>
                            <li>
                                <div data-icon=")" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value=")"> </li>
                            <li>
                                <div data-icon="*" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="*"> </li>
                            <li>
                                <div data-icon="+" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="+"> </li>
                            <li>
                                <div data-icon="," class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value=","> </li>
                            <li>
                                <div data-icon="-" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="-"> </li>
                            <li>
                                <div data-icon="." class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="."> </li>
                            <li>
                                <div data-icon="/" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="/"> </li>
                            <li>
                                <div data-icon=":" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value=":"> </li>
                            <li>
                                <div data-icon=";" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value=";"> </li>
                            <li>
                                <div data-icon="<" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&lt;"> </li>
                            <li>
                                <div data-icon="=" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="="> </li>
                            <li>
                                <div data-icon=">" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&gt;"> </li>
                            <li>
                                <div data-icon="?" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="?"> </li>
                            <li>
                                <div data-icon="@" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="@"> </li>
                            <li>
                                <div data-icon="[" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="["> </li>
                            <li>
                                <div data-icon="]" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="]"> </li>
                            <li>
                                <div data-icon="^" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="^"> </li>
                            <li>
                                <div data-icon="_" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="_"> </li>
                            <li>
                                <div data-icon="`" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="`"> </li>
                            <li>
                                <div data-icon="{" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="{"> </li>
                            <li>
                                <div data-icon="|" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="|"> </li>
                            <li>
                                <div data-icon="}" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="}"> </li>
                            <li>
                                <div data-icon="~" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="~"> </li>
                            <li>
                                <div data-icon="\" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="\"> </li>
                            <li>
                                <div data-icon="&#xe000;" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe000;"> </li>
                            <li>
                                <div data-icon="&#xe001;" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe001;"> </li>
                            <li>
                                <div data-icon="&#xe002;" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe002;"> </li>
                            <li>
                                <div data-icon="&#xe003;" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe003;"> </li>
                            <li>
                                <div data-icon="&#xe004;" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe004;"> </li>
                            <li>
                                <div data-icon="&#xe005;" class="linea-icon linea-software"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe005;"> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Weather Icons</h3>
                        <p class="text-muted m-b-30">Use <code>linea-weather</code> class like :<code> &lt;div data-icon="a" class="linea-icon linea-weather"&gt;&lt;div&gt; </code></p>
                        <ul class="glyphs character-mapping">
                            <li>
                                <div data-icon="&#xe000;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe000;"> </li>
                            <li>
                                <div data-icon="&#xe001;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe001;"> </li>
                            <li>
                                <div data-icon="&#xe002;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe002;"> </li>
                            <li>
                                <div data-icon="&#xe003;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe003;"> </li>
                            <li>
                                <div data-icon="&#xe004;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe004;"> </li>
                            <li>
                                <div data-icon="&#xe005;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe005;"> </li>
                            <li>
                                <div data-icon="&#xe006;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe006;"> </li>
                            <li>
                                <div data-icon="&#xe007;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe007;"> </li>
                            <li>
                                <div data-icon="&#xe008;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe008;"> </li>
                            <li>
                                <div data-icon="&#xe009;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe009;"> </li>
                            <li>
                                <div data-icon="&#xe00a;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00a;"> </li>
                            <li>
                                <div data-icon="&#xe00b;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00b;"> </li>
                            <li>
                                <div data-icon="&#xe00c;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00c;"> </li>
                            <li>
                                <div data-icon="&#xe00d;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00d;"> </li>
                            <li>
                                <div data-icon="&#xe00e;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00e;"> </li>
                            <li>
                                <div data-icon="&#xe00f;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00f;"> </li>
                            <li>
                                <div data-icon="&#xe010;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe010;"> </li>
                            <li>
                                <div data-icon="&#xe011;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe011;"> </li>
                            <li>
                                <div data-icon="&#xe012;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe012;"> </li>
                            <li>
                                <div data-icon="&#xe013;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe013;"> </li>
                            <li>
                                <div data-icon="&#xe014;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe014;"> </li>
                            <li>
                                <div data-icon="&#xe015;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe015;"> </li>
                            <li>
                                <div data-icon="&#xe016;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe016;"> </li>
                            <li>
                                <div data-icon="&#xe017;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe017;"> </li>
                            <li>
                                <div data-icon="&#xe018;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe018;"> </li>
                            <li>
                                <div data-icon="&#xe019;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe019;"> </li>
                            <li>
                                <div data-icon="&#xe01a;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01a;"> </li>
                            <li>
                                <div data-icon="&#xe01b;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01b;"> </li>
                            <li>
                                <div data-icon="&#xe01c;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01c;"> </li>
                            <li>
                                <div data-icon="&#xe01d;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01d;"> </li>
                            <li>
                                <div data-icon="&#xe01e;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01e;"> </li>
                            <li>
                                <div data-icon="&#xe01f;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01f;"> </li>
                            <li>
                                <div data-icon="&#xe020;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe020;"> </li>
                            <li>
                                <div data-icon="&#xe021;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe021;"> </li>
                            <li>
                                <div data-icon="&#xe022;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe022;"> </li>
                            <li>
                                <div data-icon="&#xe023;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe023;"> </li>
                            <li>
                                <div data-icon="&#xe024;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe024;"> </li>
                            <li>
                                <div data-icon="&#xe025;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe025;"> </li>
                            <li>
                                <div data-icon="&#xe026;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe026;"> </li>
                            <li>
                                <div data-icon="&#xe027;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe027;"> </li>
                            <li>
                                <div data-icon="&#xe028;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe028;"> </li>
                            <li>
                                <div data-icon="&#xe029;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe029;"> </li>
                            <li>
                                <div data-icon="&#xe02a;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02a;"> </li>
                            <li>
                                <div data-icon="&#xe02b;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02b;"> </li>
                            <li>
                                <div data-icon="&#xe02c;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02c;"> </li>
                            <li>
                                <div data-icon="&#xe02d;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02d;"> </li>
                            <li>
                                <div data-icon="&#xe02e;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02e;"> </li>
                            <li>
                                <div data-icon="&#xe02f;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02f;"> </li>
                            <li>
                                <div data-icon="&#xe030;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe030;"> </li>
                            <li>
                                <div data-icon="&#xe031;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe031;"> </li>
                            <li>
                                <div data-icon="&#xe032;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe032;"> </li>
                            <li>
                                <div data-icon="&#xe033;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe033;"> </li>
                            <li>
                                <div data-icon="&#xe034;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe034;"> </li>
                            <li>
                                <div data-icon="&#xe035;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe035;"> </li>
                            <li>
                                <div data-icon="&#xe036;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe036;"> </li>
                            <li>
                                <div data-icon="&#xe037;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe037;"> </li>
                            <li>
                                <div data-icon="&#xe038;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe038;"> </li>
                            <li>
                                <div data-icon="&#xe039;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe039;"> </li>
                            <li>
                                <div data-icon="&#xe03a;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03a;"> </li>
                            <li>
                                <div data-icon="&#xe03b;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03b;"> </li>
                            <li>
                                <div data-icon="&#xe03c;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03c;"> </li>
                            <li>
                                <div data-icon="&#xe03d;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03d;"> </li>
                            <li>
                                <div data-icon="&#xe03e;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03e;"> </li>
                            <li>
                                <div data-icon="&#xe03f;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03f;"> </li>
                            <li>
                                <div data-icon="&#xe040;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe040;"> </li>
                            <li>
                                <div data-icon="&#xe041;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe041;"> </li>
                            <li>
                                <div data-icon="&#xe042;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe042;"> </li>
                            <li>
                                <div data-icon="&#xe043;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe043;"> </li>
                            <li>
                                <div data-icon="&#xe044;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe044;"> </li>
                            <li>
                                <div data-icon="&#xe045;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe045;"> </li>
                            <li>
                                <div data-icon="&#xe046;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe046;"> </li>
                            <li>
                                <div data-icon="&#xe047;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe047;"> </li>
                            <li>
                                <div data-icon="&#xe048;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe048;"> </li>
                            <li>
                                <div data-icon="&#xe049;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe049;"> </li>
                            <li>
                                <div data-icon="&#xe04a;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04a;"> </li>
                            <li>
                                <div data-icon="&#xe04b;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04b;"> </li>
                            <li>
                                <div data-icon="&#xe04c;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04c;"> </li>
                            <li>
                                <div data-icon="&#xe04d;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04d;"> </li>
                            <li>
                                <div data-icon="&#xe04e;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04e;"> </li>
                            <li>
                                <div data-icon="&#xe04f;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04f;"> </li>
                            <li>
                                <div data-icon="&#xe050;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe050;"> </li>
                            <li>
                                <div data-icon="&#xe051;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe051;"> </li>
                            <li>
                                <div data-icon="&#xe052;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe052;"> </li>
                            <li>
                                <div data-icon="&#xe053;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe053;"> </li>
                            <li>
                                <div data-icon="&#xe054;" class="linea-icon linea-weather"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe054;"> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Music Icons</h3>
                        <p class="text-muted m-b-30">Use <code>linea-music</code> class like :<code> &lt;div data-icon="a" class="linea-icon linea-music"&gt;&lt;div&gt; </code></p>
                        <ul class="glyphs character-mapping">
                            <li>
                                <div data-icon="a" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="a"> </li>
                            <li>
                                <div data-icon="b" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="b"> </li>
                            <li>
                                <div data-icon="c" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="c"> </li>
                            <li>
                                <div data-icon="d" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="d"> </li>
                            <li>
                                <div data-icon="e" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="e"> </li>
                            <li>
                                <div data-icon="f" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="f"> </li>
                            <li>
                                <div data-icon="g" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="g"> </li>
                            <li>
                                <div data-icon="h" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="h"> </li>
                            <li>
                                <div data-icon="i" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="i"> </li>
                            <li>
                                <div data-icon="j" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="j"> </li>
                            <li>
                                <div data-icon="k" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="k"> </li>
                            <li>
                                <div data-icon="l" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="l"> </li>
                            <li>
                                <div data-icon="m" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="m"> </li>
                            <li>
                                <div data-icon="n" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="n"> </li>
                            <li>
                                <div data-icon="o" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="o"> </li>
                            <li>
                                <div data-icon="p" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="p"> </li>
                            <li>
                                <div data-icon="q" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="q"> </li>
                            <li>
                                <div data-icon="r" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="r"> </li>
                            <li>
                                <div data-icon="s" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="s"> </li>
                            <li>
                                <div data-icon="t" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="t"> </li>
                            <li>
                                <div data-icon="u" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="u"> </li>
                            <li>
                                <div data-icon="v" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="v"> </li>
                            <li>
                                <div data-icon="w" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="w"> </li>
                            <li>
                                <div data-icon="x" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="x"> </li>
                            <li>
                                <div data-icon="y" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="y"> </li>
                            <li>
                                <div data-icon="z" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="z"> </li>
                            <li>
                                <div data-icon="A" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="A"> </li>
                            <li>
                                <div data-icon="B" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="B"> </li>
                            <li>
                                <div data-icon="C" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="C"> </li>
                            <li>
                                <div data-icon="D" class="linea-icon linea-music"></div>
                                <input type="text" readonly="readonly" value="D"> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Aerrow Icons</h3>
                        <p class="text-muted m-b-30">Use <code>linea-aerrow</code> class like :<code> &lt;div data-icon="a" class="linea-icon linea-aerrow"&gt;&lt;div&gt; </code></p>
                        <ul class="glyphs character-mapping">
                            <li>
                                <div data-icon="&#xe000;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe000;"> </li>
                            <li>
                                <div data-icon="&#xe001;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe001;"> </li>
                            <li>
                                <div data-icon="&#xe002;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe002;"> </li>
                            <li>
                                <div data-icon="&#xe003;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe003;"> </li>
                            <li>
                                <div data-icon="&#xe004;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe004;"> </li>
                            <li>
                                <div data-icon="&#xe005;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe005;"> </li>
                            <li>
                                <div data-icon="&#xe006;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe006;"> </li>
                            <li>
                                <div data-icon="&#xe007;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe007;"> </li>
                            <li>
                                <div data-icon="&#xe008;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe008;"> </li>
                            <li>
                                <div data-icon="&#xe009;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe009;"> </li>
                            <li>
                                <div data-icon="&#xe00a;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00a;"> </li>
                            <li>
                                <div data-icon="&#xe00b;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00b;"> </li>
                            <li>
                                <div data-icon="&#xe00c;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00c;"> </li>
                            <li>
                                <div data-icon="&#xe00d;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00d;"> </li>
                            <li>
                                <div data-icon="&#xe00e;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00e;"> </li>
                            <li>
                                <div data-icon="&#xe00f;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe00f;"> </li>
                            <li>
                                <div data-icon="&#xe010;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe010;"> </li>
                            <li>
                                <div data-icon="&#xe011;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe011;"> </li>
                            <li>
                                <div data-icon="&#xe012;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe012;"> </li>
                            <li>
                                <div data-icon="&#xe013;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe013;"> </li>
                            <li>
                                <div data-icon="&#xe014;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe014;"> </li>
                            <li>
                                <div data-icon="&#xe015;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe015;"> </li>
                            <li>
                                <div data-icon="&#xe016;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe016;"> </li>
                            <li>
                                <div data-icon="&#xe017;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe017;"> </li>
                            <li>
                                <div data-icon="&#xe018;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe018;"> </li>
                            <li>
                                <div data-icon="&#xe019;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe019;"> </li>
                            <li>
                                <div data-icon="&#xe01a;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01a;"> </li>
                            <li>
                                <div data-icon="&#xe01b;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01b;"> </li>
                            <li>
                                <div data-icon="&#xe01c;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01c;"> </li>
                            <li>
                                <div data-icon="&#xe01d;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01d;"> </li>
                            <li>
                                <div data-icon="&#xe01e;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01e;"> </li>
                            <li>
                                <div data-icon="&#xe01f;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe01f;"> </li>
                            <li>
                                <div data-icon="&#xe020;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe020;"> </li>
                            <li>
                                <div data-icon="&#xe021;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe021;"> </li>
                            <li>
                                <div data-icon="&#xe022;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe022;"> </li>
                            <li>
                                <div data-icon="&#xe023;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe023;"> </li>
                            <li>
                                <div data-icon="&#xe024;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe024;"> </li>
                            <li>
                                <div data-icon="&#xe025;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe025;"> </li>
                            <li>
                                <div data-icon="&#xe026;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe026;"> </li>
                            <li>
                                <div data-icon="&#xe027;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe027;"> </li>
                            <li>
                                <div data-icon="&#xe028;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe028;"> </li>
                            <li>
                                <div data-icon="&#xe029;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe029;"> </li>
                            <li>
                                <div data-icon="&#xe02a;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02a;"> </li>
                            <li>
                                <div data-icon="&#xe02b;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02b;"> </li>
                            <li>
                                <div data-icon="&#xe02c;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02c;"> </li>
                            <li>
                                <div data-icon="&#xe02d;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02d;"> </li>
                            <li>
                                <div data-icon="&#xe02e;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02e;"> </li>
                            <li>
                                <div data-icon="&#xe02f;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe02f;"> </li>
                            <li>
                                <div data-icon="&#xe030;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe030;"> </li>
                            <li>
                                <div data-icon="&#xe031;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe031;"> </li>
                            <li>
                                <div data-icon="&#xe032;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe032;"> </li>
                            <li>
                                <div data-icon="&#xe033;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe033;"> </li>
                            <li>
                                <div data-icon="&#xe034;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe034;"> </li>
                            <li>
                                <div data-icon="&#xe035;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe035;"> </li>
                            <li>
                                <div data-icon="&#xe036;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe036;"> </li>
                            <li>
                                <div data-icon="&#xe037;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe037;"> </li>
                            <li>
                                <div data-icon="&#xe038;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe038;"> </li>
                            <li>
                                <div data-icon="&#xe039;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe039;"> </li>
                            <li>
                                <div data-icon="&#xe03a;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03a;"> </li>
                            <li>
                                <div data-icon="&#xe03b;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03b;"> </li>
                            <li>
                                <div data-icon="&#xe03c;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03c;"> </li>
                            <li>
                                <div data-icon="&#xe03d;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03d;"> </li>
                            <li>
                                <div data-icon="&#xe03e;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03e;"> </li>
                            <li>
                                <div data-icon="&#xe03f;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe03f;"> </li>
                            <li>
                                <div data-icon="&#xe040;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe040;"> </li>
                            <li>
                                <div data-icon="&#xe041;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe041;"> </li>
                            <li>
                                <div data-icon="&#xe042;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe042;"> </li>
                            <li>
                                <div data-icon="&#xe043;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe043;"> </li>
                            <li>
                                <div data-icon="&#xe044;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe044;"> </li>
                            <li>
                                <div data-icon="&#xe045;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe045;"> </li>
                            <li>
                                <div data-icon="&#xe046;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe046;"> </li>
                            <li>
                                <div data-icon="&#xe047;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe047;"> </li>
                            <li>
                                <div data-icon="&#xe048;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe048;"> </li>
                            <li>
                                <div data-icon="&#xe049;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe049;"> </li>
                            <li>
                                <div data-icon="&#xe04a;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04a;"> </li>
                            <li>
                                <div data-icon="&#xe04b;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04b;"> </li>
                            <li>
                                <div data-icon="&#xe04c;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04c;"> </li>
                            <li>
                                <div data-icon="&#xe04d;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04d;"> </li>
                            <li>
                                <div data-icon="&#xe04e;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04e;"> </li>
                            <li>
                                <div data-icon="&#xe04f;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe04f;"> </li>
                            <li>
                                <div data-icon="&#xe050;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe050;"> </li>
                            <li>
                                <div data-icon="&#xe051;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe051;"> </li>
                            <li>
                                <div data-icon="&#xe052;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe052;"> </li>
                            <li>
                                <div data-icon="&#xe053;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe053;"> </li>
                            <li>
                                <div data-icon="&#xe054;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe054;"> </li>
                            <li>
                                <div data-icon="&#xe055;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe055;"> </li>
                            <li>
                                <div data-icon="&#xe056;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe056;"> </li>
                            <li>
                                <div data-icon="&#xe057;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe057;"> </li>
                            <li>
                                <div data-icon="&#xe058;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe058;"> </li>
                            <li>
                                <div data-icon="&#xe059;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe059;"> </li>
                            <li>
                                <div data-icon="&#xe05a;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe05a;"> </li>
                            <li>
                                <div data-icon="&#xe05b;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe05b;"> </li>
                            <li>
                                <div data-icon="&#xe05c;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe05c;"> </li>
                            <li>
                                <div data-icon="&#xe05d;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe05d;"> </li>
                            <li>
                                <div data-icon="&#xe05e;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe05e;"> </li>
                            <li>
                                <div data-icon="&#xe05f;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe05f;"> </li>
                            <li>
                                <div data-icon="&#xe060;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe060;"> </li>
                            <li>
                                <div data-icon="&#xe061;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe061;"> </li>
                            <li>
                                <div data-icon="&#xe062;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe062;"> </li>
                            <li>
                                <div data-icon="&#xe063;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe063;"> </li>
                            <li>
                                <div data-icon="&#xe064;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe064;"> </li>
                            <li>
                                <div data-icon="&#xe065;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe065;"> </li>
                            <li>
                                <div data-icon="&#xe066;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe066;"> </li>
                            <li>
                                <div data-icon="&#xe067;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe067;"> </li>
                            <li>
                                <div data-icon="&#xe068;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe068;"> </li>
                            <li>
                                <div data-icon="&#xe069;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe069;"> </li>
                            <li>
                                <div data-icon="&#xe06a;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe06a;"> </li>
                            <li>
                                <div data-icon="&#xe06b;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe06b;"> </li>
                            <li>
                                <div data-icon="&#xe06c;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe06c;"> </li>
                            <li>
                                <div data-icon="&#xe06d;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe06d;"> </li>
                            <li>
                                <div data-icon="&#xe06e;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe06e;"> </li>
                            <li>
                                <div data-icon="&#xe06f;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe06f;"> </li>
                            <li>
                                <div data-icon="&#xe070;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe070;"> </li>
                            <li>
                                <div data-icon="&#xe071;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe071;"> </li>
                            <li>
                                <div data-icon="&#xe072;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe072;"> </li>
                            <li>
                                <div data-icon="&#xe073;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe073;"> </li>
                            <li>
                                <div data-icon="&#xe074;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe074;"> </li>
                            <li>
                                <div data-icon="&#xe075;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe075;"> </li>
                            <li>
                                <div data-icon="&#xe076;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe076;"> </li>
                            <li>
                                <div data-icon="&#xe077;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe077;"> </li>
                            <li>
                                <div data-icon="&#xe078;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe078;"> </li>
                            <li>
                                <div data-icon="&#xe079;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe079;"> </li>
                            <li>
                                <div data-icon="&#xe07a;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe07a;"> </li>
                            <li>
                                <div data-icon="&#xe07b;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe07b;"> </li>
                            <li>
                                <div data-icon="&#xe07c;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe07c;"> </li>
                            <li>
                                <div data-icon="&#xe07d;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe07d;"> </li>
                            <li>
                                <div data-icon="&#xe07e;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe07e;"> </li>
                            <li>
                                <div data-icon="&#xe07f;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe07f;"> </li>
                            <li>
                                <div data-icon="&#xe080;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe080;"> </li>
                            <li>
                                <div data-icon="&#xe081;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe081;"> </li>
                            <li>
                                <div data-icon="&#xe082;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe082;"> </li>
                            <li>
                                <div data-icon="&#xe083;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe083;"> </li>
                            <li>
                                <div data-icon="&#xe084;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe084;"> </li>
                            <li>
                                <div data-icon="&#xe085;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe085;"> </li>
                            <li>
                                <div data-icon="&#xe086;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe086;"> </li>
                            <li>
                                <div data-icon="&#xe087;" class="linea-icon linea-aerrow"></div>
                                <input type="text" readonly="readonly" value="&amp;#xe087;"> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul>
                        <li><b>Layout Options</b></li>
                        <li>
                            <div class="checkbox checkbox-info">
                                <input id="checkbox1" type="checkbox" class="fxhdr">
                                <label for="checkbox1"> Fix Header </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox" class="open-close">
                                <label for="checkbox4"> Toggle Sidebar </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-warning">
                                <input id="checkbox2" type="checkbox" class="fxsdr">
                                <label for="checkbox2"> Fix Sidebar </label>
                            </div>
                        </li>
                    </ul>
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
                        <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
                        <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
                        <li><b>With Dark sidebar</b></li>
                        <br/>
                        <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.right-sidebar -->        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>