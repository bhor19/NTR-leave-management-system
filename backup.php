<?php
include_once('Mysqldump/Mysqldump.php');

$dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=leave_management_system', 'root', '');
$f=date('d-m-Y');
$dump->start("D:\pass_backup/$f.sql");
?>