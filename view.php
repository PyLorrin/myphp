<?php 
include("conn.php");

if(!empty($_GET['id'])){
	$sql = "SELECT * FROM ".$blog_table." WHERE id = ".$_GET['id'];
	$rc = mysql_fetch_array(mysql_query($sql));
	mysql_query("UPDATE ".$blog_table." SET hits = hits + 1 WHERE id = ".$_GET['id']);
} else {
	echo "参数引入失败！";
}
?>

<?php $title = $rc['title']; ?>
<?php require 'base/header.php'; ?>
<body>
  <?php require 'base/nav.php'; ?>
  <div class="container">
    <a href="default.php">返回主页面</a>
    <hr color="#00FFFF" size="5px"/>
    <h2><?php echo $rc['title'];?></h2>
    <p>
      <?php echo "日期：".$rc['date']." | 浏览次数：".$rc['hits'];?>
      <a href="edit.php?id=<?php echo $_GET['id'];?>">编辑</a>|<a href="javascript:del(<?php echo $_GET['id'];?>)">删除</a>
    </p>
    <hr color="#006699" size="3px">
    
    <p><?php echo $rc['content'];?></p>
    <hr>
  </div>
  <?php require 'base/footer.php'; ?>
</body>
</html>

