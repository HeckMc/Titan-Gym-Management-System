<?php
$mem_id = $_GET['id'];
$file1 = fopen("member_details.txt","r+");
$n = 0;
$flag=0;
while(!feof($file1)){
    $n++;
    $line1=fgets($file1);
    $pos1=strpos($line1,"|");
    $actual_id = substr($line1,0,$pos1); //The member id to be deleted
    if('"'.$actual_id.'"' == $mem_id){
        $flag=1;
        break;
    }
}
fclose($file1);
if($flag==0){
    echo "Record Not Found\n";
}else{
    $i=1;
    $file1=fopen("member_details.txt","r+");
    while($i<$n){
        fgets($file1);
        $i++;
    }
    fwrite($file1,"*");
    // header("Location: table_view.php");
}
fclose($file1);
$file1 = fopen("health_details.txt","r+");
$n = 0;
$flag=0;
while(!feof($file1)){
    $n++;
    $line1=fgets($file1);
    $pos1=strpos($line1,"|");
    $actual_id = substr($line1,0,$pos1); //The member id to be deleted
    if('"'.$actual_id.'"' == $mem_id){
        $flag=1;
        break;
    }
}
fclose($file1);
if($flag==0){
    echo "Record Not Found\n";
}else{
    $i=1;
    $file1=fopen("health_details.txt","r+");
    while($i<$n){
        fgets($file1);
        $i++;
    }
    fwrite($file1,"*");
    header("Location: table_view.php");
}
?>