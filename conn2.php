<?php
/**
 *ly_micro_blog
 *ID|TITLE|CONTENT|DATE
 **/
?>
<?php
//连接MySql数据库服务
$sqlsv = 'qdm116354109.my3w.com:3306';//'localhost:3306'
$db = 'qdm116354109_db';//'my_db'
$blog_table = 'my_blog';
$sqluser = 'qdm116354109';//root
$sqlmm = 'hongmu1011';

$conn = @mysql_connect($sqlsv,$sqluser,$sqlmm) or die("连接数据库服务器失败！");
//连接ly_php_base数据库
@mysql_select_db($db,$conn) or die("未能连接到数据库！");
//mysql_query("SET NAMES 'GBK'");
?>