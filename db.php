<?php

require_once __DIR__ . "/vendor/autoload.php";

use MongoDB\Client;

$client = new \MongoDB\Client("mongodb://127.0.0.1/");
$db = $client->computer->computers;

function findProcessor($processor)
{
    global $db;
    $statement = $db->find(["processor" => $processor]);
    echo "<div id='content'>";
    echo "<table>";
    echo " <tr>
 <th> Net Name  </th>
 <th> Motherboard </th>
 <th> Vendor </th>
 <th> Processor </th>
</tr> ";
    foreach ($statement->toArray() as $data) {
        echo " <tr>
 <th> {$data['netname']}  </th>
 <th> {$data['motherboard']} </th>
 <th> {$data['vendor']} </th>
 <th> {$data["processor"]} </th>
</tr> ";
    }
    echo "</table></div>";
}

function findSoftware($software)
{
    global $db;
    $statement = $db->find(["software" => $software]);
    echo "<div id='content'>";
    echo "<table>";
    echo " <tr>
 <th> Net Name  </th>
 <th> Motherboard </th>
 <th> Vendor </th>
 <th> Software </th>
</tr> ";
    foreach ($statement->toArray() as $data) {
        echo " <tr>
 <th> {$data['netname']}  </th>
 <th> {$data['motherboard']} </th>
 <th> {$data['vendor']} </th>
 <th> {$data["software"]} </th>
</tr> ";
    }
    echo "</table></div>";
}

function findGuarantee()
{
    global $db;
    $now = new MongoDB\BSON\UTCDateTime(date("U")."000");
    $statement = $db->find(["guarantee" => ['$lte' => $now]] );
    echo "<div id='content'>";
    echo "<table>";
    echo " <tr>
 <th> Net Name  </th>
 <th> Motherboard </th>
 <th> Vendor </th>
 <th> Guarantee </th>
</tr> ";
    foreach ($statement->toArray() as $data) {
        $date = date("Y-m-d", substr(strval($data["guarantee"]), 0, -3));
        echo " <tr>
 <th> {$data['netname']}  </th>
 <th> {$data['motherboard']} </th>
 <th> {$data['vendor']} </th>
 <th> $date </th>
</tr> ";
    }
    echo "</table></div>";
}