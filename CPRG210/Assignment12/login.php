<html>

<head>
  <link rel="stylesheet" href="text/css" href="defalt.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title> Travel Agency </title>
  <script type="text/javascript" src="loadImage.js"></script>
</head>

<body>
  <!-- Header -->
  <?php include("header.php");?>
  <!-- Nav Menu -->
  <?php include("menu.php");?>

  <!-- Login Table -->
  <form id="loginForm" action="" method="post">
    <div>
      <label>Username: </label>
      <input type="text" class="loginBox" name="agentUserame" placeholder="Username">
    </div>
    <div>
      <label>Password: </label>
      <input type="text" class="loginBox" name="agentPassword" placeholder="Password">
    </div>
    <input type="submit" name="submit" value="submit">
  </form>

</body>



<?php
if(isset($_POST['submit']))
{
  $loginArray = array();
  foreach($_POST as $key=>$value){
    if($key != "submit"){
      $loginArray[$key] = $value;
    }
    else{}
  }
}

print_r($loginArray);
echo "<br><br>";


$agentArray = array("AgtFirstName" => "Emma",
  "AgtMiddleInitial" => "E",
  "AgtLastName" => "Everest",
  "AgtBusPhone" => "(403) 210-1919",
  "AgtEmail" => "Emma.Everest@travelexperts.com",
  "AgtPosition" => "Junior Agent",
  "AgencyId" => 1,
   "agentUsername" => "username123",
   "agentPassword" => "password123");

  print_r($agentArray);


  if(isset($_POST['submit']))
  {
    if($loginArray["agentUserame"] == $agentArray["agentUsername"] && $loginArray["agentPassword"] == $agentArray["agentPassword"]){
      echo '<script type="text/javascript">window.open("index.php")</script>';
    }
    else{
      echo "<script type='text/javascript'>alert('Invalid Username or Password');</script>";
    }
  }
  else{
    echo "submit not valid";
  }

  // if statement to see if username and password match


?>

<!-- Footer -->
<?php include("footer.php");?>


</html>
