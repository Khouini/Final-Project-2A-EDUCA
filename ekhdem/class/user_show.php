<?php
include 'class/class.db.forum.php';
$tb_user =new DB_dove();
$user_arr = $tb_user->get_user();
foreach($user_arr as $item)
{
    echo $item['user'];
    echo $item['level'];
}
?>