<?php
include("connection.php");


 if(isset($_POST['btndelete']))
{
   
   



    $id=$_POST['productId'];

 
  $query = "DELETE FROM product WHERE productId = $id";
  mysqli_query($con, $query);

  
                if($query){
                    echo 
                                    "<script> alert('Successfully Deleted!');
                                    window.location = 'index.php';  </script>";
                }else{
                    echo 
                                    "<script> alert('Error!');
                                    window.location = 'index.php';  </script>";
                }
 
}
else{
    echo 
    "<script> alert('Nothing Deleted!');
        history.back();  </script>";
}






?>