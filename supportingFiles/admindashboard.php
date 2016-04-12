<!doctype html>
<html>
    <head>
        <title>Admin Dashboard</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">


        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar-inverse navbar-fixed">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand">Form Management</a>
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                        <span class="sr-only"> Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ">
                        <li class="active"><a href="adminLogin.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li ><a href="admincreateuser.php"><span class="glyphicon glyphicon-user"></span> Create User</a></li>

                    </ul>



                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="logout.php?id=1"><span class="glyphicon glyphicon-off"></span> LogOut</a></li>

                    </ul>

                </div>
            </div>
        </nav>
    </body>
</html>