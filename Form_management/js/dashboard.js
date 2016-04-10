

$(document).ready(function () {
    
$(".emptydashboard").load("emptydashboard.php");
$(".admindashboard").load("admindashboard.php");
$(".userdashboard").load("userdashboard.php");

$("#confirmPassword").on("keyup focusout",function(){
    var confirmPassword=$("#confirmPassword").val();
    var newPassword=$("#newPassword").val();
    if(confirmPassword!=newPassword){
     
            
                     this.setCustomValidity("Password Not matching");
                    $("#confirmpara").html("Password Not matching");
                    $("#confirmPassword").css("border", "1px solid red");
                     $("#newPassword").css("border", "1px solid red");
    }
    else{
        
                     this.setCustomValidity("");
                    $("#confirmpara").html("");
                    $("#confirmPassword").css("border", "");
                     $("#newPassword").css("border", "");
    }
});
});