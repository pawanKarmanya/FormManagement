<!doctype html>
<html>
    <head>
        <title>User Dashboard</title>
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        

        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar-inverse navbar-fixed">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand">Regt Page</a>
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                        <span class="sr-only"> Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">User Profile<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="usereditprofile.php">Edit Profile</a></li>
                                <li><a href="userviewprofile.php">View Profile</a></li>
                            </ul>
                        </li> 
                        <li><a href="changepassword.php">Change Password</a></li>
                    </ul>
                    
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="../index.php">LogOut</a></li>
                       
                    </ul>
                    
                </div>
            </div>
        </nav>
    </body>
</html>