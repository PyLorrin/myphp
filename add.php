<?php
//引入连接数据库文件
include("conn.php");

if(!empty($_POST['submit'])){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$sql = "INSERT INTO ".$blog_table."(id,title,content,date,hits) VALUES(NULL,'$title','$content',now(),0)";
	mysql_query($sql);
}
?>
<?php $title = '新文章'; ?>
<?php require 'base/header.php'; ?>
<body>
  <?php require 'base/nav.php'; ?>
  <div class="container">
    <a href="default.php">查看内容</a>
    <hr color="#0033CC" size="3px"/>
    <form action="add.php" method="post">
      标题：
      <input type="text" name="title"/>
      <br />
      内容：
      <textarea rows="5" cols="50" name="content"></textarea>
      <br />
      <input type="submit" name="submit" value="提交"/>
      <br />
    </form>
  </div>
  <?php require 'base/footer.php'; ?>
</body>
</html>