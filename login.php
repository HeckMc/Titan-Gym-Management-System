<?php

$credentials = [
    'userID' => 'admin',
    'password' => 'admin'
];

if ( $credentials['userID'] !== $_POST['user_id_auth'] OR $credentials['password'] !== $_POST['pass_key'] )
{    
    echo "<head><script>alert('Wrong User ID or Password! Try Again!');</script></head>";
    ?> <script> window.location.replace('index.php'); </script> <?php
}
else{
    header('Location: ./dashboard/admin/');
}


