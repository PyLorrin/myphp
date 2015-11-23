<?php $title = 'Lorduino'; ?>
<?php require 'base/header.php'; ?>
<body>
  <?php require 'base/nav.php'; ?>
  <div class="container">
    <div class="box-shadow-1">
      <div id="myCarousel" class="carousel slide">
      <!-- 轮播（Carousel）指标 -->
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>  
      <!-- 轮播（Carousel）项目 -->
      <div class="carousel-inner">
         <div class="item active">
            <img src="image/lays.jpg" alt="First slide">
         </div>
         <div class="item">
            <img src="image/kobo.jpg" alt="Second slide">
         </div>
         <div class="item">
            <img src="image/ykq.jpg" alt="Third slide">
         </div>
      </div>
      <!-- 轮播（Carousel）导航 -->
      <a class="carousel-control left" href="#myCarousel"
         data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel"
         data-slide="next">&rsaquo;</a>
    </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <div class="tcenter">
      <div class="row">
        <div class="col-xs-0 col-sm-2 col-md-3"></div>
        <div class="col-xs-12 col-sm-4 col-md-6">
          <h1>什么是Arduino？</h2>
          <br>
          <p>Arduino是一款便捷灵活、方便上手的开源电子原型平台，包含硬件（各种型号的Arduino板）和软件（Arduino IDE)。由一个欧洲开发团队最早于2005年冬季开发。</p>
          <br><br><br><br><br><br><br><br><br><br>
          <h1>何来磁悬浮的计划？</h1>
          <br>
          <p>雄赳赳地进实验室，灰溜溜地回到学校...嘛，当时给的课题跟这个有一点点关系</p>
          <br><br><br><br><br><br><br><br><br><br>
          <h1>与WEB相结合的意义？</h1>
          <br>
          <p>想将其与跨平台的网页相结合，实现跨平台、0成本对单片机的控制。</p>
        </div>
        <div class="col-xs-0 col-sm-2 col-md-3"></div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br>
  </div>
  <?php require 'base/footer.php'; ?>
</body>
</html>
