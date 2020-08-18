<?php  
session_start();

// if submit button is pressed
if(isset($_POST["product_id"])){ 
  
// loading database
    include("db_config.php");

// SQL selecting query
    $query = "SELECT * FROM menu WHERE name= '".$_POST["product_id"]."'";
    
// SQL execution 
    $result = mysqli_query($connection, $query);  
    if(!$result) {
        printf("Error: %s\n", mysqli_error($connection));
        exit();
    }

// getting data from database to array
      while($row = mysqli_fetch_array($result)) {

// printing modal form with results
           echo " 
           <div class=\"modal-header\">  
            <h4 class=\"modal-title\">".$row["name"]."</h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>  
          </div>
          <div class=\"product-card\"> 
           <p class=\"product-card-paragraph\">Naziv : ".$row['name']."</p>
           <p class=\"product-card-paragraph\">Cena: ".$row['price']."</p>
           <p class=\"product-card-paragraph\">Opis: ".$row['description']."</p>
           <img src=images/".$row['picture']." alt=".$row['name']." width=\"250px\"> 
        </div>"; 
      }  
 }  
 ?>