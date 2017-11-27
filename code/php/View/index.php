<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            Home Page - UNLANDMARK
        </title>
        <script src="../../js/modernizr-2.6.2.js"></script>
        <script src="../../js/jquery-1.11.2.js" type="text/javascript"></script>
        <script src="../../js/bootstrap.js" type="text/javascript"></script>
        <script src="../../js/respond.js" type="text/javascript"></script>

        <link href="../../css/bootstrap.css" rel="stylesheet"/>
        <link href="../../css/Site.css" rel="stylesheet"/>
        <link href="../../images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    </head>

    <body>
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
            

    <div class="jumbotron">
        <h1>Code for Pittsburgh</h1>
        <p class="lead">Welcome to Unlandmark</p>
        <p><a href="About.php" class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h2>Getting started</h2>
            <p>
                Add the Unlandmark name and address information and run process to geo-code (get lat and lng)
            </p>

            <p>
                <a class="btn btn-default" href="Places.php">Places &raquo;</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Add more detail</h2>
            <p>
                You can add narratives, web links and personal accounts
            </p>
            <p>
                <a class="btn btn-default" href="Stories.php">Stories &raquo;</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Show on the map</h2>
            <p>
                Lets see what it looks like on the map.
            </p>
            <p>
                <a class="btn btn-default" href="Map.php">Map it &raquo;</a>
            </p>
        </div>
    </div>


            <hr />
            <?php include "../includes/footer.php"; ?>

        </div>

    </body>
</html>
