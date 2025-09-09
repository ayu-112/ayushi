<!-- 3. Employee Salary with Bonus
Take base salary and bonus % → calculate final salary. -->



<?php
$conn = mysqli_connect('localhost', 'root','','registration') or die('connection fail');
if(isset($_POST['calculate'])){
$salary = (float)$_POST['salary'];
$bonus = (float)$_POST['bonus'];

$final_salary = ($salary * $bonus) / 100;
$final = $final_salary +  $salary;


echo $final;


}
?>
<form method="POST" action="#">
<div class="form-group">
    <label for="exampleInputEmail1">base salary</label>
    <input type="number" name="salary" class="form-control" placeholder="Number1">
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">  bonus % </label>
    <input type="text" name="bonus" class="form-control" placeholder="Number2">
  </div> 

  <button type="submit" name="calculate" class="btn btn-primary">calculate</button>
</form>