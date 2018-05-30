<?php

require_once("functions.php");

// Associated array for agent table in database
$agentArray = array("AgtFirstName" => "Emma",
"AgtMiddleInitial" => "E",
"AgtLastName" => "Everest",
"AgtBusPhone" => "(403) 210-1919",
"AgtEmail" => "Emma.Everest@travelexperts.com",
"AgtPosition" => "Junior Agent",
"AgencyId" => 1);

$result = callArray($agentArray);

?>
