<?php 
include("conn.php");
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$sql = "select * from ".$blog_table." where id = ".$_GET['id'];
	$query = mysql_query($sql);	
	$rc = mysql_fetch_array($query);
}

if(!empty($_POST['update'])){
    mysql_query("UPDATE ".$blog_table." SET title = '".$_POST['title']."',content = '".$_POST['content']."' WHERE id = ".$id);
	echo "更新按钮提交成功！";
}
?>

<?php $title = '编辑 | '.$rc['title']; ?>
<?php require 'base/header.php'; ?>
<body>
  <?php require 'base/nav.php'; ?>
  <div class="container">
    <a href="default.php">返回主页面</a>
    <form action="edit.php?id=<?php echo $id;?>" method="post">
      <p>标题：</p>
      <input type="text" name="title" value="<?php echo $rc['title'];?>"/>
      <br />
      <p>内容：</p>
      <textarea rows="5" cols="50" name="content"><?php echo $rc['content'];?></textarea>
      <br />
      <input type="submit" name="update" value="更新"/>
      <br />
    </form>
  </div>
  <?php require 'base/footer.php'; ?>
</body>
</html>