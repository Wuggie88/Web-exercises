$(document).ready(function () {

    //loader pictures.php ind i den div der har content som class
    $("#picBTN").click(function () {
        $(".content").load("pictures.php");

        return false;
    });

    $("#usrBTN").click(function () {
        $(".content").load("users.php");

        return false;
    });

});
