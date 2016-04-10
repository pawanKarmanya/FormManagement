<?php
include ('passwordforgot.php');
?>
<!doctype html>
<html>
    <head>
        <title>Forgot Password</title>
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/formcss.css" rel="stylesheet">

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
                        <li class="active"><a href="../index.php">Home</a></li>
                       
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container">
            <h2 class="bottom top"><u>Enter</u> <u>Email</u> <u>Address</u> </h2>
            <form class="form-horizontal" method="post">
                <div class="form-group topmore">
                    <label class="control-label col-sm-2 col-sm-offset-1" for="forgotEmail">Email:</label>
                    <div class="col-sm-6">
                        <input type="email" id="forgotEmail" name="forgotEmail" class="form-control" value="<?php if(isset($email))echo $email;?>" required>
                        
                    </div>
                    
                    
                </div>
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-5">
                        <input type="submit" class="btn btn-success" value="SUBMIT" name="submit">
                    </div>
                </div>
            </form>
            <?php
                    if(isset($error)){echo '<div class="alert alert-danger">'.$error.'</div>';
                    }
                    if(isset($message)){echo '<div class="alert alert-success">'.$message.'</div>';
                    }
                    
                    ?>
    </body>
    
</html>

