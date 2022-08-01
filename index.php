
  <?php
include("header.php");
include("connection.php");

  ?>
    

    <main class="page-header">
      <div class="container-fluid p-4">
        <div class="row justify-content-center">
          <a  autofocus href="product.php" class="btn btn-danger">  Add Product </a>
          <div class="col-12 mt-4 text-center">   
            <form method="POST" action="deleteproduct.php">
                <div class="table-responsive" style="font-size: 10px;">
                <table class="table table-bordered  table-striped table-hover" id="manageproductable"style="white-space:nowrap;width:100%;" >
                    <thead >
                        <tr style="vertical-align:middle;">
                            <!-- <th style="text-align:center;"></th>  -->
                            <th style="text-align:center;">Product</th> 
                            <th style="text-align:center;">Price</th>
                            <th style="text-align:center;">Product Size</th>    
                            <th style="text-align:center;">Brand</th>
                            <th style="text-align:center;">Category</th>   
                            <th style="text-align:center;">Original Price(SRP)</th>
                           
                        <!-- ps. product size = description -->
                            <th style="text-align:center;">Notes/ <br> Date & Time Updated</th>  
                            <th style="text-align:center;">Action</th>
                            <th style="text-align:center;">Action</th>
                        </tr >
                    </thead>
                    <tbody >
                        <?php
                      $selectproduct=mysqli_query($con,"SELECT * FROM product ORDER BY productId DESC");
                         while($row = mysqli_fetch_array($selectproduct))
                         { 
                            $productId = $row["productId"];
                            $productName=$row['productName'];
                            $desc=$row['description'];
                            $brand=$row['brand'];
                            $category=$row['category'];
                            $notes=$row['notes'];
                            $srp=$row['srp'];
                            $price=$row['price'];
                            // $image=$row['image'];
                           
                            //$img='<img src="data:image/jpeg;base64,'. base64_encode($row['image']). '" width="70" height="70">';
                            $dateUpdated=$row['dateUpdated'];

                           ?>
                          
                         <tr style="vertical-align:middle;">
                               
                              <!-- <input type="hidden" value="<?//$productId?>" name="productId"> -->
                               <!-- <td><img src="images/ingredients-animated.jpg" alt="" width="70" height="70"></td> -->
                               <td><b><?php echo $productName;?></b></td>
                               <td><b><?php echo $price; ?></b></td>
                               <td><?php echo $desc ?></td>  <!-- ps. product size = description -->
                               <td><?php echo $brand; ?></td>
                               <td><?php echo $category; ?></td>
                               <td><?php echo $srp;?></td>
                            
                               <td><?php echo $notes.' <br><br>'.$dateUpdated; ?></td>
                               <td><a class="btn btn-sm btn-primary" href="updateproduct.php?productId=<?php echo $productId?>">Update  </a></td>


                               <td>
                                  <form action="deleteproduct.php?productId=<?php echo $productId?>" method="POST">
                                    <input type="hidden" name="productId" value="<?php echo $productId?>">
                                    <input onclick="return confirm('Do you want to delete this product?');" class="btn btn-sm btn-danger" type="submit" name="btndelete" value="Delete">
                                  </form>



                             
                              </td>
                          </tr>
                         
                    <?php                         
                       }
                     ?>
                      </tbody>
                </table>
                </div>
                </form>







          </div>
        </div>   
      </div>    
    </main>

    

    <?php
 include("footer.php");
  ?>

