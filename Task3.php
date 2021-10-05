<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $name     =  $_POST['name']; 
  $password =  $_POST['password'];
  $email    =  $_POST['email'];
  $address  =  $_POST['address'];
  $gender   =  $_POST['gender'] ?? "Unkown";
  $url      =  $_POST['url'];


/* Validation */

/////////////////////////////////// Check if empty
if(empty($name)){
  echo 'Name is required';
}

if(empty($password)){
  echo 'Password is required';
}

if(empty($email)){
  echo 'Email is required';
}

if(empty($address)){
  echo 'Address is required';
}

if($gender == 'Unkown'){
  echo 'Gender is required';
}

if(empty($url)){
  echo 'Linkedin URL is required';
}



/////////////////////////////////// Check if name contains anything other than characters
if (preg_match('~[0-9]+~', $name)) {
  echo 'Name must contain letters only!'.'<br>';
}




/////////////////////////////////// Validate email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo 'NOT A VALID EMAIL!'.'<br>';
}




/////////////////////////////////// Make sure password is more than 5 entries (6 or more)
if(strlen($password) < 5){
  echo 'Password is too short!, minimum length is 6 entries.'.'<br>';
}



/////////////////////////////////// Make sure address is more than 9 entries (10 or more)
if(strlen($address) < 9){
  echo 'Address is too short!, minimum length is 10 entries.'.'<br>';
}



/////////////////////////////////// Validate URL
if(!filter_var($url, FILTER_VALIDATE_URL)){
  echo 'NOT A VALID Linkedin URL!'.'<br>';
}
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

  <div class="container">

    <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post"  enctype ="multipart/form-data">

      <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="text" name = "name" class="form-control mb-3" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
      </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>


  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name = 'address' id="inputAddress" placeholder="1234 Main St">
  </div>



<div class="form-group">
  <label>Gender</label>
  <label class="radio-inline"> <input type="radio"  name="gender"> Female</label>
  <label class="radio-inline"><input type="radio" name="gender"> Male</label>
</div>


  <div class="form-group">
        <label for="exampleInputURL1">Linkedin URL</label>
        <input type="text" name = "url" class="form-control mb-3" id="exampleInputURL1" aria-describedby="urlHelp" placeholder="Enter url">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>



</form>



    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>