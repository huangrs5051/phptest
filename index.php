<?php
//master我也删除了一行代码
//dev分支删除了一行代码
//解决冲突后的提示语：删除了一行代码
header('Content-type:text/html;charset=utf8');
echo '现在的时间：'.date('Y-m-d H:i:s');
echo '<br>';
echo '来访者的IP地址：'.$_SERVER["REMOTE_ADDR"];
?>
