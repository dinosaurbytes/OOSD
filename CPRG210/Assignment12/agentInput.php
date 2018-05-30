<!--
SAIT OOSD
Brian Liang 792783
file: register
 -->


<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/javascript" href="form.js">
  <link rel="stylesheet" type="text/javascript" href="addEventListener.js">
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="addEventListener.js"></script>
  <title> Register </title>

</head>

<body>
  <?php echo "test";?>
  <!-- header -->
  <?php include("header.php");?>
  <!-- nav menu -->
  <?php include("menu.php");?>


  <!-- Customer Information Form -->
  <div style="padding-left: 100px;">
    <h2>Agent Information</h2>

    <form id="agentForm" action="" method="post">
      <label>Name</label>
      <div>
        <input type="text" class="agentInputBox" name="AgtFirstName" placeholder="First Name">
      </div>
      <div>
        <input type="text" class="agentInputBox" name="AgtMiddleInitial" placeholder="Middle Initial">
      </div>
      <div>
        <input type="text" class="agentInputBox" name="AgtLastName" placeholder="Last Name">
      </div>
      <div>
        <input type="text" class="agentInputBox" name="AgtBusPhone" placeholder="Phone Number (000) 000-0000">
      </div>
      <div>
        <input type="text" class="agentInputBox" name="AgtEmail" placeholder="Email First.Last@travelexperts.com">
      </div>
      <div>
        <input type="text" class="agentInputBox" name="AgtPosition" placeholder="Position">
      </div>
      <div>
        <input type="text" class="agentInputBox" name="AgencyId" placeholder="Agency Id">
      </div>
      <input type="submit" name="submit" value="submit">
    </form>


<!-- php script which grabs the information from the form and converts it into an array -->
<?php
require_once("functions.php");

if(isset($_POST['submit']))
{
  $agtArray = array();
  foreach($_POST as $key=>$value){
  if($key != "submit"){
  $agtArray[$key] = $value;
  }
  else{}
  }
}
else{
  echo "Textbox Empty";
}

$result = callArray($agtArray);
?>



  </div>

  <a href="#top">Back to Top</a><br>

</body>

<!-- footer -->
<?php include("footer.php");?>

</html>
