var index = 0;  //Yes I know this is a gobal, I couldn't figure out how to do it without this
var renter = "";    //Ok maybe 2 globals
function colorChange(cell, avail){  
    renter = avail;
    currColor = cell.style.backgroundColor; //for debugging
    if (cell.style.backgroundColor==="" && index<2){    //If the background color hasn't been set and less than 2 boxes are red
        cell.style.backgroundColor='Red';   //Set the background color to red
        index = index + 1;  //Increment index
    }
     else if (cell.style.backgroundColor==="" && index===2){    //If clicking on white box while 2 other boxes are red
        cell.style.backgroundColor="";  //Leave background color the same (idk)
    }
        
    else{   //This will only happen if clicking on already red box
          cell.style.backgroundColor="";    //Sets its color back to blank
        if(index>0){
        index = index - 1;  //De-increment index
    }
    }
    
    
 



}
