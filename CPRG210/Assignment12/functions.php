<?php

// Associated array for agent table in database
// $agentArray = array("AgtFirstName" => "Bob",
// "AgtMiddleInitial" => "C",
// "AgtLastName" => "Bobby",
// "AgtBusPhone" => "(403) 210-1010",
// "AgtEmail" => "Josh.Bottle@travelexperts.com",
// "AgtPosition" => "Junior Agent",
// "AgencyId" => 1);

function callArray($agentArray){

// Returns the array values as a string
$returnString = "'".implode("','", $agentArray)."'";


// Returns the array keys as a string
$keyArray = array_keys($agentArray);
$returnKeys = implode(",", $keyArray);


// Inserting array values into SQL database
$link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());

$sql = "insert into agents ($returnKeys) values ($returnString)";
$result = mysqli_query($link, $sql) or die("SQL Error");
print("result=$result<br />");
if ($result)
{
  print("Agent inserted");
}
else
{
  print("Agent not inserted");
}
mysqli_close($link);
}
?>
