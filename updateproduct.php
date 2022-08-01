
<?php
 include("header.php");
 include("connection.php");


 $selectedProduct = $_GET['productId'];
 $productquery=mysqli_query($con,"SELECT * FROM product WHERE productId= $selectedProduct");
                                              
                        while($row=mysqli_fetch_assoc($productquery))
                        {
                          $productName=$row['productName'];
                          $desc=$row['description'];
                          $brand=$row['brand'];
                          $category=$row['category'];
                          $notes=$row['notes'];
                          $srp=$row['srp'];
                          $price=$row['price'];
                          $dateUpdated=$row['dateUpdated'];
                         }
                                
  ?>

    <main class="page-header">
        <div class="container py-3">
        
          <div class="row justify-content-center">
            
          <h1 class="text-center">Update Item</h1>

          <form  method="POST" action="addproduct.php" enctype="multipart/form-data">

            <input type="hidden" name="productId" value="<?=$selectedProduct?>">
            <div class="form-group row ">
              <label for="prodName" class="col-sm-3 col-form-label">Product Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="prodName" name="productName" value="<?=$productName;?>" required>
              </div>
            </div>

          <!-- ps. product size = description -->
          <div class="form-group row ">
              <label for="desc" class="col-sm-3 col-form-label">Product Size:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="desc"  name="description" value="<?= $desc ?>"required>
              </div>
            </div>  


            <div class="form-group row ">
              <label for="category" class="col-sm-3 col-form-label">Category:</label>
              <div class="col-sm-9">
              
                <select class="form-control input-sm" id="category" name="category"  required>

                <option selected="selected" disabled>Pick Categories:</option>
                <option value="Beverages" <?php if($category == 'Beverages'){ echo ' selected="selected"'; } ?> >Beverages </option>
                <option value="CannedGoods" <?php if($category == 'CannedGoods'){ echo ' selected="selected"'; } ?> >CannedGoods</option>
                <option value="FrozenFoods" <?php if($category == 'FrozenFoods'){ echo ' selected="selected"'; } ?> >FrozenFoods</option>
                <option value="Meat" <?php if($category == 'Meat'){ echo ' selected="selected"'; } ?> >Meat </option>
                <option value="Fruits" <?php if($category == 'Fruits'){ echo ' selected="selected"'; } ?> >Fruits</option>
                <option value="Vegetables" <?php if($category == 'Vegetables'){ echo ' selected="selected"'; } ?>>Vegetables </option>
                <option value="Condiments/Spices" <?php if($category == 'Condiments/Spices'){ echo ' selected="selected"'; } ?> >Condiments/Spices</option>
                <option value="Sauces/Oils" <?php if($category == 'Sauces/Oils'){ echo ' selected="selected"'; } ?> >Sauces/Oils</option>
                <option  value="Snacks" <?php if($category == 'Snacks'){ echo ' selected="selected"'; } ?> >Snacks</option>
                <option value="Bread/Crackers" <?php if($category == 'Bread/Crackers'){ echo ' selected="selected"'; } ?> >Bread/Crackers</option>
                <option value="Pasta/Rice/Noodles" <?php if($category == 'Pasta/Rice/Noodles'){ echo ' selected="selected"'; } ?> >Pasta/Rice/Noodles</option>
                <option value="Cereal" <?php if($category == 'Cereal'){ echo ' selected="selected"'; } ?> >Cereal</option>
                <option value="Baking" <?php if($category == 'Baking'){ echo ' selected="selected"'; } ?> >Baking</option>
                <option value="PersonalCare" <?php if($category == 'PersonalCare'){ echo ' selected="selected"'; } ?> >PersonalCare</option>
                <option value="HealthCare" <?php if($category == 'HealthCare'){ echo ' selected="selected"'; } ?> >HealthCare</option>
                <option value="Paper/Wrap" <?php if($category == 'Paper/Wrap'){ echo ' selected="selected"'; } ?> >Paper/Wrap</option>
                <option value="HouseholdSupplies" <?php if($category == 'HouseholdSupplies'){ echo ' selected="selected"'; } ?> >HouseholdSupplies</option>
                <option value="BabyItems" <?php if($category == 'BabyItems'){ echo ' selected="selected"'; } ?> >BabyItems</option>
                <option value="Others" <?php if($category == 'Others'){ echo ' selected="selected"'; } ?> >Others</option>
              </select>

              </div>
            </div>

            <div class="form-group row ">
              <label for="BRAND" class="col-sm-3 col-form-label">Brand:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="BRAND" placeholder="Product Brand" name="brand" value="<?= $brand ?>" required>
              </div>
            </div>

            <div class="form-group row ">
              <label for="SRP" class="col-sm-3 col-form-label">Original Price(SRP):</label>
              <div class="col-sm-9">
                <input type="number" step="0.01" class="form-control" id="SRP" placeholder="Suggested Retail Price (ex. 0.00)" name="srp" value="<?= $srp ?>"required>
              </div>
            </div>

            <div class="form-group row ">
              <label for="Price" class="col-sm-3 col-form-label">Price:</label>
              <div class="col-sm-9">
                <input type="number" step="0.01" class="form-control" id="Price" placeholder="Price (ex. 0.00)" name="price" value="<?= $price ?>" required>
              </div>
            </div>

            <div class="form-group row ">
              <label for="Image" class="col-sm-3 col-form-label">Image:</label>
              <div class="col-sm-9">
             

			        <input  class="form-control" id="Image" name="my_image" type="file" accept='image/jpeg' value="<?= $image ?>" >
                
              </div>
            </div>
           


            <div class="form-group row ">
              <label for="Notes" class="col-sm-3 col-form-label">Notes:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="Notes" placeholder="(ex. Add 6pesos for deposit)" name="notes" value="<?= $notes ?>">
              </div>
            </div>
         
           
           
             <div class="form-group row">  
            
              
              <button type="submit" name="updatebtn" class="btn btn-primary">Update Product</button>
              
                
             
            </div> 
            


            <div class="form-group row mt-1">  
            <a href="index.php" class="btn btn-danger">  Go back </a>
           
            </div> 
            
          </form>

       

          
          </div>
        </div>         
    </main>
    <div class="container">
        <h3> Category list</h3>
          <ul>
        <li> <strong>Fruits</strong> – bananas, apples, grapes, oranges, strawberries, avocados, peaches, pineapple, pears, etc.</li>
        <li> <strong>Vegetables</strong> – potatoes, tomatoes, onions, carrots, lettuce, broccoli, peppers, celery, garlic, cucumbers, etc.</li>
        <li> <strong>Canned Goods</strong> – olives, soup, tuna, veggies, fruit, etc.</li>
        <li> <strong>Frozen Foods</strong> – fish, ice cream, pizza, potatoes, ready meals, etc.</li>
        <li> <strong>Meat</strong> – chicken, beef, pork, sausage, etc.</li>
        <li> <strong>Condiments &amp; Spices </strong> – salt, sugar, pepper, oregano, cinnamon, ketchup, mayonnaise, mustard , etc.</li>
        <li> <strong>Sauces &amp; Oils</strong> – olive oil, tomato sauce, hot sauce, soy sauce, etc.</li>
        <li> <strong>Snacks</strong> – chips, crackers, pretzels, popcorn, peanuts, nuts, candy, etc.</li>
        <li> <strong>Bread &amp; Crackers</strong> – whole wheat, white, italian, sandwich, tortillas, pies, muffins, bagels, cookies, etc.</li>
        <li> <strong>Beverages</strong> – water, coffe, milk, juice, soda, tea, beer, wine, etc.</li>
        <li> <strong>Pasta/Rice/Noodles</strong> – spaghetti, macaroni, noodles etc.</li>
        <li> <strong>Cereal</strong> – oats, wheat, granola, etc.</li>
        <li> <strong>Baking</strong> – flour, baking powder, butter, milk, eggs, etc.</li>
        <li> <strong>Personal Care</strong> – shampoo, conditioner, soap, deodorant, toothpaste, dental floss, shaving cream, razor blades, etc.</li>
        <li> <strong>Health Care</strong> – band-aid, hydrogen peroxide, alcohol, pain reliever, antacids, etc.</li>
        <li> <strong>Paper &amp; Wrap</strong> – toilet paper, paper towels, tissues, aluminum foil, zip bags, etc.</li>
        <li> <strong>Household Supplies</strong> – detergent, softener, bleach, dish soap, air freshener, gloves, sponge, trash bags, batteries, etc.</li>
        <li> <strong>Baby Items</strong> – baby food, diapers, wet wipes, moisturizing lotion, etc.</li>
        
        </ul>
       
    </div>
<h5>source : https://www.ziplist.com/grocery-list-template/categories</h5>       
    <?php
 include("footer.php");
  ?>