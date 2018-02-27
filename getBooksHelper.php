<?php
//This writes to the books text file for new books on the admin screen
     include 'getBooks.php';
     $file = 'books.txt';
     $index = count($data);
     $genre = $_POST['Shelf'];
     $indextrackerone = false;
     $indextrackertwo = false;
     $indextrackerthree = false;
     $indextrackerfour = false;
     
     
            
         if($genre=="Art"){ //If the selected shelf is art
             if($index%4==0 and $indextrackerone==false){   //If the current number is correct for art
                 $index = $index;   //Set index equal to itself (idk)
                 $indextrackerone = true;   //Set boolean value to true to prevent index from changing
             }
             if(($index+1)%4==0 and $indextrackerone==false){   //Check if index+1 works
                 $index = $index+1; 
                 $indextrackerone = true;
             }
             
             if(($index+2)%4==0 and $indextrackerone==false){   //Check if index+2 works
                 $index = $index+2;
                 $indextrackerone = true;
             }
             
             if(($index+3)%4==0 and $indextrackerone==false){   //index+3 should work if none of the others have
                 $index = $index+3;
                 $indextrackerone = true;
             }
         }
         
         if($genre=="Science"){
             if($index%4==1 and $indextrackertwo==false){
                 $index = $index;
                 $indextrackertwo = true;
             }
             if(($index+1)%4==1 and $indextrackertwo==false){
                 $index = $index+1;
                 $indextrackertwo = true;
             }
             
             if(($index+2)%4==1 and $indextrackertwo==false){
                 $index = $index+2;
                 $indextrackertwo = true;
             }
             
            if(($index+3)%4==1 and $indextrackertwo==false){
                 $index = $index+3;
                 $indextrackertwo = true;
             }
         }
         
         
          if($genre=="Sport"){
             if($index%4==2 and $indextrackerthree==false){
                 $index = $index;
                 $indextrackerthree = true;
             }
             if(($index+1)%4==2 and $indextrackerthree==false){
                 $index = $index+1;
                 $indextrackerthree = true;
             }
             
             if(($index+2)%4==2 and $indextrackerthree==false){
                 $index = $index+2;
                 $indextrackerthree = true;
             }
             
             if(($index+3)%4==2 and $indextrackerthree==false){
                 $index = $index+3;
                 $indextrackerthree = true;
             }
             
         }
         
         
          if($genre=="Literature"){
             if($index%4==3 and $indextrackerfour==false){
                 $index = $index;
                 $indextrackerfour = true;
             }
             if(($index+1)%4==3 and $indextrackerfour==false){
                 $index = $index+1;
                 $indextrackerfour = true;
             }
             
             if(($index+2)%4==3 and $indextrackerfour==false){
                 $index = $index+2;
                 $indextrackerfour = true;
             }
             
             if(($index+3)%4==3 and $indextrackerfour==false){
                 $index = $index+3;
                 $indextrackerfour = true;
             }
             
         }
         
     
     $current = file_get_contents($file);   //get conteents of books text file
     $temp = "\n" . $index . " : " . $_POST['BookName'] . " , 0";    //Create string to add in
     $current .= $temp; //Add string to file contentd
     file_put_contents($file, $current);    //Put the contents back in the file
     $toPrint = "Refresh Page to see Library Update";   //You have to refresh for it to update, sorry
     echo $toPrint;
