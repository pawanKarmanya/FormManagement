<?php 
 include ('adminusersubmit.php');?>
<html>
    <head>
        <title>User Login success page</title>
        
        <script type="text/javascript" src="../js/jquery.js"></script>
        
        <script type="text/javascript" src="../js/customjs.js"></script>
        <script type="text/javascript" src="../js/dashboard.js"></script>
    </head>
    <body>
        <nav class="admindashboard">
            
        </nav>
        <div class="container">
            <div class="row">
                <form class="form-horizontal" method="post">
                <div class="col-md-12 topmore">
                    <div class="col-md-3 col-md-offset-2">
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="firstName" id="firstName">
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="lastName" id="lastName">
                    </div>
                </div>
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Email Address:</label>
                        <input type="text" class="form-control" name="emailAddress" id="emailAddress">
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Mobile Number:</label>
                        <input type="text" class="form-control" name="mobileNumber" id="mobileNumber">
                    </div>
                </div>
                    
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Address Line 1:</label>
                        <textarea class="form-control" name="addressLineOne" id="addressLineOne"  required></textarea>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Address Line 2:</label>
                        <textarea class="form-control" name="addressLineTwo" id="addressLineTwo" required></textarea>
                    </div>
                </div>
                    
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>City:</label>
                        <input type="text" class="form-control" name="city" id="city" required>
                        <p id="citypara"></p>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>State:</label>
                        <input type="text" class="form-control" name="state" id="state" required>
                        <p id="statepara"></p>
                    </div>
                </div>
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Country:</label>
                        <input type="text" class="form-control" name="country" id="country"  required>
                        <p id="countrypara"></p>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>ZipCode:</label>
                        <input type="tel" class="form-control" maxlength="7" name="zipcode" id="zipcode" required>
                        <p id="zipcodepara"></p>
                    </div>
                </div>
                    <div class="col-md-12 top">
                        <div class="col-md-1 col-md-offset-4">
                            <input type="submit" name='adminCreateUser' value="SUBMIT" class="btn btn-success"></div>
                            <div class="col-md-1 col-md-offset-1">
                            <input type="reset" name="reset" class="btn btn-success" value="RESET">
                            </div>
                    </div>
                </form>
                <div class="col-md-8 top col-md-offset-1">
                    <?php if(isset($error)){echo "<div class='alert alert-danger'>".$error."</div>";}?>
                    <?php if(isset($message)){echo "<div class='alert alert-success'>".$message."</div>";}?>
                </div>
            </div>
        </div>
    </body>
    
    
</html>