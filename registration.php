<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}


.container {
  padding: 16px;
  background-color: white;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


a {
  color: dodgerblue;
}


.signin {
  background-color: ;
  background-image: url("https://wallpaperaccess.com/full/731628.jpg");
  text-align: center;
}


</style>
</head>
<body>


  <div class="container">
  
   

    <h1><em><b>WELCOME TO INCREDIBLE INDIA</b></em></h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <div class="col-lg-8-m-auto d-block"></div>
    <form action="main.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
      <label for="name"><b> FIRST NAME</b></label>
      <input type="text" placeholder="Enter First Name" name="nam" id="nam" required>
      </div>
      <div class="form-group">
      <label for="name"><b>LAST NAME</b></label>
      <input type="text" placeholder="Enter Last Name" name="nam2" id="nam2" required>
      </div>
      <div class="form-group">
      <label for="Date"><b>DATE OF BIRTH</b></label><br>
      <br><input type="date" placeholder="Enter Your Birth Date" name="ag" id="ag" ><br><br>
      </div>
      <div class="form-group">
    <label for="email"><b>EMAIL</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
      </div>
    <div class="form-group">
    <label for="psw"><b>PASSWORD</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    </div>
    <div class="form-group">
    <label for="address" style="text-align:centre;"><b> ADDRESS</b></label>
    <textarea type="text" placeholder="Enter Address" name="add" id="add" >
      </textarea>
    </div>
    <br><br><div class="form-group">
    <label for="img" style="text-align:centre;"><b> IMAGE FILE</b></label>
    <input type="file" name="img" id="img" >
    </div>
    <hr>

    <button type="submit" class="registerbtn">SUBMIT</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="http://localhost/phpintern/loginproject.html">Log in</a>.</p>

  </div>

</form>
</body>
</html>
