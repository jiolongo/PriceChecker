<?php

include("connection.php");


if(isset($_POST['addbtn']))
{

			error_reporting(0);
		
			$productName=$_POST['productName'];
			$category=$_POST['category'];
            $brand=$_POST['brand'];
			$srp=$_POST['srp'];
			$price=$_POST['price'];
			 $image=$_POST['image'];
			$description=$_POST['description'];
			$notes=$_POST['notes'];
        
       

        
            $query=mysqli_query($con,"INSERT INTO product(productName,category,brand,srp,price,image,description,notes) VALUES('$productName','$category','$brand','$srp','$price','$image','$description','$notes')");

			
			
            if($query)
                {
                echo 
                    "<script> alert('Successfully Added!');
                    window.location = 'index.php';  </script>";


                }
                else
                {
                echo "<script> alert('Error!');
                history.back(); </script>";
                }
        
		
}


elseif(isset($_POST['updatebtn']))
{

			error_reporting(0);
            $productId=$_POST['productId'];
			$productName=$_POST['productName'];
			$category=$_POST['category'];
            $brand=$_POST['brand'];
			$srp=$_POST['srp'];
			$price=$_POST['price'];
			 $image=$_POST['image'];
			$description=$_POST['description'];
			$notes=$_POST['notes'];
        
       


			$updatequery=mysqli_query($con,"UPDATE `product` SET `productName`='$productName',`category`='$category',`brand`='$brand',`srp`='$srp',`price`='$price',`image`='$image',`description`='$description',`notes`='$notes' WHERE productId='$productId'");
			

        

			
			
            if($updatequery)
                {
                echo 
                    "<script> alert('Product Updated!');
                history.back();  </script>";


                }
                else
                {
                echo "<script> alert('Error!');
                history.back(); </script>";
                }
        
		
}


?>
