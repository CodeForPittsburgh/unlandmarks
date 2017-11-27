<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            Home Page - Places
        </title>
        <script src="../../js/modernizr-2.6.2.js"></script>
        <script src="../../js/jquery-1.11.2.js" type="text/javascript"></script>
        <script src="../../js/bootstrap.js" type="text/javascript"></script>
        <script src="../../js/respond.js" type="text/javascript"></script>

        <link href="../../css/bootstrap.css" rel="stylesheet"/>
        <link href="../../css/Site.css" rel="stylesheet"/>
        <link href="../../images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    </head>
<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="./" class="navbar-brand">UNLANDMARK</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="./">Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="Contacts.php">Contact</a></li>
                    </ul>
                    
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="Register.php">Register</a></li>
                                <li><a href="Login.php">Log in</a></li>
                            </ul>
                        
                </div>
            </div>
        </div>
        <div class="container body-content">
            
    <h2>Places</h2>
    <h3>UNLANDMARK place entry page.</h3>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div class="row">
        <div class="col-md-4">
            Unlandmark name:<br>
            <input type="text" name="unlandmark_name"><br>
            Address:<br>
            <input type="text" name="address"><br>
            City:<br>
            <input type="text" name="city"><br>
            State:<br>
            <input type="text" name="state"><br>
            Zipcode:<br>
            <input type="text" name="zipcode"><br>
            <br />

            <button type="button" class="btn btn-primary">Geo Code Address</button>
            <br />

            Results:
            <br />
            Lat:
            <input type="text" name="state0"><br>
            Lng:
            <input type="text" name="state1"><br>
        </div>
        <div class="col-md-4">
            <img id="MainContent_ImageMap1" />
            <p>Map1</p>
            </div>
                <div class="col-md-4">
            <img id="MainContent_ImageMap2" />
                    <p>Map2</p>

            </div>
        </div>


            <hr />
            <?php include "../includes/footer.php"; ?>
        </div>

</html>
