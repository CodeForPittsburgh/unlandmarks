<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <body>

        <h2>The Navigator Object - Java</h2>

        <p>The javaEnabled() method returns true if Java is enabled:</p>

        <p id="demo1"></p>

        <script>
            document.getElementById("demo1").innerHTML =
                    "javaEnabled is " + navigator.javaEnabled();
        </script>

        <h2>The Cookie Object</h2>

        <p>The Cookie method returns true if cookie is enabled:</p>       
        <p id="demo2"></p>

        <script>
            document.getElementById("demo2").innerHTML =
                    "cookiesEnabled is " + navigator.cookieEnabled;
        </script>
        <h2>The Navigator App Name</h2>
        <p id="demo3"></p>

        <script>
            document.getElementById("demo3").innerHTML =
                    "navigator.appName is " + navigator.appName;
        </script>
        <h2>The Navigator App Code Name</h2>
        <p id="demo4"></p>

        <script>
            document.getElementById("demo4").innerHTML =
                    "navigator.appCodeName is " + navigator.appCodeName;
        </script>
        <h2>The Navigator Product</h2>
        <p id="demo5"></p>

        <script>
            document.getElementById("demo5").innerHTML =
                    "navigator.product is " + navigator.product;
        </script>
        <h2>The Navigator App Version</h2>
        <p id="demo6"></p>

        <script>
            document.getElementById("demo6").innerHTML = navigator.appVersion;
        </script>
        <h2>The Navigator User Agent</h2>
        <p id="demo7"></p>

        <script>
            document.getElementById("demo7").innerHTML = navigator.userAgent;
        </script>
        <h2>The Navigator Platform</h2>
        <p id="demo8"></p>

        <script>
            document.getElementById("demo8").innerHTML = navigator.platform;
        </script>
        <h2>The Navigator Language</h2>
        <p id="demo9"></p>

        <script>
            document.getElementById("demo9").innerHTML = navigator.language;
        </script>
        <h2>The Navigator onLine</h2>
        <p id="demo10"></p>

        <script>
            document.getElementById("demo10").innerHTML = navigator.onLine;
        </script>

        <h2>The Mobile Object</h2>
        <p id="demo12"></p>

        <script>
            var x = document.getElementById("demo12");

            if (window.innerWidth <= 800 && window.innerHeight <= 600) {
                x.innerHTML = "Mobile";
            } else {
                x.innerHTML = "is not Mobile";
            }


        </script>
        <h2>GPS</h2>
        <p>Click the button to get your coordinates.</p>

        <button onclick="getLocation()">Try It</button>

        <p id="demo11"></p>

        <script>
            var x = document.getElementById("demo11");

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position) {
                x.innerHTML = "Latitude: " + position.coords.latitude +
                        "<br>Longitude: " + position.coords.longitude;
            }
        </script>

        <a href="https://docs.google.com/document/d/1NalDEm4N8wRoR9kTSgdk8oONKrBVSMCyvng2y0jw3O8/edit?ts=598cf443">Data Entry Document</a> <br>
        <a href="https://docs.google.com/document/d/1GogZKTNC7BUOM9RqL9Yj3fgRvmsOLLRqtN-v9LMAcFI/edit#heading=h.iwdzrp2ld834">Agenda Document</a> <br>
        <a href="https://docs.google.com/document/d/1GogZKTNC7BUOM9RqL9Yj3fgRvmsOLLRqtN-v9LMAcFI/edit#heading=h.iwdzrp2ld834">Data Document</a> <br>
        <a href="https://docs.google.com/spreadsheets/d/14JtvHoKmjXTvapPqOBnRywATbQbaKhnSp0lavJ2OlwE/edit#gid=1949451299">Data Layout Document</a> <br>
        <a href="https://docs.google.com/spreadsheets/d/1kMlKdrgD1538uLtEqh1ikTEMNWjc2LNWSW6fcU5xLfM/edit#gid=0">Data Document</a> <br>
    </body>
</html>
