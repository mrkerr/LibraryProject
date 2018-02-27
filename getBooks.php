<script src="getBooks.js"></script>
<?php
//Create array of book code, book name, and book availiablity
$lines = file("books.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$data = array_map(function($v){
    list($book, $name) = explode(":", $v);
    return["book" => $book, "name" => $name];
}, $lines);

//Sort array by code size
function my_sort($a, $b){
        
        if(($a["book"]%4) == ($b["book"]%4)){ return 0;}
        return ($a["book"]%4) < ($b["book"]%4)?-1:1;
    }
usort($data,"my_sort");

?>


 <table id="myTable" width="1500" border="1">
     
     
     
<?php
//I'm sorry, these variables are hideous 
$i=0;   //For tracking array index
$ii=0;  //For tracking if row 1 title has been added
$iii=0; //For tracking if row 2 title has been added
$iiii=0;    //For tracking if row 3 title has been added
$iiiii=0;   //For tracking if row 4 title has been added
?>        
        
    <tr> 
    <?php
    //For adding data in Art row
     while($i<count($data) and $data[$i]["book"]%4==0){   //While there are still elements left in the data array and the codes are still correct for art
         $str = $data[$i]["name"];
        $nameAndAvail = preg_split('~,~', $str, -1, PREG_SPLIT_NO_EMPTY);   //Create temporary array of current book name and availablity
        
    ?>
        
         <?php if($ii==0){  //Used for adding title element for every row, checks that it has already been added
             $ii=1;?>
          <td bgcolor="#808080" width="85">Art</td>
         <?php } ?>
         <td onclick='readFile(<?php echo $data[$i]["book"];?>, "<?php echo $nameAndAvail[1];?>")' height="80"><?php echo $nameAndAvail[0];?></td> <!-- Adds name of book to table and sets onclick to correct inputs-->
     
    <?php $i = $i+1; } //Increment index variable?>
    </tr>
    
    <tr>
   <?php
    while($i<count($data) and $data[$i]["book"]%4==1){ 
      $str = $data[$i]["name"];
        $nameAndAvail = preg_split('~,~', $str, -1, PREG_SPLIT_NO_EMPTY);
         ?>
         <?php if($iii==0){ 
            $iii=1;?>
          <td bgcolor="#808080" width="85">Science</td>
         <?php } ?>
         <td onclick='readFile(<?php echo $data[$i]["book"];?>, "<?php echo $nameAndAvail[1];?>")' height="80"><?php echo $nameAndAvail[0];?></td> <!-- Adds name of book to table and sets onclick to correct inputs-->
     
    <?php $i = $i+1; } ?>
 </tr>
     
 <tr>
    <?php
    while($i<count($data) and $data[$i]["book"]%4==2){ 
        $str = $data[$i]["name"];
        $nameAndAvail = preg_split('~,~', $str, -1, PREG_SPLIT_NO_EMPTY);
         ?>
     
          <?php if($iiii==0){ 
             $iiii=1;?>
          <td bgcolor="#808080" width="85">Sport</td>
         <?php } ?>
         <td onclick='readFile(<?php echo $data[$i]["book"];?>, "<?php echo $nameAndAvail[1];?>")' height="80"><?php echo $nameAndAvail[0];?></td> <!-- Adds name of book to table and sets onclick to correct inputs-->
   
    <?php $i = $i+1; } ?>
 </tr>
     
 <tr>
   <?php
  
   while($i<count($data) and $data[$i]["book"]%4==3){ 
       $str = $data[$i]["name"];
        $nameAndAvail = preg_split('~,~', $str, -1, PREG_SPLIT_NO_EMPTY);
         ?>
     
          <?php if($iiiii==0){ 
             $iiiii=1;?>
          <td bgcolor="#808080" width="85">Literature</td>
         <?php } ?>
         <td  onclick='readFile(<?php echo $data[$i]["book"];?>, "<?php echo $nameAndAvail[1];?>")' height="80"><?php echo $nameAndAvail[0];?></td> <!-- Adds name of book to table and sets onclick to correct inputs-->
     
   <?php $i = $i+1; } ?>
     </tr> 
 </table>
<form  action="getBooksHelper.php" method="post">
<input tpye="text" id="BookName" name="BookName" value="Book Name"/>
<input tpye="text" id="Shelf" name="Shelf" value="Shelf (art, science, sport, lit)"/>
<input type="submit" name="submit" value="Add Book"/>
</form>


