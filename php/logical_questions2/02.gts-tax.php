<!-- 
2. GST Tax Calculation
Input product price and GST % → calculate total bill. -->

<!-- 
GST Amount=
100+GST %
Inclusive Price×GST % -->
	​



<?php
$conn = mysqli_connect('localhost', 'root','','registration') or die('connection fail');
if(isset($_POST['calculate'])){
$product = (float)$_POST['product'];
$gst = (float)$_POST['gst'];



$gstAmount = ($product * $gst) / 100;
$finalPrice = $product + $gstAmount;

echo $finalPrice;

echo "<h3>Calculation Result:</h3>";
        echo "Base Price: ₹" . number_format($product, 2) . "<br>";
        echo "GST ($gstRate%): ₹" . number_format($gstAmount, 2) . "<br>";
        echo "<strong>Total Price (with GST): ₹" . number_format($finalPrice, 2) . "</strong><br>";

}
?>
<form method="POST" action="#">
<div class="form-group">
    <label for="exampleInputEmail1">product price</label>
    <input type="number" name="product" class="form-control" placeholder="Number1">
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1"> GST </label>
    <input type="text" name="gst" class="form-control" placeholder="Number2">
  </div> 

  <button type="submit" name="calculate" class="btn btn-primary">calculate</button>
</form>