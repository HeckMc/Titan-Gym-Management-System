<?php
        $id = $_POST['usrid'];
        $name = $_POST['uname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $doj = $_POST['doj'];
		$new_calorie=$_POST['calorie'];
		$new_height=$_POST['height'];
		$new_weight=$_POST['weight'];
        $new_fat=$_POST['fat'];
		$contact = $_POST['contact'];
		
         $n=0;
		 $flag=0;
		 $file1 = fopen("health_details.txt","r+");
		 while(!feof($file1)){
			 $n++;
			 $line1=fgets($file1);
			  $pos1 = strpos($line1,"|");
			  $actual_id = substr($line1,0,$pos1);
			 if($actual_id == $id){
				 $flag=1;
				 break;
			 }
		 }
		 fclose($file1);
		 if($flag==0){
			 echo "Record not found \n";
		 }else{
			 $i=1;
			 $file1=fopen("health_details.txt","r+");
			 while($i<$n){
				fgets($file1);
				 $i++;
			 }
			 fwrite($file1,"*");
		}
		fclose($file1);
		$file1=fopen("health_details.txt","a");
		fwrite($file1,$id);
		fwrite($file1,"|");
		fwrite($file1,$name);
		fwrite($file1,"|");
		fwrite($file1,$gender);
		fwrite($file1,"|");
		fwrite($file1,$dob);
		fwrite($file1,"|");
		fwrite($file1,$contact);
		fwrite($file1,"|");
		fwrite($file1,$doj);
		fwrite($file1,"|");
		fwrite($file1,$new_calorie);
		fwrite($file1,"|");
		fwrite($file1,$new_height);
		fwrite($file1,"|");
		fwrite($file1,$new_weight);
		fwrite($file1,"|");
		fwrite($file1,$new_fat);
		fwrite($file1,"#\n");
        fclose($file1);
        
		header('Location: new_health_status.php');
?>