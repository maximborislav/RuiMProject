<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Suisse View</title>
	<meta name="keywords" content="Suisse View" />
	<!-- Bootstrap -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <!--<link href="css/jquery.simplyscroll.css" rel="stylesheet">-->
    <link href="css/animate.css" rel="stylesheet">
    <!--<link href="css/flaticon.css" rel="stylesheet">-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="css/ic-style.css" rel="stylesheet">
    <link href="css/scrollbar-style.css" rel="stylesheet"> 
    <link href="css/main-style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<header class="header-bg">
        <div class="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">
                <div class="row">       
                    <nav class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                            <a class="navbar-brand" href="url_homepage"><img src="images/logo.png" alt="Logo"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="url_homepage">Home</a></li>
                                <li><a href="url_editplaylist">Edit Playlist</a>
                                    <ul class="nav-submenu">
                                        <li><a href="url_createplaylist">Create Playlist</a></li>
                                        <li><a href="url_editplaylist">Edit Playlist</a></li>
                                    </ul><!--nav-submenu-->
                                </li>
                                <li><a href="">Project</a>
                                    <ul class="nav-submenu">
                                        <li><a href="url_createproject">Create Project</a></li>
                                        <li><a href="url_editproject">Edit Project</a></li>
                                        <li><a href="url_projectlist">Project List</a></li>
                                    </ul>
                                </li>
                                <li><a href="url_logooverlay">Logo Overlay</a></li>
                                <li><a href="#">Messages</a>
                                    <ul class="nav-submenu">
                                        <li><a href="url_createmessage">New Message</a></li>
                                        <li><a href="url_editmessage">Edit Message</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Video Clip</a>
                                    <ul class="nav-submenu">
                                        <li><a href="url_createvideoclip">New Clip</a></li>
                                        <li><a href="url_editvideoclip">Edit Clip</a></li>
                                    </ul>
                                </li>
                                <li><a href="url_signup"><i class="fa fa-registered"></i></a></li>
                                <li><a href="url_login"><i class="fas fa-sign-in-alt"></i></a></li>
                                @if(session('sname'))
                                    <li><a href="#" class="user-button"><img src="images/user-top-ic.png">{{ session('sname') }}</a></li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
	<section class="contaneSection">
		<div class="container">				
			<div class="row">
			<h1 class="titleh1">Project List</h1>					
				<div class="col-sm-12 select-box create-playlist">
					<div class="row edit-playlist-section">
						<div class="col-sm-5 col-md-5">
							<select class="form-control" id="#">
								<option>New Project</option>
								<option>New Project 1</option>
								<option>New Project 2</option>
								<option>New Project 3</option>
								<option>New Project 4</option>
								<option>New Project 5</option>
								<option>New Project 6</option>
							</select>
						</div><!--col-5-->
						<div class="col-sm-3 col-md-3 project-save-btn">
							<a class="activate-playlist-button" href="#">
								<span>Save</span>
							</a>
						</div><!--col-3-->
					</div><!--row | edit-playlist-section-->
				</div><!--col-12-->		
			</div><!--row-->
			<div class="col-sm-12 col-md-12">
				<div class="row">
                    <div class="table-section project-list-section">
                        <div class="table-responsive">          
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="video-clips-links">Project Name</th>
                                        <th class="">Project URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active-tr">
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                      <td>Kulm Winter</td>
                                      <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Summer</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                    <tr>
                                        <td>Kulm Winter</td>
                                        <td>customername\projectname\url-name.html</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--table-responsive-->
                    </div><!--table-section-->
				</div><!--row-->
			</div><!--col-12-->
			<div class="bottom-btns project-list-btns">
				<a href="#" class="add-video-btn ic-edit-project"><span>Edit Selected Project</span></a>
				<a href="#" class="del-video-btn ic-delete-video"><span>Delete Selected Project</span></a>
				<a href="#" class="save-btn ic-save"><span>Save Changes</span></a>
			</div>
		</div><!--container-fluid-->
	</section><!--sectionhome-->

	<footer class="servicefooter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12 copynote wow fadeInDown">
					Copyright 2018
				</div>
			</div>
		</div>
	</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/filterable.pack.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery.simplyscroll.js"></script> -->
    <script src="js/wow.min.js"></script>
    <script src="js/scrollbar.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		new WOW().init();
		$("#scroller").simplyScroll();
	</script>
</body>
</html>