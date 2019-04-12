<?php
session_start();
if (isset($_POST["submit"])) {
    include_once 'DBConnect.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    
    $sql = "select * from tbl_registered_users where email = '$email' and password= '$password'";
    $user = $db->query($sql);
    $result = $user->fetchAll(PDO::FETCH_ASSOC);
    
    $id = $result[0]['id'];
    $name = $result[0]['name'];
    $address = $result[0]['address'];
    $area = $result[0]['area'];
    $route = $result[0]['route'];
    $boarding = $result[0]['boarding'];
    $shift = $result[0]['shift'];
    $contact = $result[0]['contact'];
    $email = $result[0]['email'];
    $_SESSION['name'] = $name;
    $_SESSION['address'] = $address;
    $_SESSION['area'] = $area;
    $_SESSION['route'] = $route;
    $_SESSION['boarding'] = $boarding;
    $_SESSION['shift'] = $shift;
    $_SESSION['contact'] = $contact;
    $_SESSION['id'] = $id;
    
    $database->closeConnection();
    header('location: dashboard.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles.css">
 <style>

.bg {
  /* The image used */
  background-image: url("small257.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/*#header {
  background-color: #f1f1f1; /* Grey background */
  /*padding: 20px 10px; /* Some padding */
  /*color: black;
  text-align: center; /* Centered text */
  /*font-size: 50px; /* Big font size */ 
  /*font-weight: bold; 
  position: fixed; /* Fixed position - sit on top of the page */
  /*top: 0; 
  width: 100%; /* Full width */
  /*transition: 0.2s; /* Add a transition effect (when scrolling - and font size is decreased) */
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
  }
</style>
<script>
    function loginvalidation(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        var valid = true;

        if(email == ""){
        	   valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        }

        if(password == ""){
        	   valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        return valid;
    }
    </script>
</head>
<div id="header">HOOK BUS</div>
<body>

<div class="bg">
    <div class="demo-content">
        <form action="" method="POST"
            onsubmit="return loginvalidation();">


            <div class="row">
                <label>Email</label> <span id="email_error"></span>
                <div>
                    <input type="text" name="email" id="email"
                        class="form-control"
                        placeholder="Enter your Email ID">
                </div>
            </div>

            <div class="row">
                <label>Password</label><span id="password_error"></span>
                <div>
                    <input type="Password" name="password" id="password"
                        class="form-control"
                        placeholder="Enter your password">

                </div>
            </div>

            

            <div class="row">
                <div>
                    <button type="submit" name="submit"
                        class="btn login">Login</button>
                </div>
            </div>
            <div class="row">
                <div>
                    <a href="index.php"><button type="button"
                            name="submit" class="btn signup">Signup</button></a>
                </div>
            </div>
      
        </form>
    </div>
</body>
      <div id="footer">
    <p>© 2019 - NOOBS </p>
</div>
</html>