<!DOCTYPE html>
<html>
<head>
</head>

<body>
  <h4>Cart</h4>
  <ul>
    
    <?php 
     $items=["iPhone XS", "Pixel 4a", "Galaxy S0e"];
     foreach($items as $item){
         echo "<li>$item</li>";
         echo "<input type=text value=$item hidden>";

     }

     ?>
  </ul>

      <h4>Total Price: GHS 210.00</h4>
    
</body>

</html>
