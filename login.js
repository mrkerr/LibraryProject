//Saves username to local storae and opens correct php file
function saveValues(){
    uName = document.getElementById("uName").value;
    pWord = document.getElementById("pWord").value;
    localStorage.setItem("uName", uName);
    if(uName === "admin" && pWord === "admin"){ //If admin
        window.open('getBooks.php');
    }
    else if(uName.startsWith('U')){ //If undergrad
        window.open('getBooksUndergrad.php');
    }
    else{
        alert("Incorrect Username and Password");
    }
}