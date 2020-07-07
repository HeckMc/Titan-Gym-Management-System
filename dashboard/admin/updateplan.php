<?php
 $id=$_POST['planid'];
 $pname=$_POST['planname'];
 $pdesc=$_POST['desc'];
 $pval=$_POST['planval'];
 $pamt=$_POST['amount'];

 $n=0;
 $flag=0;
 $file1 = fopen("plan_details.txt","r+");
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
	 $file1=fopen("plan_details.txt","r+");
	 while($i<$n){
		 fgets($file1);
		 $i++;
	 }
	 fwrite($file1,"*");
 }
 fclose($file1);
 $file1=fopen("plan_details.txt","a");
 fwrite($file1,$actual_id);
 fwrite($file1,"|");
 fwrite($file1,$pname);
 fwrite($file1,"|");
 fwrite($file1,$pdesc);
 fwrite($file1,"|");
 fwrite($file1,$pval);
 fwrite($file1,"|");
 fwrite($file1,$pamt);
 fwrite($file1,"#\n");
 fclose($file1);
 header("Location: view_plan.php");
 
// $update = $id.'|'.$pname.'|'.$pdesc.'|'.$pval.'|'.$pamt.'#';
// $filep = fopen("plan_details.txt","r");
// 					$counter=0;
// 					while(! feof($filep)){
// 						$counter = $counter+1;
// 						$line1 = fgets($filep);
// 						if(feof($filep)){
// 							break;
// 						}
// 						if($line1[0]=='*'){  //This means that the record is deleted , so no need to display
// 							$counter = $counter - 1;
// 							continue;
// 						}
// 						$pos1 = strpos($line1,"|");
// 						$ext1 = substr($line1,0,$pos1);
// 						$rem_string=substr($line1,$pos1+1);
// 						$pos1 = strpos($rem_string,"|");
// 						$ext2 = substr($rem_string,0,$pos1);
// 						$rem_string = substr($rem_string,$pos1+1);
// 						$pos1=strpos($rem_string,"|");
// 						$ext3 = substr($rem_string,0,$pos1);
// 						$rem_string = substr($rem_string,$pos1+1);
// 						$pos1=strpos($rem_string,"|");
// 						$ext4 = substr($rem_string,0,$pos1);
// 						$rem_string = substr($rem_string,$pos1+1);
// 						$pos1 = strpos($rem_string,"#");
//             $ext5 = substr($rem_string,0,$pos1);
//             if($ext1 == $id){
//               break;  
//             }
//           }
//           fclose($filep);
//           $pos = strpos($line1,"\n");
//           $line1 = substr($line1,0,$pos);
// $data = file_get_contents('plan_details.txt');
// $data = str_replace($line1, $update, $data);
// file_put_contents('plan_details.txt', $data);
// header("Location: view_plan.php");

