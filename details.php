<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <style>
      #indexbody .container-fluid,#indexbody .navbar{display:none;}
    </style>
</head>
<body>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Congratulations !</strong> You have SignUp successfully;
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
	
  echo "<div style='width:60%;margin:auto;display:grid;grid-template-columns:1fr;grid-row-gap:0.5rem;border:1px dotted black;background-color:rgb(0,150,150);padding:3rem;color:white;border-radius:0px 25% 0px 25%;'>";
  echo " <h1> WELCOME ! ".$_REQUEST['uName']."</h1>";
  echo "<h6> Thank you for register at Techie, Your following details have been received </h6> ";
  echo "Name : ".$_REQUEST['uName']."<br>";
  echo "Email : ".$_REQUEST['uEmail']."<br>";
  echo "Password : ".$_REQUEST['uPassword']."<br>";
  echo "<button type='button' class='btn btn-outline-light'>Continue</button> <button type='button' class='btn btn-outline-danger'>Cancel</button> </div>";
  require 'index.php';
?>

   
</body>
</html>