<?php
   $uid=$_POST['uid'];
   $uname=$_POST['uname'];
   $gender=$_POST['gender'];
   $mobile=$_POST['phone'];
   $email=$_POST['email'];
   $dob=$_POST['dob'];
   $jdate=$_POST['jdate'];
   $stname=$_POST['stname'];
   $state=$_POST['state'];
   $city=$_POST['city'];
   $zipcode=$_POST['zipcode'];
   $n=0;
   $flag=0;
 
   $filep = fopen("member_details.txt","r");
							$counter=0;
							while(! feof($filep)){
								$counter = $counter+1;
								$line1 = fgets($filep);
								if(feof($filep)){
									break;
								}
								if($line1[0]=='*'){  //This means that the record is deleted
									$counter = $counter - 1;
									continue;
                        }
      $n++;
	   $pos1 = strpos($line1,"|");
	   $actual_id = substr($line1,0,$pos1);
	   $rem_string=substr($line1,$pos1+1);
      $pos1 = strpos($rem_string,"|");
      $old_uname = substr($rem_string,0,$pos1);
      $rem_string = substr($rem_string,$pos1+1);
      $pos1=strpos($rem_string,"|");
      $old_stname = substr($rem_string,0,$pos1);
      $rem_string = substr($rem_string,$pos1+1);
      $pos1=strpos($rem_string,"|");
      $old_city = substr($rem_string,0,$pos1);
      $rem_string = substr($rem_string,$pos1+1);
      $pos1 = strpos($rem_string,"|");
      $old_zipcode = substr($rem_string,0,$pos1);
      $rem_string = substr($rem_string,$pos1+1);
      $pos1 = strpos($rem_string,"|");
      $old_state = substr($rem_string,0,$pos1);
      $rem_string = substr($rem_string,$pos1+1);
      $pos1 = strpos($rem_string,"|");
      $old_gender = substr($rem_string,0,$pos1);
       $rem_string = substr($rem_string,$pos1+1);
      $pos1 = strpos($rem_string,"|");
      $old_dob = substr($rem_string,0,$pos1);
      $rem_string = substr($rem_string,$pos1+1);
      $pos1 = strpos($rem_string,"|");
      $old_mobNo = substr($rem_string,0,$pos1);
      $rem_string = substr($rem_string,$pos1+1);
      $pos1 = strpos($rem_string,"|");
      $old_email = substr($rem_string,0,$pos1);
      $rem_string = substr($rem_string,$pos1+1);
      $pos1 = strpos($rem_string,"|");
      $old_doj = substr($rem_string,0,$pos1);
      $rem_string = substr($rem_string,$pos1+1);
      $pos1 = strpos($rem_string,"#");
      $plan = substr($rem_string,0,$pos1);
      if($actual_id == $uid){
		 $flag=1;
	 	break;
	 }
 }
 $update = $actual_id.'|'.$uname.'|'.$stname.'|'.$city.'|'.$zipcode.'|'.$state.'|'.$gender.'|'.$dob.'|'.$mobile.'|'.$email.'|'.$jdate.'|'.$plan.'#\n';
 $pos = strpos($line1,"\n");
 $line1 = substr($line1,0,$pos);
 $data = file_get_contents('member_details.txt');
 $data = str_replace($line1, $update, $data);
 file_put_contents('member_details.txt', $data);
// $i=1;
// $plan_file=fopen("member_details.txt","r+");
// while($i<$n){
// 	fgets($plan_file);
// 	$i++;
// }
//  fwrite($plan_file,"*");
//  fclose($plan_file);
//  $plan_file=fopen("member_details.txt","a");
//  fwrite($plan_file,$actual_id);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$uname);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$stname);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$city);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$zipcode);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$state);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$gender);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$dob);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$mobile);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$email);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$jdate);
//  fwrite($plan_file,"|");
//  fwrite($plan_file,$plan);
//  fwrite($plan_file,"#\n");
// //  fwrite($file1,$actual_id);
// //  fwrite($file1,"|");
// //  fwrite($file1,$uname);
// //  fwrite($file1,"|");
// //  fwrite($file1,$pdesc);
// //  fwrite($file1,"|");
// //  fwrite($file1,$pval);
// //  fwrite($file1,"|");
// //  fwrite($file1,$pamt);
// //  fwrite($file1,"#\n");
//  fclose($plan_file);
header("Location: table_view.php");
?>