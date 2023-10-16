<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
    </div>
<div class="col-lg-8">
			<table class="table">
  <thead  class="text-center">
   <tr>
      <th scope="col">sr.no</th>
      <th scope="col">name</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
 <tbody class="text-center">
 <?php
  $total=0;
  if(isset($_SESSION['cart']))
  {
  foreach($_SESSION['cart'] as $key => $value)
  {
	//$total=$total+$value['price'];

	  echo"
	  <tr>
      <th>1</th>
      <td>$value[name]</td>
	  <td>
	  <form action='insertcart.php' method='post'>
      <button name='remove' class='btn btn-outline-danger'>Remove</button>
	  <input type='hidden' name='name' value='$value[name]'>
	  </from>
      </td>
    </tr> ";
  }
  }
  ?>
    </tbody>
  </table>
 </div>
	
	<div class="col-lg-4">
	<div class="border bg-light rounded p-4">
	<h1>Total:</h1>
	<h5 class="text-right"><?php echo $total;?></h5>
	<button class="btn btn-primary btn-block">Make Purchase</button>
	</div>
	</div>
  </div>
</body>
</html>
