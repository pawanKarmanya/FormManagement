<?php 
session_start();
session_destroy();
include ('submit.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Management</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/formcss.css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/customjs.js"></script>
    </head>
    <body>
        <nav class="navbar-inverse navbar-fixed">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand"></a>
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a id="userLogInLi">UserLogIn</a></li>
                        <li><a id="adminLogInLi">AdminLogIn</a></li>
                    </ul>

                    <form class="navbar-form navbar-right loginform" method="post" id="userLogIn">
                       
                        <div class="form-group "><ul class="nav navbar-nav"><li><a>User LogIn</a></li> </ul></div>
                        <div class="form-group ">
                            <input type="email" placeholder="User Email Address" name="userEmail" class="form-control left" >
                            
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="User Password" name="userPassword" class="form-control left">
                            
                        </div>
                        <div class="form-group"><input type="submit" class="btn btn-success left" name="loginSubmit" value="LogIn"></div>
                       
                        <div class="form-group">  <p id="forgotpara"><a href="supportingFiles/forgotpassword.php">Forgot Password</a></p></div>
                    </form>
                        
                    
                    <form class="navbar-form navbar-right loginform" id="adminLogIn" method="post">
                        <div class="form-group "><ul class="nav navbar-nav"><li><a>Admin LogIn</a></li> </ul></div>
                        <div class="form-group ">
                            <input type="email" placeholder="Admin Email Address" name="adminEmail" class="form-control left" >
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Admin Password" name="adminPassword" class="form-control left">
                        </div>
                        <div class="form-group"><input type="submit" class="btn btn-success left" name="adminLogIn" value="LogIn"></div>
                        
                    </form>
                    
                    
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="col-md-10 col-md-offset-2">
                <?php if(isset($error)){
                echo "<div class='alert alert-danger'>".$error."</div>";};
                ?>
                <?php if(isset($message)){
                echo "<div class='alert alert-success'>".$message."</div>";};
                ?>
            </div>
            <h2 class="bottom top"><u>REGISTRATION</u>   <u>FORM</u></h2>
            <form class="form-horizontal " method="post">
                <div class="form-group topmore">
                    <label class="control-label col-sm-2 col-sm-offset-1" for="firstName">FIRST NAME:</label>
                    <div class="col-sm-6">
                        <input type="text" id="firstName" name="firstName" class="form-control ">
                    </div>
                    <p id="firstnamepara"></p>
                </div>
                <div class="form-group top">
                    <label class="control-label col-sm-2 col-sm-offset-1" for="lastName">LAST NAME:</label>
                    <div class="col-sm-6">
                        <input type="text" id="lastName" name="lastName" class="form-control ">
                    </div>
                    <p id="lastnamepara"></p>
                </div>
                <div class="form-group top">
                    <label class="control-label col-sm-2 col-sm-offset-1" for="emailAddress">EMAILADDRESS:</label>
                    <div class="col-sm-6">
                        <input type="text" id="emailAddress" class="form-control " name="emailAddress" >
                    </div>
                    <p id="emailpara"></p>
                </div>

                <div class="form-group top">
                    <label class="control-label col-sm-2 col-sm-offset-1" for="password">PASSWORD:</label>
                    <div class="col-sm-6">
                        <input type="password" maxlength="13" id="password" name="password" class="form-control ">
                    </div>
                    <p id="passwordpara"></p>
                </div>

                <div class="form-group top">
                    <label class="control-label col-sm-2 col-sm-offset-1" for="confirmPassword">CONFIRM PASSWORD:</label>
                    <div class="col-sm-6">
                        <input type="password" maxlength="13" id="confirmPassword" name="confirmPassword" class="form-control ">
                    </div>
                    <p id="confirmpasswordpara"></p>
                </div>
                
                <div class="form-group top">
                    <label class="control-label col-sm-2 col-sm-offset-1" for="mobileNumber">MOBILE NUMBER:</label>
                    <div class="col-sm-6">
                        <input type="text" maxlength="13" id="mobileNumber" name="mobileNumber" class="form-control ">
                    </div>
                    <p id="mobilepara"></p>
                </div>

                <div class="form-group top">
                    <div class=" col-sm-offset-3 col-sm-6">
                        <input type="submit"  class="btn btn-success left" name="submitSignUp" value="SUBMIT">
                        <input type="reset"  class="btn btn-success left" value="RESET">
                    </div>
                </div>

            </form>
        </div>



        

    </body>

</html>

