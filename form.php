<?php include"connection.php"; ?>

<!DOCTYPE html>
<html>

<head>
  <title>HTML Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="form.css"/>

</head>

<body>
  <div class="form-container" align="center">
    <h2>Registration form</h2>
    <form action="#" method="post">
      <div class="input">
        <i class="fa fa-user"></i>
        <input type="text" name="fname" placeholder="First Name" class="name" required />

        <span>
          <i class="fa fa-user"></i>
          <input type="text" name="lname" placeholder="Last Name" class="name" required />
        </span>
      </div>

      <div class="input">
        <i class="fa fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" class="text-name" required />
      </div>

      <div class="input">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="Password" class="text-name" required />
      </div>
      <div class="input">
        <i class="fa fa-lock"></i>
        <input type="password" name="confirm-password" placeholder="Confirm Password" class="text-name" required />
      </div>

      <div class="input">
        <input type="radio" name="gender" class="radio-button" value="M" required /><label style="margin-right: 50px">Male
        </label>
        <input type="radio" name="gender" class="radio-button" value="F" required /><label
          style="margin-right: 50px">Female</label>
        <input type="radio" name="gender" class="radio-button" value="other" required /><label
          style="margin-right: 50px">Other</label>
      </div>
      <div class="input">
        <select class="country" name="country">
          <option value="not Selected" >Select a Contry</option>
          <option value="India" >India</option>
          <option value="USA" >USA</option>
          <option value="Russia" >Russia</option>
          <option value="Israel">Israel</option>
          <option value="UAE" >UAE</option>
        </select>
      </div>

      <div class="input">
        <input type="checkbox" class="check-button" required />
        <label class="check" for="check-button">I accept the terms and Conditions</label>
      </div>

      <div class="input">
        <input type="submit" value="Register" class="button" name="register"/>
      </div>
    </form>
  </div>
</body>

</html>

<?php
if($_POST['register']){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $pwd=$_POST['password'];
  $cnfpwd=$_POST['confirm-password'];
  $gender=$_POST['gender'];
  $country=$_POST['country'];

  $query = "INSERT INTO form VALUES('$fname', '$lname','$email', '$pwd', '$cnfpwd','$gender','$country')";
  $data = mysqli_query($conn,$query);

  if($data){
    echo"Data inserted";
  }
  else{
    echo"Failed!";
  }
}

?>