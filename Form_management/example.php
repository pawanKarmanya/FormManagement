<?php 
$link=mysqli_connect("localhost","dbuser","123","userdetails");
session_start();
$query22="select * from user";
 $result=mysqli_query($link,$query22);
 
  
?>

<html>
    <head>
        <title>Example</title>
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
        <script src="js/jquery.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
    </head>
    <script>
   
  dataSet=[
      <?php while($row=mysqli_fetch_row($result)){?>
      <?php echo'["';?><?php echo "$row[0]";?> <?php echo'","';?><?php echo "$row[1]";?> <?php  echo'","';?><?php echo "$row[2]";?><?php echo'"]'; ?><?php echo",";}?>
      
  ];
 
$(document).ready(function() {
    $('#example').DataTable( {
        data: dataSet,
        
        "scrollY":        "500px",
        "scrollCollapse": true,
        "paging":         false,
        columns: [
            { title: "email" },
            { title: "password" },
            { title: "id" }
            
        ]
    } );
   

 
    
    
    });
    </script>
    
    
    <table id="example" class="display" width="100%"></table>
    

</html
    