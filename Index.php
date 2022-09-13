<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web exercise</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php
            include "serverlogin.php"; 
          
          /* change character set to utf8, så vi kan have vores æøå, kilde 
           * http://php.net/manual/en/mysqli.set-charset.php */
            if (!$conn->set_charset("utf8")) {
                printf("Error loading character set utf8: %s\n", $conn->error);
                exit();
            }
        ?>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="mainFrame">
            <div class="header">
                <img src="files/Tek.jpg">
                <div class="menu">
                    <a id='picBTN' href='#'>Pictures</a>
                    <a id='usrBTN' href='#'>Users</a>
                </div>
            </div>
            <div class="content">
                <!--This is a container for the content-->
            </div>
        </div>
        <script src="JS/mainjava.js" type="text/javascript"></script>
    </body>
</html>


<!-- To launch this in brackets live preview, url is localhost/*whatever it's called in your "WWW" folder*-->