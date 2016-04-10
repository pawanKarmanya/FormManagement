
$(document).ready(function() {
    $('#example').DataTable( {
        data: dataSet,
        
        "scrollY":        "500px",
        "scrollCollapse": true,
        "paging":         false,
        columns: [
            { title: "First Name" },
            { title: "Last Name" },
            { title: "Email Address" }
        ]
    } );
   
   
   
   
    var table = $('#example').DataTable();
     
    $('#example tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
       
        $.post("../supportingFiles/adminpass.php", {email: data[2]});
        
         window.location.href = "../supportingFiles/adminviewedit.php"; 
        
    } );
 

} );
    