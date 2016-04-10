<?php 
$link=mysqli_connect("localhost","dbuser","123","userdetails");
session_start();
$x=1;
$y=12;
$_SESSION["id'$x'"]=25;
$_SESSION["id'$y'"]=30;
echo $_SESSION["id'$x'"];
echo '<br><br>'.$_SESSION["id'$y'"];
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
      <?php echo'["';?><?php echo "$row[0]";?> <?php echo'","';?><?php echo "$row[1]";?> <?php  echo'","';?><?php echo "$row[2]";?>  <?php echo'"]'; ?><?php echo",";}?>
      
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
   

} );
    
    
    
    
    </script>
    
    
    <table id="example" class="display" width="100%"></table>
    <body><div class="navbar-default navbar-nav"><ul class="navbar nav">
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
        </ul>
    </li> </ul>
    </div>
    </body>

</html
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.css"/>
        
<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.js"></script>
    