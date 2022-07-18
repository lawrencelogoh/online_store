<?php include 'includes/header.php'  ?>
  <h4>Welcome <?php echo "username" ?></h4>
  <ul>
    
    <?php 
     $items=["iPhone XS", "Pixel 4a", "Galaxy S0e"];
     foreach($items as $item){
         echo "<li>$item</li>"; 

     }

     ?>
  </ul
<?php include 'includes/footer.php'  ?>
