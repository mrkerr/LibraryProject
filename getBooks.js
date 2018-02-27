//This doesn't actually read the file but it was originally going to and I didn't change the name, my b
function readFile(bookCode, avail){
var isAvail = "";
if(avail === " 0"){ //0 is a sign that the book is not checked out
    isAvail = "This book is currently available";
}
else{   //The person's name should appear if the book is checked out
    isAvail = "This book is currently checked out";
}
if(bookCode<24 && bookCode>9){
    bookCode = bookCode + 2;    
    alert("This book's code is " + bookCode + "\n" + isAvail);
}
    else{
    alert("This book's code is " + bookCode + "\n" + isAvail);
}
}
