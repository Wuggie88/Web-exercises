<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web exercise</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php
            include "serverlogin.php"; 
        ?>        
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    </head>
    <body>
        <div class="mainFrame">
            <div class="header">
                <img src="files/Tek.jpg">
                <div class="menu">
                    <a id='picBTN' href='#'>Pictures</a>
                    <a id='usrBTN' href='#'>Users</a>
                    <a id='signUpBTN' href='#'>Sign up</a>
                </div>
            </div>
            <div class="content">
                <!--This is a container for the content-->
            </div>
        </div>
        
        <!--<script src="JS/mainjava.js" type="text/javascript"></script>
        -->
        
        <script>
            /*let files = "pictures.php";
            fetch (files)
                .then(response => response.text())
                .then(data => document.querySelector(".content").innerHTML = data);
            */
            document.querySelector("#picBTN").addEventListener('click', function(){
                console.log("clicked pictures");
                let file =  "pictures.php";
                fetch(file)
                    .then(response => response.text)
                    .then(data => document.querySelector(".content").innerHtml = data);
                console.log("done");
                //loadContent(file);
            });
            
            document.querySelector("#usrBTN").addEventListener('click', function(){
                //console.log("clicked users");
                let file = "users.php";
                loadContent(file);
            });
            
            document.querySelector("#signUpBTN").addEventListener('click', function(){
                //console.log("clicked sign-up");
                let file = "Signup.php";
                loadContent(file);
            });
            
            function loadContent(content){
                fetch (content)
                    .then(response => response.text())
                    .then(data => document.querySelector(".content").innerHTML = data);
            }
            /*
            async function loadContent(content){
                let x = await fetch(content);
                let y = await x.text();
                document.getElementsById("content").innerHtml = y;
            }
            */
        </script>
        
    </body>
</html>


<!-- To launch this in brackets live preview, url is localhost/*whatever it's called in your "WWW" folder*-->