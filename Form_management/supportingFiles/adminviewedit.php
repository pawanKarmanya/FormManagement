<?php 
 include ('adminview.php');?>
<html>
    <head>
        <title>User Login success page</title>
        
        <link href="../css/formcss.css">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/customjs.js"></script>
        <script type="text/javascript" src="../js/dashboard.js"></script>
    </head>
    <body>
        <nav class="admindashboard">
            
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-1 top"><?php if(isset($error)){echo "<div class='alert alert-danger'>".$error."</div>";}?></div>
                <form class="form-horizontal" method="post">
                <div class="col-md-12 topmore">
                    <div class="col-md-3 col-md-offset-2">
                        <label>First Name:</label>
                        <input type="text" class="form-control" value="<?php echo $firstName;?>" >
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" value='<?php echo $lastName;?>'>
                    </div>
                </div>
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Email Address:</label>
                        <input type="text" class="form-control" value='<?php echo $emailAddress;?>'>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Mobile Number:</label>
                        <input type="text" class="form-control" value='<?php echo $mobileNumber;?>'>
                    </div>
                </div>
                    
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Address Line 1:</label>
                        <textarea class="form-control" name="addressLineOne"  required><?php echo $addressLineOne;?></textarea>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>Address Line 2:</label>
                        <textarea class="form-control" name="addressLineTwo"  required><?php echo $addressLineTwo;?></textarea>
                    </div>
                </div>
                    
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>City:</label>
                        <input type="text" class="form-control" name="city" value='<?php echo $city;?>' id="city" required>
                        <p id="citypara"></p>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>State:</label>
                        <input type="text" class="form-control" name="state" id="state" value='<?php echo $state;?>' required>
                        <p id="statepara"></p>
                    </div>
                </div>
                    <div class="col-md-12 top">
                    <div class="col-md-3 col-md-offset-2">
                        <label>Country:</label>
                        <input type="text" class="form-control" name="country" id="country" value='<?php echo $country;?>' required>
                        <p id="countrypara"></p>
                    </div>
                    
                    <div class="col-md-3 col-md-offset-1">
                        <label>ZipCode:</label>
                        <input type="tel" class="form-control" maxlength="7" name="zipcode" value='<?php echo $zipcode;?>' id="zipcode" required>
                        <p id="zipcodepara"></p>
                    </div>
                </div>
                    <div class="col-md-12 top">
                        <div class="col-md-1 col-md-offset-4">
                            <input type="submit" name='adminEdit' value="Edit Profile" class="btn btn-success"></div>
                            <div class="col-md-1 col-md-offset-1">
                                <input type="submit" name="adminDelete" class="btn btn-success" value="Delete Profile">
                            </div>
                    </div>
                </form>
                
                <div class="col-md-2 col-md-offset-4 topmore"><button class="btn btn-success" data-toggle="modal" data-target="#myModal">User Location On Google Map</button></div>
            </div>
        </div>
        <div class="container">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="header">User Address</h4>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" >CLOSE</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
    
    
</html>