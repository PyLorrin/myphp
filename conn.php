<?php
/**
 *ly_micro_blog
 *ID|TITLE|CONTENT|DATE
 **/
?>
<?php
//连接MySql数据库服务
$sqlsv = 'localhost:3306';
$db = 'my_db';
$blog_table = 'my_blog';
$sqluser = 'root';
$sqlmm = 'hongmu1011';

$conn = @mysql_connect($sqlsv,$sqluser,$sqlmm) or die("连接数据库服务器失败！");
//连接ly_php_base数据库
@mysql_select_db($db,$conn) or die("未能连接到数据库！");
//mysql_query("SET NAMES 'GBK'");
?>