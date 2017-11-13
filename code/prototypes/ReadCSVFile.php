<!DOCTYPE html>
<html>
    <head>
        <title>UnlandMark Data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="icon" href="images/myicon.png">

    </head>
</html>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = "../Data/Unlandmarks Master Spreadsheet.csv";
//C:\wamp\www\unlandmark\Unlandmarks Master Spreadsheet.csv
parseFile($filename);

function parseFile($filename) {

    $fp = fopen($filename, "r") or exit("Unable to open file!");

    while (!feof($fp)) {
        $pieces = fgetcsv($fp);
        display($pieces);
    }
    fclose($fp);
}

function display($pieces) {
    $count = count($pieces);
    print "Count " . $count . "<BR>";
    print_r($pieces);
    print "<BR>";

}
function buildInsert($pieces)
{
    
}
