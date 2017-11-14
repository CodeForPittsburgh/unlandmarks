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
/*
 * Array ( 
 * [0] => name 
 * [1] => one_line 
 * [2] => nickname 
 * [3] => type 
 * [4] => current_address 
 * [5] => vizrec 
 * [6] => current_use 
 * [7] => current_photo_link 
 * [8] => historic_address 
 * [9] => historic_photo_url 
 * [10] => start_date 
 * [11] => start_date_confidence 
 * [12] => end_date 
 * [13] => end_date_confidence 
 * [14] => history_summary 
 * [15] => research_url 
 * [16] => research_notes 
 * [17] => research_sources 
 * [18] => personal_history_text 
 * [19] => personal_history_subject 
 * [20] => personal_history_recorder 
 * [21] => followup_email 
 * [22] => lat 
 * [23] => long 
 * [24] => verification_indicator 
 * [25] => geopolygon 
 * [26] => parcel_number 
 * [27] => current_owner 
 * [28] => last_sold_date 
 * [29] => unique_id 
 * [30] => timestamp ) 
 * 
 * Array ( 
 * [0] => Chiodo's Tavern 
 * [1] => 
 * [2] => Chiodo's 
 * [3] => Business 
 * [4] => 107 W. 8th Ave., Homestead, PA 15120 
 * [5] => 0 
 * [6] => yeah; it's now a freakin' Walgreen's parking lot 
 * [7] => https://www.google.com/maps/place/107+W+8th+Ave,+Homestead,+PA+15120 
 * [8] => I don't believe so 
 * [9] => 
 * [10] => ca. 1890; Chiodo's from 1947 - March 2005 (source: https://newsinteractive.post-gazette.com/thedigs/2015/04/29/chiodos-tavern-in-homestead-home-to-everybody/) 
 * [11] => 
 * [12] => March 2005 
 * [13] => 
 * [14] => not sure there's anything authoritative, but google "chiodos homestead" for several sources 
 * [15] => 
 * [16] => google "chiodos homestead" 
 * [17] => 
 * [18] => just fond memories of my many times there in the '90s and early '00s 
 * [19] => 
 * [20] => 
 * [21] => 
 * [22] => 40.405599 
 * [23] => -79.913223 
 * [24] => 
 * [25] => 
 * [26] => 
 * [27] => 
 * [28] => 
 * [29] => 42,936.42 
 * [30] => 07/20/2017 10:04:48 ) 
 */