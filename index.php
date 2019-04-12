<?php
if (isset($_POST["submit"])) {
    include_once 'DBConnect.php';
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $area = $_POST['area'];
    $route = $_POST['route'];
    $boarding = $_POST['boarding'];
    $shift = $_POST['shift'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $database = new dbConnect();
    $db = $database->openConnection();
    
    $sql1 = "select name, email from tbl_registered_users where email='$email'";   
    $user = $db->query($sql1);
    $result = $user->fetchAll();
    $_SESSION['emailname'] = $result[0]['email'];
    
    if (empty($result)) {
        $sql = "insert into tbl_registered_users (name, address, area, route, boarding, shift, contact, email, password) values('$name','$address','$area','$route','$boarding','$shift','$contact','$email','$password')";
        
        $db->exec($sql);
        
        $database->closeConnection();
        $response = array(
            "type" => "success",
            "message" => "You have registered successfully.<br/><a href='login.php'>Now Login</a>."
        );
    } else {
        $response = array(
            "type" => "error",
            "message" => "Email already in use."
        );
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
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
    function signupvalidation(){
        var name = document.getElementById('name').value;
        var address = document.getElementById('address').value;
        var area = document.getElementById('area').value;
        var route = document.getElementById('route').value;
        var boarding = document.getElementById('boarding').value;
        var shift = document.getElementById('shift').value;
        var contact = document.getElementById('contact').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var confirm_pasword = document.getElementById('confirm_pasword').value;
        var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    	
        var valid=true;

        if(name == ""){
            valid = false;
            document.getElementById('name_error').innerHTML = "required.";
        }

        if(address == ""){
            valid = false;
            document.getElementById('address_error').innerHTML = "required.";
        }

        if(area == ""){
            valid = false;
            document.getElementById('area_error').innerHTML = "required.";
        }

        if(route == ""){
            valid = false;
            document.getElementById('route_error').innerHTML = "required.";
        }

        if(boarding == ""){
            valid = false;
            document.getElementById('boarding_error').innerHTML = "required.";
        }

        if(shift == ""){
            valid = false;
            document.getElementById('shift_error').innerHTML = "required.";
        }

        if(contact == ""){
            valid = false;
            document.getElementById('contact_error').innerHTML = "required.";
        }    


        if(email == ""){
            valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        } else {
            if(!emailRegex.test(email)){
                valid = false;
                document.getElementById('email_error').innerHTML = "invalid.";
            }
        }

        if(password == "" ){
            valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        if(confirm_pasword == "" ){
            valid = false;
            document.getElementById('confirm_password_error').innerHTML = "required.";
        }

        if(password != confirm_pasword){
            valid = false;
            document.getElementById('confirm_password_error').innerHTML = "Both passwords must be same.";
        }

        return valid;
    }
    </script>
</head>
<div id="header">HOOK BUS</div>
<body>
    
<div class="bg">
    <div class="demo-content">
        <?php
        if (! empty($response)) {
            ?>
        <div id="response" class="<?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
        <?php
        }
        ?>

        <form action="" method="POST"
            onsubmit="return signupvalidation()">
            <div class="row">
                <label>Name</label><span id="name_error"></span>
                <div>
                    <input type="text" class="form-control" name="name"
                        id="name" placeholder="Enter your name">

                </div>
            </div>

            <div class="row">
                <label>Address</label><span id="address_error"></span>
                <div>
                    <input type="text" class="form-control" name="address"
                        id="address" placeholder="Enter your full address">
                </div>
            </div>

            <div class="row">
                <label>Area</label><span id="area_error"></span>
                <div>
                    <input type="text" class="form-control" name="area"
                        id="area" placeholder="Enter your area">
                </div>
            </div>

            <div class="row">
                <label>Route</label><span id="route_error"></span>
                <div>
                    <input type="text" class="form-control" name="route"
                         id="route" placeholder="Enter your Route">
                </div>
            </div>

            <div class="row">
                <label>Boarding Point</label><span id="boarding_error"></span>
                <div>
                    <input type="text" class="form-control" name="boarding"
                         id="boarding" placeholder="Enter your Boarding Point">
                </div>
            </div>

            <div class="row">
                <label>Shift</label><span id="shift_error"></span>
                <div>
                    <input type="text" class="form-control" name="shift"
                         id="shift" placeholder="Enter your Shift">
                </div>
            </div>

            <div class="row">
                <label>Contact Number</label><span id="contact_error"></span>
                <div>
                    <input type="text" class="form-control" name="contact"
                         id="contact" placeholder="Enter your Mobile Number">
                </div>
            </div>

            <div class="row">
                <label>Email</label><span id="email_error"></span>
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
                <label>Confirm Password</label><span
                    id="confirm_password_error"></span>
                <div>
                    <input type="password" name="confirm_pasword"
                        id="confirm_pasword" class="form-control"
                        placeholder="Re-enter your password">

                </div>
            </div>


            <div class="row">
                <div align="center">
                    <button type="submit" name="submit"
                        class="btn signup">Sign Up</button>
                </div>
            </div>

            <div class="row">
                <div>
                    <a href="login.php"><button type="button" name="submit"
                        class="btn login">Login</button></a>
                </div>
            </div>
    
    </div>
    </form>
    </div>
</body>
<div id="footer">
    <p>© 2019 - NOOBS </p>
</div>
</html>