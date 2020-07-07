<?php
$rname = $_GET['id'];
$file1 = fopen("routine_details.txt","r+");
$n = 0;
$flag=0;
while(!feof($file1)){
    $n++;
    $line1=fgets($file1);
    $pos1=strpos($line1,"|");
    $actual_name = substr($line1,0,$pos1); //The routiine to be deleted
    if($actual_name == $rname){
        $flag=1;
        break;
    }
}
fclose($file1);
if($flag==0){
    echo "Record Not Found\n";
}else{
    $i=1;
    $file1=fopen("routine_details.txt","r+");
    while($i<$n){
        fgets($file1);
        $i++;
    }
    fwrite($file1,"*");
    echo "<head><script>alert('Routine Deleted Succesfully');</script></head>";
    header("Location: editroutine.php");
}

?>