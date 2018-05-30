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
    <h2>Register</h2>
    <h3>Customer Information</h3>
    <form id="myForm" action="http://bounce.php" method="post">
      <table>
        <tr>
          <td>
            Customer Name:
          </td>
          <td>
            <input id="name" class="textbox" type="text" name="name">
            <p id="customerNameHelp" class="hidden"></p>
          </td>
        </tr>
        <tr>
          <td>
            Address:
          </td>
          <td>
            <input id="address" class="textbox" type="text" name="address">
            <p id="addressHelp" class="hidden"></p>
          </td>
        </tr>
        <tr>
          <td>
            City:
          </td>
          <td>
            <input id="city" class="textbox" type="text" name="city">
            <p id="cityHelp" class="hidden"></p>
          </td>
        </tr>
        <tr>
          <td>
            Province:
          </td>
          <td>
            <input id="province" class="textbox" type="text" name="province">
            <p id="provinceHelp" class="hidden"></p>
          </td>
        </tr>
        <tr>
          <td>
            Postal Code:
          </td>
          <td>
            <!-- Regex check for the postal code input -->
            <input id="postalCode" class="textbox" type="text" onblur="postalCodeCheck(this)">
            <p id="postalCodeHelp" class="hidden"></p>
          </td>
        </tr>
        <tr>
          <td>

          </td>
        </tr>
      </table>


      <h3>What type of Travel are you interested in?</h3> Flight: <input type="checkbox" name="Flight"> Hotel: <input type="checkbox" name="Flight"> Cruise: <input type="checkbox" name="Cruise"> All-Inclusive: <input type="checkbox" name="All-Inclusive"><br><br>

      <!-- <h3>Price Range:</h3>
          <$500: <input type="radio" name="Price" checked="checked">
          $500-$1000: <input type="radio" name="Price">
          $1000-$3000: <input type="radio" name="Price">
          $3000-$10000: <input type="radio" name="Price"><br><br>

          <h3>Other Requests: </h3>

          <textarea value="comment" name="textarea" cols="50" rows="5">Comments</textarea><br> -->

      <!-- Submit and Reset Form Buttons -->
      <input type="submit" value="submit" onclick="return validate(this.form)">
      <input type="button" value="reset" onclick="return clearForm(this.form)">
    </form>


  </div>

  <a href="#top">Back to Top</a><br>

  <!-- Loads the eventlistener script for giving text input hits -->
  <script>
    loadEventListener()
  </script>

</body>

<!-- footer -->
<?php include("footer.php");?>

</html>
