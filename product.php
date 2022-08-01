
<?php
 include("header.php");
  ?>

    <main class="page-header">
        <div class="container py-3">
        
          <div class="row justify-content-center">
            
          <h1 class="text-center">Add Item</h1>

          <form  method="POST" action="addproduct.php" enctype="multipart/form-data">

            
            <div class="form-group row ">
              <label for="prodName" class="col-sm-3 col-form-label">Product Name:</label>
              <div class="col-sm-9">
                <input autofocus type="text" class="form-control" id="prodName" placeholder="Product Name" name="productName" required>
              </div>
            </div>

          <!-- ps. product size = description -->
          <div class="form-group row ">
              <label for="desc" class="col-sm-3 col-form-label">Product Size:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="desc" placeholder="Product Size (Litters/Kilos/Grams)" name="description" required>
              </div>
            </div>  


            <div class="form-group row ">
              <label for="category" class="col-sm-3 col-form-label">Category:</label>
              <div class="col-sm-9">
               
                <select class="form-control input-sm" id="category" name="category" required>
                          <option selected disabled>Pick Categories:</option>
                          <option value="Beverages">Beverages </option>
                          <option value="CannedGoods">CannedGoods</option>
                          <option value="FrozenFoods">FrozenFoods</option>
                          <option value="Meat">Meat </option>
                          <option value="Fruits">Fruits</option>
                          <option value="Vegetables ">Vegetables </option>
                          <option value="Condiments/Spices">Condiments/Spices</option>
                          <option value="Sauces/Oils">Sauces/Oils</option>
                          <option value="Snacks">Snacks</option>
                          <option value="Bread/Crackers">Bread/Crackers</option>
                          <option value="Pasta/Rice/Noodles">Pasta/Rice/Noodles</option>
                          <option value="Cereal">Cereal</option>
                          <option value="Baking">Baking</option>
                          <option value="PersonalCare">PersonalCare</option>
                          <option value="HealthCare">HealthCare</option>
                          <option value="Paper/Wrap">Paper/Wrap</option>
                          <option value="HouseholdSupplies">HouseholdSupplies</option>
                          <option value="BabyItems">BabyItems</option>
                          <option value="Others">Others</option>
                 </select>

              </div>
            </div>

            <div class="form-group row ">
              <label for="BRAND" class="col-sm-3 col-form-label">Brand:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="BRAND" placeholder="Product Brand" name="brand" required>
              </div>
            </div>

            <div class="form-group row ">
              <label for="SRP" class="col-sm-3 col-form-label">Original Price(SRP):</label>
              <div class="col-sm-9">
                <input  step="0.01" type="number" class="form-control" id="SRP" placeholder="Suggested Retail Price (ex. 0.00)" name="srp" required>
              </div>
            </div>

            <div class="form-group row ">
              <label for="Price" class="col-sm-3 col-form-label">Price:</label>
              <div class="col-sm-9">
                <input step="0.01" type="number" class="form-control" id="Price" placeholder="Price (ex. 0.00)" name="price" required>
              </div>
            </div>

            <div class="form-group row ">
              <label for="Image" class="col-sm-3 col-form-label">Image:</label>
              <div class="col-sm-9">
             

			        <input  class="form-control" id="Image" name="my_image" type="file" accept='image/jpeg'  >
                
              </div>
            </div>
           


            <div class="form-group row ">
              <label for="Notes" class="col-sm-3 col-form-label">Notes:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="Notes" placeholder="(ex. Add 6pesos for deposit)" name="notes">
              </div>
            </div>

           
           
             <div class="form-group row">  
            
              
              <button type="submit" name="addbtn" class="btn btn-primary">Add item</button>
              
                
             
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