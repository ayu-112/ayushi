<?php
$conn = mysqli_connect('localhost', 'root','','registration') or die('connection fail');
if(isset($_POST['calculate'])){
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$sum = $n1 + $n2;
echo $sum ;
}
?>
<form method="POST" action="#">
<div class="form-group">
    <label for="exampleInputEmail1">Number1</label>
    <input type="number" name="n1" class="form-control" placeholder="Number1">
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Number2</label>
    <input type="number" name="n2" class="form-control" placeholder="Number2">
  </div> 

  <button type="submit" name="calculate" class="btn btn-primary">calculate</button>
</form>