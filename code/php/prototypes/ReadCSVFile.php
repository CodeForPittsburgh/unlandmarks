<!DOCTYPE html>
<html>
    <head>
        <title>UnlandMark Data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="icon" href="images/favicon.ico">

    </head>
</html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = "../../Data/Unlandmarks Master Spreadsheet.csv";
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
    //$count = count($pieces);
    //print "Count " . $count . "<BR>";
    // print_r($pieces);
    //print "<BR>";
    buildPlacesType($pieces);
    buildAddressInsert($pieces);
    buildPlacesInsert($pieces);
}

function buildPlacesType($pieces) {
    $type = $pieces[3];
    //$sql = "insert into \"PoliceBlotter2\".description(section,description) (select '" . $section . "' as section,'" . $description . "' as description where not exists (select section from \"PoliceBlotter2\".description where section='" . $section . "'));\n";
    $sql = "INSERT INTO unlandmark.landmark_type(
           landmark_type_description)
    VALUES ('$type');";
    print $sql . "<BR>";
}

function buildAddressInsert($pieces) {
    //print "Current Address " . $pieces[4] . "<BR>";
    //print "Historical Address " . $pieces[8] . "<BR>";
    $user = "USER";
    $current_address = pg_escape_string($pieces[4]);
    $lat = $pieces[22];
    $lng = $pieces[23];
    if (strlen($lat) === 0 || strlen($lng) === 0) {
        $xml = BuildAddress($current_address);
        $lat = $xml->result->geometry->location->lat ;
        $lng = $xml->result->geometry->location->lng;
    }




    $sql = "INSERT INTO unlandmark.address(
            current_address, lat,lng,geocode_source, location_latlng)
    VALUES ('" . $current_address . "','$lat','$lng', '$user',(ST_GeomFromText('POINT(" . $lat . " " . $lng . ")',4326)) );";
    print $sql . "<BR>";
    //buildPlacesInsert($pieces);
//update your_table set geom=st_SetSrid(st_MakePoint(longitude, latitude), 4326);
}

function buildPlacesInsert($pieces) {
    $address = pg_escape_string($pieces[4]);
    $address_id = "(select address_id from unlandmark.address where current_address = '$address')";
    $landmark_status_id = 2;
    $current_photo_link_id = 3;
    $historic_photo_url_id = 4;
    $places_type_id = "(select landmark_type_id from unlandmark.landmark_type where landmark_type_description = '$pieces[3]')";

    $name = pg_escape_string($pieces[0]);
    $one_line = pg_escape_string($pieces[1]);
    $nickname = pg_escape_string($pieces[2]);
    $current_use = pg_escape_string($pieces[6]);
    $historic_address = pg_escape_string($pieces[8]);
    $start_date = '1900/01/01';

    $start_date_confidence = $pieces[11];
    if (strlen($start_date_confidence) === 0) {
        $start_date_confidence = 0;
    }

    $end_date = '1900/12/31';

    $end_date_confidence = $pieces[13];
    if (strlen($end_date_confidence) === 0) {
        $end_date_confidence = 0;
    }
    $history_summary = pg_escape_string($pieces[14]);
    if (strpos($history_summary, 'http') !== FALSE) {
        $history_summary = "CHECK VALUES";
    }
    //$verification_indicator = $pieces[24];

    $sql = "INSERT INTO unlandmark.places(
            name, one_line, nickname, places_type_id, address_id, 
            landmark_status_id, current_use, current_photo_link_id, historic_address, 
            historic_photo_url_id, start_date, start_date_confidence, end_date, 
            end_date_confidence, history_summary)
    VALUES ('$name', '$one_line', '$nickname', $places_type_id, $address_id, $landmark_status_id, '$current_use', $current_photo_link_id, '$historic_address', $historic_photo_url_id, '$start_date', '$start_date_confidence', '$end_date', '$end_date_confidence', '$history_summary');";
    print $sql . "<BR>";
}

function getCurl($address) {
    $filename = "addresstest.xml";

    $ch = curl_init($address);
    $fp = fopen($filename, "w");

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    ////curl_setopt($ch, CURLOPT_TRANSFERTEXT,1);
    ////curl_setopt($ch, CURLOPT_HEADER, 0);
    ////curl_setopt($ch, CURLPROTO_FTPS,1);

    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
}

function processXML() {
    $filename = "addresstest.xml";
    //$fp = fopen($filename, "r");
    /*
      <GeocodeResponse>
      <status>OK</status>
      <result>
      <geometry>
      <location>
      <lat>40.4316580</lat>
      <lng>-80.0412980</lng>
      </location>
      </geometry>
      </result>
      </GeocodeResponse>
     */
    $xml = simplexml_load_file($filename) or die("Error: Cannot open object");
    //print_r($xml);
    //print "<BR>";
    //print "LAT " . $xml->result->geometry->location->lat . "<BR>";
    //print "LNG " . $xml->result->geometry->location->lng . "<BR>";
    mapit($xml);
    return $xml;
    //fclose($fp);
}

function mapit($xml) {
    //https://www.google.com/maps/place/4429+Kennywood+Blvd,+West+Mifflin,+PA+15122
    print "LAT " . $xml->result->geometry->location->lat . "<BR>";
    print "LNG " . $xml->result->geometry->location->lng . "<BR>";
}

//$address_data = "PA Route 51 and Lewis Run Road, Pleasant Hills, PA 15236";
//BuildAddress($address_data);

function BuildAddress($address_data) {
    print "ADDRESS " . $address_data . "<BR>";
    $address_fields = str_getcsv(trim($address_data));
    print_r($address_fields);
    print "<BR>";
    $address = str_replace(" ", "+", trim($address_fields[0]));
    print $address . "<BR>";
    $city = str_replace(" ", "+", trim($address_fields[1]));
    print $city . "<BR>";

    $state_temp = explode(" ", trim($address_fields[2]));
    $state = $state_temp[0];
    print $state . "<BR>";
    $zipcode = $state_temp[1];
    print $zipcode . "<BR>";
    $googlekey = "AIzaSyCb3EA0lfao273s6Jkp8tfTzJfUSkswpOw";
    $googleaddress = "https://maps.googleapis.com/maps/api/geocode/xml?address=+" . $address . ",+" . $city . ",+" . $state . ",+" . $zipcode . "&key=" . $googlekey;
//print $sampleurl . "<BR>";
    print $googleaddress . "<BR>";
    getCurl($googleaddress);
    $xml = processXML();
    return $xml;
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