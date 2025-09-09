
<!-- 1: Discount Price Calculator
Take product price and discount percentage → calculate final price. -->




<?php
$conn = mysqli_connect('localhost', 'root','','registration') or die('connection fail');
if(isset($_POST['calculate'])){
$product = $_POST['product'];
$discount = $_POST['discount'];
$result = $product *(1 - $discount/ 100);
echo "$result" ;

}
?>
<form method="POST" action="#">
<div class="form-group">
    <label for="exampleInputEmail1">product price</label>
    <input type="number" name="product" class="form-control" placeholder="Number1">
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">discount percentage</label>
    <input type="number" name="discount" class="form-control" placeholder="Number2">
  </div> 

  <button type="submit" name="calculate" class="btn btn-primary">calculate</button>
</form>