<script src ="getBooksUndergrad.js"> </script>
<?php
//Create array from text file
$lines = file("books.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$data = array_map(function($v){
    list($book, $name) = explode(":", $v);
    return["book" => $book, "name" => $name];
}, $lines);

//Sort array
function my_sort($a, $b){
        
        if(($a["book"]%4) == ($b["book"]%4)){ return 0;}
        return ($a["book"]%4) < ($b["book"]%4)?-1:1;
    }
usort($data,"my_sort");

?>


 <table id="myTable" width="1500" border="1">
     
     
  
<?php
$i=0;   //For tracking array index
$ii=0;  //For tracking if row 1 title has been added
$iii=0; //For tracking if row 2 title has been added
$iiii=0;    //For tracking if row 3 title has been added
$iiiii=0;   //For tracking if row 4 title has been added
?>        
        
    <tr> 
    <?php
     while($i<count($data) and $data[$i]["book"]%4==0){ 
           $str = $data[$i]["name"];
        $nameAndAvail = preg_split('~,~', $str, -1, PREG_SPLIT_NO_EMPTY);   //Create temporary array of current book name and availablity
        
    ?>
    
         <?php if($ii==0){ 
             $ii=1;?>
          <td width="85">Art</td>
         <?php } ?>
         <td onclick='colorChange(this, "<?php echo $nameAndAvail[0];?>");' height="80"><?php echo $data[$i]["name"];?></td> <!-- change the color on click-->
     
    <?php $i = $i+1; } ?>
    </tr>
    
    <tr>
   <?php
    while($i<count($data) and $data[$i]["book"]%4==1){ 
          $str = $data[$i]["name"];
        $nameAndAvail = preg_split('~,~', $str, -1, PREG_SPLIT_NO_EMPTY);   //Create temporary array of current book name and availablity
        
    ?>
      
         <?php if($iii==0){ 
            $iii=1;?>
          <td width="85">Science</td>
         <?php } ?>
         <td onclick='colorChange(this, "<?php echo $nameAndAvail[0];?>");' height="80"><?php echo $data[$i]["name"];?></td>
     
    <?php $i = $i+1; } ?>
 </tr>
     
 <tr>
    <?php
    while($i<count($data) and $data[$i]["book"]%4==2){ 
          $str = $data[$i]["name"];
        $nameAndAvail = preg_split('~,~', $str, -1, PREG_SPLIT_NO_EMPTY);   //Create temporary array of current book name and availablity
        
    ?>
     
          <?php if($iiii==0){ 
             $iiii=1;?>
          <td width="85">Sport</td>
         <?php } ?>
         <td onclick='colorChange(this, "<?php echo $nameAndAvail[0];?>");' height="80"><?php echo $data[$i]["name"];?></td>
   
    <?php $i = $i+1; } ?>
 </tr>
     
 <tr>
   <?php
  
   while($i<count($data) and $data[$i]["book"]%4==3){ 
         $str = $data[$i]["name"];
        $nameAndAvail = preg_split('~,~', $str, -1, PREG_SPLIT_NO_EMPTY);   //Create temporary array of current book name and availablity
        
    ?>
     
          <?php if($iiiii==0){ 
             $iiiii=1;?>
          <td width="85">Literature</td>
         <?php } ?>
         <td onclick='colorChange(this, "<?php echo $nameAndAvail[0];?>");' height="80"><?php echo $data[$i]["name"];?></td>
     
   <?php $i = $i+1; } ?>
     </tr> 
 </table>