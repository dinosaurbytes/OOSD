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
  <?php include 'variables.php';?>
</head>

<body>
  <!-- Header -->
  <?php include("header.php");?>

  <!-- Nav Menu -->
  <?php include("menu.php");?>


  <body>
  <?php

    echo '<table id="linksTable" border="1">';
    for($i = 0; $i < $urlArraySize; $i++){
      echo '<tr>';
      echo "<td>".++$i."</td>";

      // echo '<td>'.$i.'</td>';

      $newArray = array_keys($urlArray);
      $key = $newArray[--$i];
      echo '<td>'.'<a href='.$urlArray[$key].'>'.$key.'</a></td>';

      echo '<td>'.'<a href='.$urlArray[$key].'>'.$urlArray[$key].'</a></td>';

      echo '</tr>';
    }
    echo '</table>';

    ?>
  </body>

  <?php include("footer.php");?>

  </html>
