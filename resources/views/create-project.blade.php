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
    <!--    <link href="css/logincss/jquery.simplyscroll.css" rel="stylesheet">-->
        <link href="css/logincss/animate.css" rel="stylesheet">
    <!--    <link href="css/logincss/flaticon.css" rel="stylesheet">-->
        <link href="css/logincss/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        <link href="css/logincss/ic-style.css" rel="stylesheet">
    <!--    <link href="css/logincss/scrollbar-style.css" rel="stylesheet">-->
        <link href="css/logincss/main-style.css" rel="stylesheet">
        <link href="css/main-style.css" rel="stylesheet">
        <link href="css/logincss/responsive.css" rel="stylesheet">
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
                    <h1 class="titleh1 loginTitle">Create New Project</h1>
                    <div class="col-lg-4 emptyDiv">&nbsp;</div>
                    <div class="col-lg-4 col-xs-12">
                        <div class="row">
                            <form action="url_createproject" method="post">
                                {{ csrf_field() }}
                                <div class="col-lg-12 inputRow">
                                    <input type="text" required style="width: 100%; height: 40px; line-height: 60px; border-radius: 3px; border: none; padding: 0px 15px;" name="projectname" placeholder="Project Name">
                                </div>
                                <div class="col-lg-12 inputRow">
                                    <input type="text" required style="width: 100%; height: 40px; line-height: 60px; border-radius: 3px; border: none; padding: 0px 15px;" name="projecturl" placeholder="Project URL">
                                </div>
                                <div class="cls_clipbtn col-lg-12 bottom-btns">
                                    <button type="submit" style="height: 50px; color: #fff; font-size: 16px; border-radius: 4px; font-weight: 600; outline: none; display: inline-block;" class="btn add-video-btn"> Create </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 emptyDiv">&nbsp;</div>
                    </div>
                </div><!--row-->
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
    </body>
</html>