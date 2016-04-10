<?php include ('changepasswordsubmit.php');?>
<html>
    <head>
        <title>Change Password</title>
        
        <script type="text/javascript" src="../js/jquery.js"></script>
        
        <script type="text/javascript" src="../js/dashboard.js"></script>
    </head>
    <body>
        <nav class="userdashboard">
            
        </nav>
        <div class="container">
        <form method="post" class="form-horizontal">
            <div class="col-md-6 col-md-offset-3">
                <h1><u>CHANGE</u> <u>PASSWORD</u> <u>FORM</u></h1>
            </div>
            <div class="col-md-5 col-md-offset-3">
                <div class="form-group">
                    <label for="oldPassword">Old Password:</label>
                    <input type="password" class="form-control" name="oldPassword" id="oldPassword" required>
                </div>
                </div>
            <div class="col-md-3"><?php if(isset($error)){echo "<div class='alert alert-danger'>".$error."</div>";}?></div>
            <div class="col-md-5 col-md-offset-3">
            
                <div class="form-group">
                    <label for="newPassword">New Password:</label>
                    <input type="password" class="form-control" name="newPassword" id="newPassword" required>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-5 col-md-offset-3">
            
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password:</label>
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
                    
                </div>
            </div>
            <div class="col-md-3" id="confirmpara"></div>
            <div class="col-md-1 col-md-offset-4">
                <input type="submit" class="btn btn-success" name="changePassword" value="SUBMIT">
                
            </div>
            <div class="col-md-1">
                <input type="reset" class="btn btn-success" value="RESET">
            </div>
        </form>
        <div class="col-md-8 col-md-offset-2"><?php if(isset($message)){echo "<div class='alert alert-success'>".$message."</div>";}?></div>
        </div>
        </body>
</html>