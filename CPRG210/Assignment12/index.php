<!--
SAIT OOSD
Brian Liang
792783
-->

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


  <!-- Time Welcome Banner -->

  <?php
    echo '<div class="timeBanner">';
    date_default_timezone_set("America/Denver");
    $currentHour = date("H");
    $currentTime = date('h:i:s a', time());



     /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
     if ($currentHour >= "5" && $currentHour < "12") {
         echo "Good Morning, the current time is $currentTime";
     } else
     /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
     if ($currentHour >= "12" && $currentHour < "6") {
         echo "Good Afternoon, the current time is $currentTime";
     } else
     /* Finally, show good night if the time is greater than or equal to 1900 hours */
     if ($currentHour >= "6" or $currentHour < "5") {
         echo "Good Evening TEST, the current time is $currentTime";
     }
     echo '</div>';
// $currentTime = date('h:i:s a', time());
    ?>


  <!-- Interactive Image table -->
  <section class="banners">
    <div class="tableWrapper">
      <table id="imageTable">
        <tr class="imageRow">
          <td id="travelPicture" class="imageItem"><input type="image" src="" id="travelPic" height="200px" onclick=openUrl();></td>
          <td id="imageText" class="imageItem"><a id="urlAnchor" onclick="openUrl()" ></a></td>
        </tr>
      </table>
      <input type='button' name='button1' value='View next Vacation' onClick="loadChange();">
      <script>
        loadImageTable();
      </script>
    </div>
  </section>

  <!-- Contact and Register Links -->
  <section class="content">
    <article>
      <figure>
        <a href="contact.php"><img height="200px" src="images/contactLogo.jpg" alt="Link to Contact"></a>
      </figure>
      <hgroup>
        <h2>Contact Us</h2>
        <h3>Find out more about our Packages</h3>
      </hgroup>
      <p>Lots of amazing travel deals</p>
    </article>
    <article>
      <figure>
        <a href="register.php"><img height="200px" src="images/registerLogo.png" alt="Link to Register"></a>
      </figure>
      <hgroup>
        <h2>Register</h2>
        <h3>We have great prices!</h3>
      </hgroup>
      <p>Book today with our many great prices</p>
    </article>
  </section>

  <!-- Aside -->
  <aside>
    <section class="travelText">
      <h2>Your Next Vacation</h2>
      <h3>Is just one click away</h3>
      <p>Make your vacation memorable with a great hotel stays. We make finding that perfect hotel easy and fun. Shop our featured destinations for the top travel deals. Planning for your next vacation or weekend getaway whether you're on a budget or ready
        to splurge on that once-in-a-lifetime luxury experience, we have all the tools you need to create that perfect trip.</p>
    </section>
  </aside>

</body>

<!-- Footer -->
<?php include("footer.php");?>


</html>
