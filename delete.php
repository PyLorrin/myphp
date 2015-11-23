<?php $title = '删除 | '.$rc['title']; ?>
<?php require 'base/header.php'; ?>
<body>
  <?php require 'base/nav.php'; ?>
  <div class="container">
    <?php
      include("conn.php");
      mysql_query("DELETE FROM ".$blog_table." WHERE id = ".$_GET['id']);
    ?>
    <p><?php echo "删除成功!"; ?></p>
  </div>
  <?php require 'base/footer.php'; ?>
</body>
</html>