<?php
include("zju_conn.php");

session_start();

//搜索关键字的管理
if(!empty($_GET['keys'])){
	$keys = "WHERE item like '%".$_GET['keys']."%'";
} else {
	$keys = "";
}
$sql = "SELECT * FROM ".$blog_table." ".$keys." ORDER BY id DESC LIMIT 50";
$query = mysql_query($sql);
$rs = mysql_fetch_array($query);

if(!empty($_POST['submit'])){
  if($_POST['submit'] == $_SESSION['code']){
    $item = $_POST['item'];
	$class = $_POST['class'];
	$name = $_POST['name'];
    $num = $_POST['num'];
    $other = $_POST['other'];
	$sql = "INSERT INTO ".$blog_table."(id,item,class,name,num,other,date) VALUES(NULL,'$item','$class','$name','$num','$other',now())";
	mysql_query($sql);
  }else{
      echo "<script type=text/javascript> alert('请不要重复提交或刷新页面！') </script>";
  }
}

//根据当前SESSION生成随机数

$code = mt_rand(0,1000000);

$_SESSION['code'] = $code;

?>

<?php $title = '第八团总支'; ?>
<?php require 'base/header.php'; ?>
<body>
  <?php require 'base/nav2.php'; ?>
  <div class="container">
    <form action="" method="get">
      <input type="text" name="keys"/>
      <input type="submit" name="submit" value="事项搜索"/>
    </form>
    <div class="add">
      <hr color="#0033CC" size="3px"/>
      <h3>新提交</h3>
      <p>查看提交结果请点<a href="zju_index.php">这里</a>刷新</p>
      <form action="zju_index.php" method="post">
        <p>事项：</p>
        <select name="item">        
          <option value="测试">测试</option>
          <option value="测试2">测试2</option>
        </select>
        <br />
        <p>班级：</p>
        <select name="class">        
          <option value="电气1401">电气1401</option>
          <option value="电气1402">电气1402</option>
          <option value="电气1403">电气1403</option>
          <option value="电气1404">电气1404</option>
          <option value="电气1405">电气1405</option>
          <option value="电气1406">电气1406</option>
          <option value="电气1407">电气1407</option>
          <option value="电气1408">电气1408</option>
          <option value="电气1409">电气1409</option>
          <option value="电气1410">电气1410</option>
          <option value="电气1411">电气1411</option>
          <option value="药学1401">药学1401</option>
          <option value="药学1402">药学1402</option>
          <option value="药学1403">药学1403</option>
        </select>
        <br />
        <p>姓名：</p>
        <input type="text" name="name"/>
        <br />
        <p>学号：</p>
        <input type="text" name="num"/>
        <br />
        <p>备注：</p>
        <input type="text" name="other"/>
        <br />
        <p>↓这个显示的是防止重复提交用的随机数字，点它提交</p>
        <input type="submit" name="submit" value="<?php echo $code ?>"/>
        <br />
      </form>
    </div>
    <hr color="#FF9900" size="3" />
    <?php
    if(!$rs){
    	echo "没有相关内容！";
    }else{
        echo "<h3>上报情况</h3>";
        echo "<table border=\"1\">
        <td width=\"80\">事项</td>
        <td width=\"80\">班级</td>
        <td width=\"100\">学号</td>
        <td width=\"100\">日期</td>
        <td width=\"150\">备注</td>
        <td>删除</td>
        ";
    }
    //没有实现分页导航功能
    while($rs){
    ?>
      <tr>
      <td><?php echo $rs['item'];?></td>
      <td><?php echo $rs['class'];?></td>
      <td><?php echo $rs['num'];?></td>
      <td><?php echo $rs['date'];?></td>
      <td><?php echo $rs['other'];?></td>
      <td><a href="zju_delete.php?id=<?php echo $rs['id'];?>">删除</a></td>
      </tr>
    <?php
    	$rs = mysql_fetch_array($query);
    }
        echo "</table>"
    ?>
  </div>
</body>
</html>