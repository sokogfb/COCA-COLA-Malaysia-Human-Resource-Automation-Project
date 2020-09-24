<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Income Tax</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<?php
	include("../db.php");
	include("../loginheader.php");	
	
	$action = $_GET['action'];
	$incometax_select = $_GET['id'];
	
	if($action == 'view'){
		$sql = "SELECT *,DATE_FORMAT(Mod_Timestamp,GET_FORMAT(DATE,'ISO')) AS CreateDate FROM incometax WHERE AccountNo='$employeeno'";
		$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query);
		
		if($row){
			$IncomeTaxNo = $row['IncomeTaxNo'];
			$Majikan1 = $row['Majikan1'];
			$MajikanNo1 = $row['MajikanNo1'];
			$Majikan2 = $row['Majikan2'];
			$MajikanNo2 = $row['MajikanNo2'];
			$PassportNo = $row['PassportNo'];
			$IncomeTax = $row['IncomeTaxNo'];
			$AmaunTerkumpulC1 = $row['AmaunTerkumpulC1'];
			$AmaunTerkumpulC2i = $row['AmaunTerkumpulC2i'];
			$AmaunTerkumpulC2ii = $row['AmaunTerkumpulC2ii'];
			$AmaunTerkumpulC2iii = $row['AmaunTerkumpulC2iii'];
			$AmaunTerkumpulC2iv = $row['AmaunTerkumpulC2iv'];
			$AmaunTerkumpulC2v = $row['AmaunTerkumpulC2v'];
			$AmaunTerkumpulC3 = $row['AmaunTerkumpulC3'];
			$AmaunTerkumpulC4 = $row['AmaunTerkumpulC4'];
			$AmaunTerkumpulC5 = $row['AmaunTerkumpulC5'];
			$PotonganTerkumpulD1 = $row['PotonganTerkumpulD1'];
			$PotonganTerkumpulD2 = $row['PotonganTerkumpulD2'];
			$PotonganTerkumpulD3 = $row['PotonganTerkumpulD3'];
			$PotonganTerkumpulD4 = $row['PotonganTerkumpulD4'];
			$PotonganTerkumpulD4i = $row['PotonganTerkumpulD4i'];
			$PotonganTerkumpulD5 = $row['PotonganTerkumpulD5'];
			$PotonganTerkumpulD5i = $row['PotonganTerkumpulD5i'];
			$PotonganTerkumpulD6 = $row['PotonganTerkumpulD6'];
			$PotonganTerkumpulD7 = $row['PotonganTerkumpulD7'];
			$PotonganTerkumpulD8 = $row['PotonganTerkumpulD8'];
			$PotonganTerkumpulD9 = $row['PotonganTerkumpulD9'];
			$PotonganTerkumpulD10 = $row['PotonganTerkumpulD10'];
			$PotonganTerkumpulD11 = $row['PotonganTerkumpulD11'];
			$PotonganTerkumpulD12 = $row['PotonganTerkumpulD12'];
			$PotonganTerkumpulD13 = $row['PotonganTerkumpulD13'];
			$PotonganTerkumpulD14 = $row['PotonganTerkumpulD14'];
		}
		
	}else if($action == 'update'){
		$actionphp = "income_tax_update.php?id=$medical_select";
		$formbutton = 'Update';
		
		$sql = "SELECT *,DATE_FORMAT(Mod_Timestamp,GET_FORMAT(DATE,'ISO')) AS CreateDate FROM incometax WHERE IncomeTaxId=$incometax_select";
		$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query);
		
		if($row){
			$IncomeTaxNo = $row['IncomeTaxNo'];
			$Majikan1 = $row['Majikan1'];
			$MajikanNo1 = $row['MajikanNo1'];
			$Majikan2 = $row['Majikan2'];
			$MajikanNo2 = $row['MajikanNo2'];
			$PassportNo = $row['PassportNo'];
			$IncomeTax = $row['IncomeTaxNo'];
			$AmaunTerkumpulC1 = $row['AmaunTerkumpulC1'];
			$AmaunTerkumpulC2i = $row['AmaunTerkumpulC2i'];
			$AmaunTerkumpulC2ii = $row['AmaunTerkumpulC2ii'];
			$AmaunTerkumpulC2iii = $row['AmaunTerkumpulC2iii'];
			$AmaunTerkumpulC2iv = $row['AmaunTerkumpulC2iv'];
			$AmaunTerkumpulC2v = $row['AmaunTerkumpulC2v'];
			$AmaunTerkumpulC3 = $row['AmaunTerkumpulC3'];
			$AmaunTerkumpulC4 = $row['AmaunTerkumpulC4'];
			$AmaunTerkumpulC5 = $row['AmaunTerkumpulC5'];
			$PotonganTerkumpulD1 = $row['PotonganTerkumpulD1'];
			$PotonganTerkumpulD2 = $row['PotonganTerkumpulD2'];
			$PotonganTerkumpulD3 = $row['PotonganTerkumpulD3'];
			$PotonganTerkumpulD4 = $row['PotonganTerkumpulD4'];
			$PotonganTerkumpulD4i = $row['PotonganTerkumpulD4i'];
			$PotonganTerkumpulD5 = $row['PotonganTerkumpulD5'];
			$PotonganTerkumpulD5i = $row['PotonganTerkumpulD5i'];
			$PotonganTerkumpulD6 = $row['PotonganTerkumpulD6'];
			$PotonganTerkumpulD7 = $row['PotonganTerkumpulD7'];
			$PotonganTerkumpulD8 = $row['PotonganTerkumpulD8'];
			$PotonganTerkumpulD9 = $row['PotonganTerkumpulD9'];
			$PotonganTerkumpulD10 = $row['PotonganTerkumpulD10'];
			$PotonganTerkumpulD11 = $row['PotonganTerkumpulD11'];
			$PotonganTerkumpulD12 = $row['PotonganTerkumpulD12'];
			$PotonganTerkumpulD13 = $row['PotonganTerkumpulD13'];
			$PotonganTerkumpulD14 = $row['PotonganTerkumpulD14'];
		}
	}
	else if($action == 'insert'){
		$actionphp = "income_tax_insert.php?id=$employeeno";
		$formbutton = 'Submit';
	}
	?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">
