
$(document).ready(function () {
    
    $("#userLogIn").hide();
     $("#adminLogIn").hide();
    $("#hardware").hide();
    $("#software").hide();
     $("#network").hide();
     
     $("#userLogInLi").click(function(){
        $("#userLogIn").show();
        $("#adminLogIn").hide();
     });
     $("#adminLogInLi").click(function(){
        $("#userLogIn").hide();
        $("#adminLogIn").show(); 
     });
 
    $("#emailAddress").on("keyup focusout", function () {
       
        var stringOfEmail = $("#emailAddress").val();
        var lengthOfEmail = stringOfEmail.length;
        var indexOfAt = stringOfEmail.indexOf("@");
        var indexofDot = stringOfEmail.lastIndexOf(".");
        var errorInEmail = 0;

        if (lengthOfEmail > 0)
        {

            if (indexOfAt >= 0 && indexofDot >= 0) {

                if (indexofDot <= indexOfAt) {
                    errorInEmail = 1;
                    $("#emailpara").html(". after @ and atleast two characters after .");
                    this.setCustomValidity(". after @ and atleast two characters after .");
                    $("#emailAddress").css("border", "1px solid red");
                }
                if (3 > (lengthOfEmail - indexofDot)) {
                    errorInEmail = 1;
                    this.setCustomValidity("Atleast two characters after .");
                    $("#emailpara").html("Atleast two characters after .");
                    $("#emailAddress").css("border", "1px solid red");
                }
                if ((indexofDot - indexOfAt) == 1) {
                    errorInEmail = 1;
                    $("#emailpara").html("No characters between @ and .");
                     this.setCustomValidity("No characters between @ and .");
                    $("#emailAddress").css("border", "1px solid red");
                }
                if (indexOfAt < 5) {
                    errorInEmail = 1;
                    
                     this.setCustomValidity("Atleast 5 characters before @");
                    $("#emailpara").html("Atleast 5 characters before @");
                    $("#emailAddress").css("border", "1px solid red");
                }


            } else {
                errorInEmail = 1;
                $("#emailpara").html("Email doesnot contain @ and . ");
                
                     $("#emailAddress")[0].setCustomValidity("Email doesnot contain @ and . ");
                $("#emailAddress").css("border", "1px solid red");
            }

        } else {
            errorInEmail = 1;
            $("#emailpara").html("Please enter the Email address");
            
                      $("#emailAddress")[0].setCustomValidity("Please enter the Email address");
            $("#emailAddress").css("border", "1px solid red");
        }
        if (errorInEmail == 0) {
            
                     this.setCustomValidity("");
            $("#emailpara").html('');
            $("#emailAddress").css("border", "");

        }
    });


//First name validation

    $("#firstName").on("keyup focusout", function () {
        
        var stringOfName = $("#firstName").val();
        var lengthOfFirstName = stringOfName.length;
        var firstNameValid = checkingNumber(stringOfName);

        var errorInName = 0;
        if (lengthOfFirstName <= 0) {
            errorInName = 1;
            $("#firstName")[0].setCustomValidity("Please enter first name");
            $("#firstnamepara").html("Please enter the First name");
            $("#firstName").css("border", "1px solid red");
        }
        if (firstNameValid == 0) {
            errorInName = 1;
            
            this.setCustomValidity("Please enter alphabets");
            $("#firstnamepara").html("Please enter alphabets");
            $("#firstName").css("border", "1px solid red");
        }
        if (errorInName == 0) {
            
            this.setCustomValidity("");
            $("#firstnamepara").html('');
            $("#firstName").css("border", "");
        }
    });


    //last name validation
    $("#lastName").on("keyup focusout", function () {
        var stringOfLastName = $("#lastName").val();
        var lengthOfLastName = stringOfLastName.length;
        var lastNameValid = checkingNumber(stringOfLastName);
        var errorInLastName = 0;
        if (lengthOfLastName <= 0) {
            errorInLastName = 1;
            
            this.setCustomValidity("Please Enter The Last Name");
            $("#lastnamepara").html("Please enter the Last name");
            $("#lastName").css("border", "1px solid red");
        }

        if (lastNameValid == 0) {

            errorInLastName = 1;
            
            this.setCustomValidity("Please enter alphabets");
            $("#lastnamepara").html("Please enter alphabets");
            $("#lastName").css("border", "1px solid red");
        }

        if (errorInLastName == 0) {
            
            this.setCustomValidity("");
            $("#lastnamepara").html('');
            $("#lastName").css("border", "");
        }
    });



    $("#mobileNumber").on("keyup focusout", function () {

        var phoneValue = $("#mobileNumber").val();
        var errorphone = 0;
        var phoneLength = phoneValue.length;

        if (phoneLength < 10)
        {
            errorphone = 1;
            
            this.setCustomValidity("Enter complete Number");
            $("#mobilepara").html("Enter complete number");
            $("#mobileNumber").css("border", "1px solid red");
        }
        if (phoneLength == 10) {
            
            this.setCustomValidity("");
            $("#mobileNumber").css("border", "");
            $("#mobilepara").html("");

        }

        var phoneNoValid = charvalidforphone(phoneValue);

        if (phoneLength == 10) {
            if (!phoneNoValid)
            {
                errorphone = 1;
                
            this.setCustomValidity("Please Enter numbers");
                $("#mobilepara").html("Please Enter numbers");
                $("#mobileNumber").css("border", "1px solid red");
            }

            if (phoneNoValid > 0) {
                
            this.setCustomValidity("");
                $("#mobilepara").html("");
                $("#mobileNumber").css("border", "");

            }
        }

        if (errorphone == 0) {
            
            this.setCustomValidity("");
            $("#mobileNumber").css("border", "");
            $("#mobilepara").html("");
        }

    });
    $("#zipcode").on("keyup focusout", function () {
        var errorzip = 0;
        var zipvalue = $("#zipcode").val();
        var validzip = charvalidforphone(zipvalue);
        if(zipvalue.length==6){
        if (!validzip) {
            errorzip = 1;
            $("#zipcodepara").html("Enter zipcode numbers");
            this.setCustomValidity("Enter zipcode numbers");
            $("#zipcode").css("border", "1px solid red");
        }
    }
    else{
        
            errorzip = 1;
            $("#zipcodepara").html("Enter complete zipcode");
            this.setCustomValidity("Enter complete zipcode");
            $("#zipcode").css("border", "1px solid red");
        
    }
        if (errorzip == 0) {
            
                     this.setCustomValidity("");
            $("#zipcodepara").html("");
            $("#zipcode").css("border", "");
        }
    });


    $("#country").on("keyup focusout", function () {

        var errorcountry = 0;
        var countryvalue = $("#country").val();
        var validcountry = checkingNumber(countryvalue);
        if (!validcountry) {
            errorcountry = 1;
            
                     this.setCustomValidity("Enter valid name");
            $("#countrypara").html("Enter Valid name");
            $("#country").css("border", "1px solid red");
        }
        if (errorcountry == 0) {
            
                     this.setCustomValidity("");
            $("#countrypara").html("");
            $("#country").css("border", "");
        }
    });



    $("#city").on("keyup focusout", function () {
        var errorcity = 0;
        var cityvalue = $("#city").val();
        var validcity = checkingNumber(cityvalue);
        if (!validcity) {
            errorcity = 1;
            $("#citypara").html("Enter Valid name");
            $("#city").css("border", "1px solid red");
        }
        if (errorcity == 0) {

            $("#citypara").html("");
            $("#city").css("border", "");
        }
    });



    $("#state").on("keyup focusout", function () {
        var errorstate = 0;
        var statevalue = $("#state").val();
        var validstate = checkingNumber(statevalue);
        if (!validstate) {
            errorstate = 1;
            $("#statepara").html("Enter Valid name");
            $("#state").css("border", "1px solid red");
        }
        if (errorstate == 0) {

            $("#statepara").html("");
            $("#state").css("border", "");
        }
    });

    $("#confirmPassword").on("focusout keyup", function(){
        
        var password=$("#password").val();
        var confirmPassword=$("#confirmPassword").val();
        if(password!=confirmPassword){
            $("#confirmpasswordpara").html("Password Not Matching");
            this.setCustomValidity("Password Not Matching");
            $("#confirmPassword").css("border", "1px solid red");
            $("#password").css("border", "1px solid red");
        
        }
        else{
            $("#confirmpasswordpara").html("");
            this.setCustomValidity("");
            $("#password").css("border", "");
            $("#confirmPassword").css("border", "");
        }
        
    });


    //checking the character of the string

    function checkingNumber(stringname) {
        var i;
        var returnvalue;
        var number1;
        var lengthof = stringname.length;
        for (i = 0; i < lengthof; i++) {
            number1 = Number(stringname.charAt(i));

            if (!number1) {
                returnvalue = true;
            } else {
                return returnvalue = false;

            }
        }

        return returnvalue;
    }




    function charvalidforphone(stringnamephone) {
        var j;
        var number123;
        var lengthofphone = stringnamephone.length;

        for (j = 0; j < lengthofphone; j++) {
            number123 = Number(stringnamephone.charAt(j));

            if (!number123) {

                if (stringnamephone.charAt(j) == "0")
                {


                } else {
                    return false;
                }
            }
        }
        return true;
    }





});