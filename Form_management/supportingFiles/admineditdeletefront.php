<?php 
 include ('admineditdeleteback.php');?>
<html>
    <head>
        <title>User Profile Edit</title>
        
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
                        <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $UserFirstName;?>" required>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $UserLastName;?>" required>
                    </div>
                </div>
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Email Address:</label>
                        <input type="text" class="form-control" name="emailAddress" id="emailAddress" value="<?php echo $UserEmailAddress;?>" required>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Mobile Number:</label>
                        <input type="text" class="form-control" name="mobileNumber" id="mobileNumber" value="<?php echo $UserMobileNumber;?>" required>
                    </div>
                </div>
                    
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Address Line 1:</label>
                        <textarea class="form-control" name="addressLineOne" id="addressLineOne"  required><?php echo $UserAddressOne;?></textarea>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Address Line 2:</label>
                        <textarea class="form-control" name="addressLineTwo" id="addressLineTwo" required><?php echo $UserAddressTwo;?></textarea>
                    </div>
                </div>
                    
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>City:</label>
                        <input type="text" class="form-control" name="city" id="city" value="<?php echo $UserCity;?>" required>
                        <p id="citypara"></p>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>State:</label>
                        <input type="text" class="form-control" name="state" id="state" value="<?php echo $UserState;?>" required>
                        <p id="statepara"></p>
                    </div>
                </div>
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Country:</label>
                        <input type="text" class="form-control" name="country" id="country" value="<?php echo $UserCountry;?>" required>
                        <p id="countrypara"></p>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>ZipCode:</label>
                        <input type="tel" class="form-control" maxlength="6" name="zipcode" id="zipcode" value="<?php echo $UserZipCode;?>" required>
                        <p id="zipcodepara"></p>
                    </div>
                </div>
                    <div class="col-md-12 top">
                        <div class="col-md-1 col-md-offset-4">
                            <input type="submit" name='adminEditFront' value="SUBMIT" class="btn btn-success"></div>
                            <div class="col-md-1 col-md-offset-1">
                            <input type="reset" name="reset" class="btn btn-success" value="RESET">
                            </div>
                    </div>
                </form>
                <div class="col-md-8 top col-md-offset-1">
                    <?php if(isset($Error)){echo "<div class='alert alert-danger'>".Error."</div>";}?>
                    <?php if(isset($Message)){echo "<div class='alert alert-success'>".$Message."</div>";}?>
                </div>
            </div>
        </div>
    </body>
    
    
</html>