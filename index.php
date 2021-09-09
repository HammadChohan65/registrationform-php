<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get-formVlaue-php</title>
    <style>
        .container  input{height:2rem;border-radius:0px 20px 0px 20px;}
        #formdiv div label{margin:0.5rem 0rem 0.5rem 0rem;color:rgb(0,140,256);}
    </style>
 

</head>
<body id="indexbody">
    <?php include('navbar.php') ?>
    <div class="container-fluid bg-primary w-75" style="border-radius:0% 25% 0% 25%;padding:2rem 3rem;margin-top:1rem;">
    <div class="w-25" style="display:inline-block;color:#EEEEEE;font-family:segoe print;font-weight:bold;margin-left:3rem;">
    <span style="font-size:5vw;;">Welcome in the Tech World!</span></div>
    <div class="container bg-light text-dark w-50" style="font-family:segoe print;padding:2rem 2rem 2rem 3rem;margin-left:7rem;border-radius:0% 10% 0% 10%;display:inline-block;" id="formdiv">
    <form action="details.php" class="needs-validated" method="POST">
  <div class="form-group">
    <label for="uname">UserName:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uName" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="uname">UserEmail:</label>
    <input type="email" class="form-control" id="uname" placeholder="Enter userEmail" name="uEmail" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="uPassword" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="cuPassword" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I have filled all fields carefully.
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  <button type="submit" class="btn btn-outline-primary" name="subbtn" >Register</button>
</form>
</div>
</div>
<?php
        include 'footer.php';
    ?>
</body>
</html>