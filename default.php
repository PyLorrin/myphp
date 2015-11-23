<?php
include("conn.php");
//搜索关键字的管理
if(!empty($_GET['keys'])){
	$keys = "WHERE title like '%".$_GET['keys']."%'";
} else {
	$keys = "";
}
$sql = "SELECT * FROM ".$blog_table." ".$keys." ORDER BY id DESC LIMIT 10";
$query = mysql_query($sql);
$rs = mysql_fetch_array($query);
?>

<?php $title = 'Lorrin的博客管理'; ?>
<?php require 'base/header.php'; ?>
<body>
  <?php require 'base/nav.php'; ?>
  <div class="container">
    <a href="add.php">添加文章</a>
    <form action="" method="get">
      <input type="text" name="keys"/>
      <input type="submit" name="submit" value="标题搜索"/>
    </form>
    <hr color="#FF9900" size="3" />
    <?php
    if(!$rs){
    	echo "没有相关内容！";
    }
    //没有实现分页导航功能
    while($rs){
    ?>
    <h3>标题：<?php echo $rs['title'];?></h3>
    <li>日期：<?php echo $rs['date'];?></li>
    <p>内容<?php echo iconv_substr($rs['content'],0,50,"UTF-8");?>...... <a href="view.php?id=<?php echo $rs['id'];?>">|查看详细内容|</a></p>
    <hr color="#0033FF" size="5" />
    <?php
    	$rs = mysql_fetch_array($query);
    }
    ?>
  </div>
  <?php require 'base/footer.php'; ?>
</body>
</html>