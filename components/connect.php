<?php
$db_name='mysql:hostlocalhost;dbname=prn_db';
$db_user_name='root';
$db_user_pass='';

$conn=new PDO($db_name,$db_user_name,$db_user_pass);

function create_unique_id(){
    $char='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $char_len=strlen($char);
    $rand_str='';
    for($i=0;$i<20;$i++){
        $rand_str .= $char[mt_rand(0, $char_len-1)];
    }
    return $rand_str;
}

?>

