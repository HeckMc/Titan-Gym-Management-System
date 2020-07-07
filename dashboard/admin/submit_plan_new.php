<?php
  	$planid =$_POST['planid'];
    $name = $_POST['planname'];
    $desc = $_POST['desc'];
    $planval = $_POST['planval'];
    $amount = $_POST['amount'];
  
    $plan_file = fopen("plan_details.txt","a");
    fwrite($plan_file,$planid);
    fwrite($plan_file,"|");
    fwrite($plan_file,$name);
    fwrite($plan_file,"|");
    fwrite($plan_file,$desc);
    fwrite($plan_file,"|");
    fwrite($plan_file,$planval);
    fwrite($plan_file,"|");
    fwrite($plan_file,$amount);
    fwrite($plan_file,"#\n");
    fclose($plan_file);

    echo "<head><script>alert('PLAN Added ');</script></head>";
    ?> <script> window.location.replace('new_plan.php'); </script>