John Abraham</span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="../assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">
John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Job Application Form<span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dashboard-finance.html">Personal Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Bank Account Details</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Family / Dependent Details</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Education Details</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Employment Record</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Further Information</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">References</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="../dashboard-sales.html">Declaration</a>
                                        </li>                                      
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="cards.html">Cards <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="general.html">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="carousel.html">Carousel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="listgroup.html">List Group</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="typography.html">Typography</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="accordions.html">Accordions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabs.html">Tabs</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-c3.html">C3 Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-chartist.html">Chartist Charts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-charts.html">Chart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-morris.html">Morris</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-sparkline.html">Sparkline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="chart-gauge.html">Guage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-elements.html">Form Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="form-validation.html">Parsely Validations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="multiselect.html">Multiselect</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="general-table.html">General Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="data-tables.html">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>Pages</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="invoice.html">Invoice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blank-page.html">Blank Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blank-page-header.html">Blank Page Header</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.html">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="404-page.html">404 page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sign-up.html">Sign up Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pricing.html">Pricing Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="timeline.html">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="sortable-nestable-lists.html">Sortable/Nestable List</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" href="widgets.html">Widgets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="media-object.html">Media Objects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cropper-image.html">Cropper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="color-picker.html">Color Picker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="inbox.html">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-details.html">Email Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-compose.html">Email Compose</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="message-chat.html">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-fontawesome.html">FontAwesome Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-material.html">Material Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-simple-lineicon.html">Simpleline Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-themify.html">Themify Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-flag.html">Flag Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="icon-weather.html">Weather Icon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="map-google.html">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="map-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        
		
        <div class="dashboard-wrapper">
            
                
                        <h3 class="text-center"><br><br>LEMBAGA HASIL DALAM NEGERI MALAYSIA	</h3>											
												<p class="text-center"><br>BORANG MAKLUMAT BERKAITAN PENGGAJIAN DENGAN MAJIKAN-MAJIKAN TERDAHULU <br>
												<br>DALAM TAHUN SEMASA BAGI TUJUAN POTONGAN CUKAI BULANAN (PCB)<br>
												<br>(KAEDAH-KAEDAH CUKAI PENDAPATAN (POTONGAN DARIPADA SARAAN) 1994<br>
												<br>BORANG DITETAPKAN DI BAWAH SEKSYEN 152, AKTA CUKAI PENDAPATAN 1967<br></p>
                  
		<!-- New Joiner Forms -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Income Tax       -->
        <!-- ============================================================== -->
		
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
                <h5 class="card-header">BAHAGIAN A : MAKLUMAT MAJIKAN</h5>
                    <div class="card-body">
						
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="<?php echo $actionphp; ?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">A1 Nama Majikan Terdahulu 1</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control" value="<?php echo $Majikan1;?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">A2 No. Majikan </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-minlength="6" placeholder="" class="form-control" value="<?php echo $MajikanNo1;?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">A3 Nama Majikan Terdahulu 2</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-maxlength="6" placeholder="" class="form-control" value="<?php echo $Majikan2;?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">A4 No. Majikan </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-length="[5,10]" placeholder="" class="form-control" value="<?php echo $MajikanNo2;?>">
                                            </div>
                                        </div>

                                    
                                
					</div>
			</div>
		</div>
		<!-- END OF BAHAGIAN A -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- BAHAGIAN B        -->
        <!-- ============================================================== -->			
		 
		 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
                <h5 class="card-header">BAHAGIAN B : MAKLUMAT INDIVIDU</h5>
                    <div class="card-body">
						
                                    
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">B1 Nama</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="" class="form-control" value="<?php echo $fullname;?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">B2 No. Pengenalan </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-minlength="6" placeholder="" class="form-control" value="<?php echo $employeeno;?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">B3 No. Pasport</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" data-parsley-maxlength="6" placeholder="" class="form-control" value="<?php echo $PassportNo;?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">B4 No. Cukai Pendapatan </label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="IncomeTaxNo" required=""  data-parsley-length="[5,10]" placeholder="" class="form-control" value="<?php echo $IncomeTax;?>">
                                            </div>
                                        </div>

                                    
                                
					</div>
			</div>
			
		 </div>
		<!-- END OF BAHAGIAN B -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- BAHAGIAN C        -->
        <!-- ============================================================== -->	
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">BAHAGIAN C : MAKLUMAT SARAAN, KWSP, ZAKAT DAN PCB <br>(sila nyatakan jumlah keseluruhan daripada majikan-majikan terdahulu)<br> </h5>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">AMAUN TERKUMPUL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">C1 Jumlah saraan kasar bulanan dan saraan tambahan termasuk elaun/perkuisit/ pemberian/<br>manfaat yang dikenakan cukai<br></th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC1" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$AmaunTerkumpulC1;?>">
                                            </div>
											</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">C2 Jumlah elaun/perkuisit/pemberian/manfaat yang dikecualikan cukai</th>
                                                <td></td>                                               
                                            </tr>
                                            <tr>
                                                <th scope="row">&nbsp &nbsp i Elaun perjalanan, kad petrol atau elaun petrol dan fi tol atas urusan rasmi</th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2i" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$AmaunTerkumpulC2i;?>">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp ii Elaun penjagaan anak</th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2ii" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$AmaunTerkumpulC2ii;?>">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp iii Produk yang dikeluarkan oleh perniagaan majikan yang diberi secara percuma atau diberi pada harga 
												<br>&nbsp &nbsp &nbsp &nbsp diskaun<br></th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2iii" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$AmaunTerkumpulC2iii;?>">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp iv Perkuisit dalam bentuk tunai/barangan berkaitan dengan pencapaian perkhidmatan lalu, 
												<br>&nbsp &nbsp &nbsp &nbsp anugerah khidmat cemerlang, anugerah inovasi atau anugerah produktiviti atau perkhidmatan 
												<br>&nbsp &nbsp &nbsp &nbsp lama dengan syarat pekerja tersebut telah berkhidmat lebih daripada 10 tahun.<br></th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2iv" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$AmaunTerkumpulC2iv;?>">
                                            </div>
												</td>
										   </tr>
										   <tr>
                                                <th scope="row">&nbsp &nbsp v Lain - lain elaun/perkuisit/pemberian/manfaat yang dikecualikan cukai. Sila rujuk nota penerangan 
												<br>&nbsp &nbsp &nbsp &nbsp Borang BE<br>
												</th>                                               
												<td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC2v" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$AmaunTerkumpulC2v;?>">
                                            </div>
												</td>
										   </tr>
										    <tr>
                                                <th scope="row">C3 Jumlah caruman KWSP atau Kumpulan Wang Lain Yang Diluluskan ke atas semua saraan 
												<br>&nbsp &nbsp &nbsp(saraan bulanan dan saraan tambahan) <br></th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC3" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$AmaunTerkumpulC3;?>">
                                            </div>
												</td>                                               
                                            </tr>
											<tr>
                                                <th scope="row">C4 Jumlah Zakat</th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC4" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$AmaunTerkumpulC4;?>">
                                            </div>
												</td>                                               
                                            </tr>
											<tr>
                                                <th scope="row">C5 Jumlah PCB (tidak termasuk CP38)</th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="AmaunTerkumpulC5" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$AmaunTerkumpulC5;?>">
                                            </div>
												</td>                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>	
	
		
		<!-- END OF BAHAGIAN C -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- BAHAGIAN D        -->
        <!-- ============================================================== -->	 
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">BAHAGIAN D</h5>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">HAD TAHUNAN</th>
                                                <th scope="col">POTONGAN TERKUMPUL</th>                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">D1 Perbelanjaan rawatan perubatan, keperluan khas dan penjaga 
												<br>&nbsp &nbsp &nbsp untuk ibu bapa (keadaan kesihatan disahkan oleh pengamal <br>
												&nbsp &nbsp &nbsp perubatan)<br></th>
                                                <td>TERHAD RM5,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD1" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD1;?>">
                                            </div>
											</td>                                                
                                            </tr> 
											
											<tr>
                                                <th scope="row">D2 Peralatan sokongan asas untuk kegunaan sendiri, suami/isteri, anak  
												<br>&nbsp &nbsp &nbsp  atau ibu bapa yang kurang upaya<br></th>
                                                <td>TERHAD RM5,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD2" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD2;?>">
                                            </div>
											</td>                                                
                                            </tr>

											<tr>
                                                <th scope="row">D3 Yuran pendidikan (sendiri):   
												<br>&nbsp &nbsp &nbsp  (i) peringkat selain Sarjana dan Doktor Falsafah – bidang  <br>
												&nbsp &nbsp &nbsp undang-undang, perakaunan, kewangan Islam, teknikal, vokasional,   <br>
												&nbsp &nbsp &nbsp industri, saintifik atau teknologi maklumat; atau  <br>
												&nbsp &nbsp &nbsp (ii) peringkat Sarjana dan Doktor Falsafah – sebarang bidang atau  <br>
												&nbsp &nbsp &nbsp kursus pengajian  <br></th>
                                                <td>TERHAD RM5,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD3" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD3;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D4 Perbelanjaan perubatan bagi penyakit yang sukar diubati atas    
												<br>&nbsp &nbsp &nbsp  diri sendiri, suami/isteri atau anak <br></th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" required="" data-parsley-minlength="6" name="PotonganTerkumpulD4i" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD4i;?>">
                                            </div>
												<br>TERHAD RM5,000<br></td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text"  name="PotonganTerkumpulD4" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD4;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D5 Pemeriksaan perubatan penuh atas diri sendiri, suami/isteri  
												<br>&nbsp &nbsp &nbsp atau anak <br></th>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD5i" required="" data-parsley-minlength="6" placeholder="RM" class="form-control"  value="<?=$PotonganTerkumpulD5i;?>">
                                            </div>
												<br>TERHAD RM5,000<br></td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD5" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD5;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D6 Pembelian buku/majalah/jurnal/penerbitan ilmiah (selain     
												<br>&nbsp &nbsp &nbsp suratkhabar atau bahan bacaan terlarang) untuk diri sendiri, <br>
												&nbsp &nbsp &nbsp suami/isteri atau anak <br></th>
                                                <td>TERHAD RM1,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD6" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD6;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D7 Pembelian komputer peribadi untuk individu (potongan dibenarkan     
												<br>&nbsp &nbsp &nbsp sekali dalam setiap tiga tahun)  <br></th>
                                                <td>TERHAD RM3,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD7" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD7;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D8 Tabungan bersih dalam Skim Simpanan Pendidikan Nasional     
												<br>&nbsp &nbsp &nbsp  (jumlah simpanan dalam tahun semasa tolak jumlah pengeluaran <br>
												&nbsp &nbsp &nbsp dalam tahun semasa)  <br></th>
                                                <td>TERHAD RM6,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD8" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD8;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D9 Pembelian peralatan sukan untuk aktiviti sukan mengikut Akta      
												<br>&nbsp &nbsp &nbsp Pembangunan Sukan 1997<br></th>
                                                <td>TERHAD RM300</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD9" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD9;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D10 Bayaran alimoni kepada bekas isteri</th>     												
                                                <td>TERHAD RM3,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD10" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD10;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D11 Insurans nyawa </th>    												
                                                <td>TERHAD RM6,000
												<br>(termasuk KWSP)<br></td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD11" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD11;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D12 Insurans pendidikan dan perubatan </th>    												
                                                <td>TERHAD RM3,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD12" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD12;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D13 Skim Persaraan Swasta dan Anuiti tertunda(Deferred annuity)  </th>   												
                                                <td>TERHAD RM1,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD13" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD13;?>">
                                            </div>
											</td>                                                
                                            </tr>
											
											<tr>
                                                <th scope="row">D14 Faedah pinjaman perumahan (mesti memenuhi syarat-syarat 
												<br>&nbsp &nbsp &nbsp &nbsp kelayakan)<br> </th>    												
                                                <td>TERHAD RM10,000</td>
                                                <td>
												<div class="col-14 col-sm-10 col-lg-8">
                                                <input type="text" name="PotonganTerkumpulD14" required="" data-parsley-minlength="6" placeholder="RM" class="form-control" value="<?=$PotonganTerkumpulD14;?>">
                                            </div>
											</td>                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
		<!-- END OF BAHAGIAN C -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- BAHAGIAN D        -->
        <!-- ============================================================== -->	
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">BAHAGIAN E: AKUAN PEKERJA </h5>
                                <div class="card-body">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                                                        <label class="form-check-label" for="invalidCheck">
                                                            Saya mengakui bahawa semua maklumat yang dinyatakan dalam borang ini adalah benar, betul dan lengkap. Sekiranya maklumat yang diberikan tidak benar, tindakan mahkamah boleh diambil ke atas saya di bawah perenggan 113(1)(b) Akta Cukai Pendapatan 1967.

                                                        </label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
												<div class="text">Note:
												<br>1. Borang ini hendaklah diisi oleh pekerja dan satu salinan diserahkan kepada majikan tanpa resit atau dokumen sokongan untuk tujuan<br> 
												&nbsp &nbsp pelarasan pengiraan PCB.<br>
												2. Majikan hendaklah meminta pekerja mengemukakan borang ini sekiranya pekerja pernah bekerja dengan majikan-majikan lain <br>
												&nbsp &nbsp dalam tahun semasa. <br>
												3. Majikan hanya perlu menyimpan borang ini untuk tempoh 7 tahun. Borang ini perlu dikemukakan sekiranya diminta oleh LHDNM.<br>
												<br> <br>
                                            </div>
											<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<div class='alert alert-danger alert-dismissable'><span>$error</span></div>";
						unset($_SESSION['error']);
                    }
                	if($action != 'view')
										echo '<div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" name="submit" class="btn btn-space btn-primary">';
									echo $formbutton;
									echo '</button>
                                            </div>';
									?>
								</div>
		</div>	
		</div>	
		</form>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>