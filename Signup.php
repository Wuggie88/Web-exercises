<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class ="form">
            <form onsubmit="return checkform" method="post">
                <label for="Fname" style="color: blue;">First name</label>
                <br>
                <input type="text" name="Fname" id="Fname"/>
                <br>
                <label for="Lname" style="color: blue;">Last name</label>
                <br>
                <input type="text" name="Lname" id="Lname"/>
                <br>
                <label for="Email" style="color: blue;">E-mail</label>
                <br>
                <input type="email" pattern="\S+@\S+\.([a-z]|[A-Z]){1,5}" name="Email" id="Email"/>
                <br>
                <label for="username" style="color: blue;">Username</label>
                <br>
                <input type="text" name="username" id="username"/>
                <br>
                <label for="PW" style="color: blue;">Password</label>
                <br> 
                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\S{7,31}" name="PW" id="PW"/>
                <br>
                <label for="IMG" style="color: blue;">Profile image</label>
                <br>
                <input type="file" accept="image/*" name="IMG" id="IMG"/>
                <br>
                <input type="submit" name="submit" id="submit"/>
            </form>
        </div>
    </body>
</html>
    