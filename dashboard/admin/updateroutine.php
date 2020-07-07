<?php
 
   $rname=$_POST['routinename'];
   $day1=$_POST['day1'];
   $day2=$_POST['day2'];
   $day3=$_POST['day3'];
   $day4=$_POST['day4'];
   $day5=$_POST['day5'];
   $day6=$_POST['day6'];
   
   $n=0;
   $flag=0;
   $file1 = fopen("routine_details.txt","r+");
   while(!feof($file1)){
      $n++;
      $line1=fgets($file1);
      $pos1 = strpos($line1,"|");
      $actual_name = substr($line1,0,$pos1);
      if($actual_name == $rname){
         $flag=1;
         break;
      }
   }
   fclose($file1);
   if($flag==0){
      echo "Record not found \n";
   }else{
      $i=1;
      $file1=fopen("routine_details.txt","r+");
      while($i<$n){
         fgets($file1);
         $i++;
      }
      fwrite($file1,"*");
   }
   fclose($file1);
   $file1=fopen("routine_details.txt","a");
   fwrite($file1,$actual_name);
   fwrite($file1,"|");
   fwrite($file1,$day1);
   fwrite($file1,"|");
   fwrite($file1,$day2);
   fwrite($file1,"|");
   fwrite($file1,$day3);
   fwrite($file1,"|");
   fwrite($file1,$day4);
   fwrite($file1,"|");
   fwrite($file1,$day5);
   fwrite($file1,"|");
   fwrite($file1,$day6);
   fwrite($file1,"#\n");
   fclose($file1);
   header("Location: viewroutine.php");
   //  $query1="update timetable set day1='".$day1."',day2='".$day2."',day3='".$day3."',day4='".$day4."',day5='".$day5."',day6='".$day6."' where tid=".$id."";

   // if(mysqli_query($con,$query1)){
     
   //          echo "<html><head><script>alert('Routine Updated Successfully');</script></head></html>";
   //          echo "<meta http-equiv='refresh' content='0; url=viewroutine.php'>";  
   // }
   // else{
   //  echo "<html><head><script>alert('ERROR! Update Opertaion Unsucessfull');</script></head></html>";
   //  echo "error".mysqli_error($con);
   // }
    

?>
