document.querySelector("#picBTN").addEventListener('click', function(){
    let file =  "pictures.php";
    loadContent(file);
});
        
document.querySelector("#usrBTN").addEventListener('click', function(){
    let file = "users.php";
    loadContent(file);
});
        
document.querySelector("#signUpBTN").addEventListener('click', function(){
    let file = "Signup.php";
    loadContent(file);
});
            
function loadContent(content){
    fetch (content)
        .then(response => response.text())
        .then(data => document.querySelector(".content").innerHTML = data);
}