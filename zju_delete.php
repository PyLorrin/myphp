<?php $title = '删除' ?>
<?php require 'base/header.php'; ?>
<body>
  <?php require 'base/nav2.php'; ?>
  <div class="container">
    <?php
      include("zju_conn.php");
      mysql_query("DELETE FROM ".$blog_table." WHERE id = ".$_GET['id']);
    ?>
    <p><?php echo "删除成功!"; ?></p>
  </div>
</body>
</html>