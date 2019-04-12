<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashborad</title>
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
 /* padding: 20px 10px; /* Some padding */
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
</head>
<div id="header">HOOK BUS</div>
<body>
<div class="bg">

<div class="demo-content">
    <div>
        Welcome <?php echo $_SESSION["name"]; ?>! 
    </div>
<br>

 <div class="row">
               Bus No.:-
                    <input type="text" name="bus_no"
                        id="bus_no.">
            </div>            
<div class="row">
<button type="button" name="start"
                        class="btn login" onclick="location.href='geolocation/index.html'">Start</button>
</div>


<div class="row">
    Click to <a href="logout.php">Logout</a>.
</div>
<div class="footer">
  <p>© 2019 - NOOBS</p>
</div>
</div>
</div>
</body>

</html>