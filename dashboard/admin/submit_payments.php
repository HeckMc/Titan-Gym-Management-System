<?php
 $memID=$_POST['m_id'];
 $plan=$_POST['plan'];
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
    $uname = substr($rem_string,0,$pos1);
    $rem_string = substr($rem_string,$pos1+1);
    $pos1=strpos($rem_string,"|");
    $stname = substr($rem_string,0,$pos1);
    $rem_string = substr($rem_string,$pos1+1);
    $pos1=strpos($rem_string,"|");
    $city = substr($rem_string,0,$pos1);
    $rem_string = substr($rem_string,$pos1+1);
    $pos1 = strpos($rem_string,"|");
    $zipcode = substr($rem_string,0,$pos1);
    $rem_string = substr($rem_string,$pos1+1);
    $pos1 = strpos($rem_string,"|");
    $state = substr($rem_string,0,$pos1);
    $rem_string = substr($rem_string,$pos1+1);
    $pos1 = strpos($rem_string,"|");
    $gender = substr($rem_string,0,$pos1);
     $rem_string = substr($rem_string,$pos1+1);
    $pos1 = strpos($rem_string,"|");
    $dob = substr($rem_string,0,$pos1);
    $rem_string = substr($rem_string,$pos1+1);
    $pos1 = strpos($rem_string,"|");
    $mobNo = substr($rem_string,0,$pos1);
    $rem_string = substr($rem_string,$pos1+1);
    $pos1 = strpos($rem_string,"|");
    $email = substr($rem_string,0,$pos1);
    $rem_string = substr($rem_string,$pos1+1);
    $pos1 = strpos($rem_string,"|");
    $doj = substr($rem_string,0,$pos1);
    $rem_string = substr($rem_string,$pos1+1);
    $pos1 = strpos($rem_string,"#");
    $old_plan = substr($rem_string,0,$pos1);
    if($actual_id == $memID){
   $flag=1;
   break;
 }
}
//  echo 'Current plan ='.$old_plan;
//  echo 'New plan = '.$plan;
 $update = $memID.'|'.$uname.'|'.$stname.'|'.$city.'|'.$zipcode.'|'.$state.'|'.$gender.'|'.$dob.'|'.$mobNo.'|'.$email.'|'.$doj.'|'.$plan.'#\n';
 $pos = strpos($line1,"\n");
 $line1 = substr($line1,0,$pos);
//  echo $line1;
//  echo $update;
$data = file_get_contents('member_details.txt');
$data = str_replace($line1, $update, $data);
file_put_contents('member_details.txt', $data);

// ************************************* Updating Payment History *****************************************
$file1 = fopen("plan_details.txt","r");
					$counter=0;
					while(! feof($file1)){
						$counter = $counter+1;
						$line1 = fgets($file1);
						if(feof($file1)){
							break;
						}
						if($line1[0]=='*'){  //This means that the record is deleted , so no need to display
							$counter = $counter - 1;
							continue;
						}
						$pos1 = strpos($line1,"|");
						$ext1 = substr($line1,0,$pos1);
						$rem_string=substr($line1,$pos1+1);
						$pos1 = strpos($rem_string,"|");
						$ext2 = substr($rem_string,0,$pos1);
						$rem_string = substr($rem_string,$pos1+1);
						$pos1=strpos($rem_string,"|");
						$ext3 = substr($rem_string,0,$pos1);
						$rem_string = substr($rem_string,$pos1+1);
						$pos1=strpos($rem_string,"|");
						$ext4 = substr($rem_string,0,$pos1);
						$rem_string = substr($rem_string,$pos1+1);
						$pos1 = strpos($rem_string,"#");
            $ext5 = substr($rem_string,0,$pos1);
            if($plan.' Plan' == $ext2){
            break;
            }
          }
date_default_timezone_set('Asia/Kolkata');
$fp = fopen("payment_history.txt","a");
fwrite($fp,date("d/m/Y"));
fwrite($fp,"|");
fwrite($fp,$memID);
fwrite($fp,'|');
fwrite($fp,$uname);
fwrite($fp,'|');
fwrite($fp,$plan);
fwrite($fp,'|');
fwrite($fp,$ext5);
fwrite($fp,"#\n");
fclose($fp);

echo "<head><script>alert('Payment Added Succefsully');</script></head>";
 ?> <script> window.location.replace('payments.php'); </script>